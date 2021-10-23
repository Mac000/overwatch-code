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
        return Command::SUCCESS;
    }
}
