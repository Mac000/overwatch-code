<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class FuckCaches extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fuck:cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Flushes route, view, config and application cache';

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
        Artisan::call('view:clear');
        $this->info('Cached views have been cleared');

        Artisan::call('route:clear');
        $this->info('Route cache has been cleared');

        Artisan::call('config:clear');
        $this->info('Config cache has been cleared');

        Artisan::call('cache:clear');
        $this->info('Application Cache cleared');
    }
}
