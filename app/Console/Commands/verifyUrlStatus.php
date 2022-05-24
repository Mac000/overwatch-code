<?php

namespace App\Console\Commands;

use App\Notifications\SnapshotReport;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\RequestException;
use App\Traits\AcquireCommandArgument;
use Illuminate\Support\Facades\Notification;
use App\Traits\WaybackCommand;

class verifyUrlStatus extends Command
{
    use AcquireCommandArgument, WaybackCommand;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'snapshot:verifyUrl {urls*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verify the http status code of a Url. Status in 4xx and 5xx represent an error.';

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
        $this->setLogChannel('verifyUrlStatus');

        // get Argument
        $urls = $this->getArgument('urls');
        $this->logArgument(collect(["URL Argument", $urls]), "verifyUrlStatus");

        // convert to string to allow for String Operations
        $urls = $this->toString($urls);
        $this->logStringArgument(collect(["Stringyfied Argument:", $urls, "Type of Argument:", gettype($urls)]),"verifyUrlStatus");

        // split the array at "," and convert into sub arrays using laravel explode
        $urls = $this->toArray($urls);
        $this->logArrayArgument(collect(["Json Decoded array After Exploding String", $urls]), "verifyUrlStatus");

        // Remove "[", "]", & '"' from the array using laravel replaceArray
        $urls = $this->sanitizeArgument($urls);
        $urls = $this->removeEscapeSlashes($urls);
        $this->logSanitizedArgument(collect(["Final View of Array after all the formatting", $urls]), "verifyUrlStatus");

        $urlsLoopIndex = 0;
        $urlsArrayLength = count($urls);
        foreach ($urls as $url) {
            $response = $this->sendVerifyRequest($url);
            $product = $this->getProductByAnyPageUrl($url);

            // Write report information to a json file
            if ($urlsLoopIndex  === 0) { // for first ever url
                $productReport = $this->generateVerifyUrlJsonReport($url, $response, $product, true, false, $urlsLoopIndex);
            }
            elseif ($urlsArrayLength - $urlsLoopIndex == 1) { // for last url
                $productReport = $this->generateVerifyUrlJsonReport($url, $response, $product,false, true, $urlsLoopIndex);
            }
            else {
                $productReport = $this->generateVerifyUrlJsonReport($url, $response, $product, false, false, $urlsLoopIndex);
            }
            $urlsLoopIndex++;
        }

        $mailData = config('app.reports.verify_url_status');

        // json_decode $productReport to convert it into php array and pass on to report notification class
        Notification::route('mail', config('mail.site_emails.administration'))
            ->notify(new SnapshotReport($mailData, json_decode($productReport, true)));

        return Command::SUCCESS;
    }

    /**
     * Send HTTP Request for url status Verification
     * @param $url
     * @return int
     */
    protected function sendVerifyRequest($url) {
        Log::channel('verifyUrlStatus')->info("Checking URL: {$url}");

        // Wrapping the Http call in try catch block is needed to catch the thrown exception so remaining code can execute
        try {
            $response = Http::retry(3, 30)->get($url)->throw();
            $logMessages = collect(["Url verified. Returned Status: {$response->status()}"]);

            return $this->onSuccess($response, "verifyUrlStatus", $logMessages);
        } catch (RequestException $exception) {
            $logMessages = collect([
                "Error Occurred during verification of {$url}",
                "HTTP Status: {$exception->response->status()}"
            ]);
            $this->onFailure($exception, $url, "verifyUrlStatus", $logMessages);
        }
    }
}
