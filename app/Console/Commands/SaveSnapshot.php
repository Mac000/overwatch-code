<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SaveSnapshot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'snapshot:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save a website snapshot in Wayback machine';

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
        /* Currently the snapshot is saved successfully but I am not able to store it in my archive.
         * Next target is to store it in "My Archive".
         * Another Next Enhancement is to allow the command to accept array of arguments (urls) and save snapshot of
         * each url in the array while properly logging it and alerting the admin in case a snapshot attempt has failed.
         */

        // DO not Send Param if you don't need it as "on"
        $response = Http::asForm()->post('https://web.archive.org/save', [
            'url' => 'https://example.com/',
//            'capture_outlinks' => 'on',
//            'capture_all' => 'on',
            'capture_screenshot' => 'on',
//            'wm-save-mywebarchive' => 'on',
//            'email_result' => 'on',
        ]);

        /* Perhaps for each saved snapshot, we should send request soon after to "Get Snapshot" api endpoint
         * so that we can correctly save the latest snapshot (returned by api) into our DB.
         * This way, we can also build record of snapshots taken by us.
         * NOTE: After hours of investigation it turns out that You can not send Get snapshot request soon after,
         * You have to schedule it. Till now, it has been observed that it takes 5-30 mins for a snapshot to
         * appear in Get snapshot endpoint. So your flow should be:
         * 1. Validate links and make sure they are accessible (do not return 4xx or 5xx errors).
         * 2. Take a Snapshot.
         * 3. Wait for some time, probably 30 mins, then get the closet snapshot via get snapshot url to get the latest
         * snapshot (potentially saved by our CRON). The key here is that the changes in site content are less likely.
         * Maybe prices are updated after every 3-4 months and specs are rarely updated. So it's a very rare chance that
         * we miss an update between our last saved snapshot and latest saved snapshot. Therefore, wait time of 30-60mins
         * should not be an issue. Another important point is that Wayback only allows saving a snapshot every 45mins for a url.
         * That means if our CRON save a snapshot then we are gurranteed that there won't be a new snapshot for 45 mins.
         * We can hit Get closet endpoint before 45 mins and get our saved snapshot link. Perhaps you should save the time
         * of your app & wayback timestamp while saving a snapshot for future use reasons.
         */

        return Command::SUCCESS;
    }
}
