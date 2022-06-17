<?php

namespace App\Console\Commands;

use App\Models\FailedSnapshotUrl;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

class ReattemptFailedSnapshots extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'snapshot:reattempt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reattempts to take snapshots that failed through "snapshot:save".';

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
        $failedSnapshots = FailedSnapshotUrl::all();
        $failedUrls = $failedSnapshots->pluck('url');

        Log::channel('reattemptFailedSnapshots')->info("URLs for Save Snapshot Reattempt");
        Log::channel('reattemptFailedSnapshots')->info($failedUrls);

        $this->call('snapshot:save', [
            'urls' => $failedUrls
        ]);

        // Delete the FailedSnapshots after sending them to snapshot:save
        foreach ($failedSnapshots as $failedSnapshot) {
            FailedSnapshotUrl::destroy($failedSnapshot->id);
            Log::channel('reattemptFailedSnapshots')->info("Deleted Reattempt Snapshot with ID: {$failedSnapshot->id}");
            Log::channel('reattemptFailedSnapshots')->info("Deleted Reattempt Snapshot with URL: {$failedSnapshot->url}");
        }

        return Command::SUCCESS;
    }
}
