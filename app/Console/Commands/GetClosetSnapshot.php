<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class GetClosetSnapshot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'snapshot:closet {url : The url for which closet snapshot should be retrieved}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets the closet snapshot of a url using Wayback Machine API';

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
        $url = $this->argument('url');
        $response = Http::get('http://archive.org/wayback/available?', [
            'url' => $url,
        ]);
        
        // $response->json() will give the response as json
        // You are free to do whatever you need with response.
        // Perhaps you need to store it in DB to prevent abusing WayBack API.
        dd($response->json());
        return Command::SUCCESS;
    }
}
