<?php

namespace App\Console\Commands;

use App\Models\SnapShot;
use App\Traits\AcquireCommandArgument;
use App\Traits\WaybackCommand;
use Illuminate\Console\Command;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AddSavedSnapshot extends Command
{
    use AcquireCommandArgument, WaybackCommand;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'snapshot:add {timestamps} {urls* : the url for which a snapshot from Wayback machine should be added to system}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a snapshot to system which was saved in Wayback Machine. This command is used after
     snapshot:save to create a snapshot record in database.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $timestamps = $this->getArgument("timestamps");
        $urls = $this->getArgument("urls");
        $this->logArgument(collect(["URL Argument", $urls, "Timestamp", $timestamps]), 'addSavedSnapshot');

        // convert to string to allow for String Operations
        $urls = $this->toString($urls);
        $this->logStringArgument(collect(["Stringyfied Argument:", $urls, "Type of Argument", gettype($urls)]), 'addSavedSnapshot');
        $timestamps = $this->toString($timestamps);
        $this->logStringArgument(collect(["Stringyfied Argument:", $timestamps, "Type of Argument", gettype($timestamps)]), 'addSavedSnapshot');


        // split the array at "," and convert into sub arrays using laravel explode
        $urls = $this->toArray($urls);
        $this->logArrayArgument(collect(["Json Decoded Array after Exploding String:", $urls]), 'addSavedSnapshot');
        $timestamps = $this->toArray($timestamps);
        $this->logArrayArgument(collect(["Json Decoded Array after Exploding String:", $timestamps]), 'addSavedSnapshot');

        // Remove "[", "]", & '"' from the array using laravel replaceArray
        $urls = $this->sanitizeArgument($urls);
        $urls = $this->removeEscapeSlashes($urls);
        $this->logSanitizedArgument(collect(["Final View of Array after all the formatting", $urls]), 'addSavedSnapshot');

        $timestamps = $this->sanitizeArgument($timestamps);
        $timestamps = $this->removeEscapeSlashes($timestamps);
        $this->logSanitizedArgument(collect(["Final View of Array after all the formatting", $timestamps]), 'addSavedSnapshot');

        $index = 0;
        foreach ($urls as $url) {
            // TODO: refactor and make sure that index of timestamp is correctly incremented
            // Get closet Snapshot
            $snapshot = $this->getClosestSnapshot($url, $timestamps[$index]);
            $archivedSnapshots = $snapshot['archived_snapshots'];

            // Skip current URL when WayBack Machine does not return a url
            // TODO: Add it to the report AND/OR give it another try.
            if (empty($archivedSnapshots)) {
                Log::channel('addSavedSnapshot')->alert("Archived Snapshot not found. Wayback Timestamp is not available. Check Response dump for insights");
                $index++;
                continue;
            }

            // Check difference between snapshot attempted at and wayback timestamp (45mins acceptable)
            $waybackTimestamp = $archivedSnapshots['closest']['timestamp'];
            $diff = $this->isTimestampBetweenMins($timestamps[$index], $waybackTimestamp, config('app.snapshot_check_delay'));
            $index++;
            if ($diff === false) continue;

            $product = $this->getProductByAnyPageUrl($url);
            $isSnapshotUrlUnique = $this->validateArchivedSnapshot($archivedSnapshots);
            if ($isSnapshotUrlUnique === false) continue;

            // Save a snapshot in DB
            SnapShot::create([
                'product_id' => $product->id,
                'page_url' => $snapshot['url'],
                'snapshot_url' => $archivedSnapshots['closest']['url'],
                'wayback_timestamp' => $archivedSnapshots['closest']['timestamp'],
            ]);
        }
        // all done. if made this far, command ran successfully
        return Command::SUCCESS;
    }

    protected function getClosestSnapshot($url, $timestamp = '') {
        try {
            $response = Http::retry(3, 30)->get(config('app.closet_snapshot_endpoint'), [
                'url' => $url,
                'timestamp' => $timestamp,
            ])->throw();
            return $this->onSuccess($response, $url);
        } catch (RequestException $exception) {
            $logMessages = collect([
                "Error Occurred during verification of {$url}", "HTTP Status: {$exception->response->status()}",
                "HTTP Response Body dump ⬇:", $exception->response->body()
            ]);
            return $this->onFailure($exception, $url, 'addSavedSnapshot', $logMessages);
        }
    }

    /**
     * Handle Success of Http Request
     */
    protected function onSuccess($response, $url) {
        if ($response->successful()) {
            Log::channel('addSavedSnapshot')->info("Response Dump ⬇:");
            Log::channel('addSavedSnapshot')->info($response->json());

            // if closest screenshot is not available in response
            $archivedSnapshots = $response->json()['archived_snapshots'];
            if (empty($archivedSnapshots)) {
                return $this->onSnapshotUnavailability($url, 'addSavedSnapshot');
            }

            $closestUrl = $response->json()['archived_snapshots']['closest']['url'];
            Log::channel('addSavedSnapshot')->info("Closet Screenshot URL: {$closestUrl}");

            return $response->json(); // send the full response, leave the data manipulation on receiver function/code
        }
    }

    /**
     * Check whether Snapshot Attempted at timestamp and Wayback timestamp are between a given number of minutes
     * @param $timestamp
     * @param $waybackTimestamp
     * @param $mins
     * @return bool
     */
    protected function isTimestampBetweenMins($timestamp, $waybackTimestamp, $mins) {
        $mins = $mins * 60; // since timestamp contains seconds as well.
        $difference = $waybackTimestamp - $timestamp;
        Log::channel('addSavedSnapshot')->notice("Difference between timestamps");
        Log::channel('addSavedSnapshot')->notice($difference);

        if ($difference >= 0 && $difference < $mins) {
            Log::channel('addSavedSnapshot')->notice("Timestamp difference is less than {$mins}");
            return true;
        }
        return false;
    }

    /**
     * Validate Archived Snapshots returned by Wayback Machine. This function must be used before creating a snapshot in DB
     * @param $archivedSnapshots
     * @return false|void
     */
    protected function validateArchivedSnapshot($archivedSnapshots) {
        $closestSnapshot = $archivedSnapshots['closest'];
        $validator = Validator::make($closestSnapshot, [
            'url' => 'unique:App\Models\Snapshot,snapshot_url'
        ]);

        if ($validator->fails()) {
            Log::channel('addSavedSnapshot')->warning("Snapshot Url is not unique. Skipping snapshot.");
            Log::channel('addSavedSnapshot')->warning("Snapshot Url for reference: {$archivedSnapshots['closest']['url']}");
            return false;
        }
        return true;
    }

}
