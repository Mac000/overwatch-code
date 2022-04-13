<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\RequestException;
use App\Traits\AcquireCommandArgument;

class verifyUrlStatus extends Command
{
    use AcquireCommandArgument;

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
        $urls = $this->getArgument();

        Log::channel('verifyUrlStatus')->info("URL Argument:");
        Log::channel('verifyUrlStatus')->info($urls);

        // convert to string to allow for String Operations
        $urls = $this->toString($urls);

        Log::channel('verifyUrlStatus')->info("Stringyfied Argument:");
        Log::channel('verifyUrlStatus')->info($urls);
        Log::channel('verifyUrlStatus')->info("Type of Argument:");
        Log::channel('verifyUrlStatus')->info(gettype($urls));

        // split the array at "," and convert into sub arrays using laravel explode
        $urls = $this->toArray($urls);

        Log::channel('verifyUrlStatus')->info("Json Decoded array After Exploding String");
        Log::channel('verifyUrlStatus')->info($urls);

        // Remove "[", "]", & '"' from the array using laravel replaceArray
        $urls = $this->sanitizeArgument($urls);
        $urls = $this->removeEscapeSlashes($urls);

        Log::channel('verifyUrlStatus')->debug("Final View of Array after all the formatting");
        Log::channel('verifyUrlStatus')->debug($urls);

        foreach ($urls as $url) {
            Log::channel('verifyUrlStatus')->info("Checking URL: {$url}");
            $this->sendVerifyRequest($url);
        }
        return Command::SUCCESS;
    }

    /**
     * Send HTTP Request for url status Verification
     * @param $url
     * @return int
     */
    protected function sendVerifyRequest($url) {
        // Wrapping the Http call in try catch block is needed to catch the thrown exception so remaining code can execute
        try {
            $response = Http::retry(3, 30)->get($url)->throw();
            if ($response->successful()) {
                Log::channel('verifyUrlStatus')->info("Url verified. Returned Status: {$response->status()}");
                return Command::SUCCESS;
            }
        } catch (RequestException $exception) {
            $this->onFailure($exception, $url);
        }
    }

    /**
     * Handle HTTP errors (code >= 400)
     * @param $exception
     * @param $url
     * @return int
     */
    protected function onFailure($exception, $url) {
        // Perhaps you should send out an email to administration email address? Or Create something like Notices/Issues
        // in Nova and admins can check up notices/issues of all types when they log into Nova

        Log::channel('verifyUrlStatus')->error("Error Occurred during verification of {$url}");
        Log::channel('verifyUrlStatus')->alert("HTTP Status: {$exception->response->status()}");
//        Log::channel('verifyUrlStatus')->info("HTTP Response Body dump ⬇:");
//        Log::channel('verifyUrlStatus')->info($exception->response->body());

        return Command::FAILURE;
    }
}
