<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class VerifyLink extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'snapshot:verify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verify that the link is accessible. This done to sending 404 or links that returns
    errors to the save snapshot command';

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
        $urls = config('app.snapshot_urls');

        foreach ($urls as $url) {
            $response = Http::get($url);

            /* For now just log the status & successful
             * In Production, it should Log into proper file (To do Yet) & inform the admin (probably via Email)
             */
            $response->status() == 200 ? Log::info($response->status()) : Log::critical("Url is not accessible");
            $response->successful() == true ? Log::info($response->successful()) : Log::critical("Response did not return 'True' for successful()");
        }
        return Command::SUCCESS;
    }
}
