<?php
namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

trait AcquireCommandArgument {

    private $logChannel = "";

    /**
     * Set Channel to write Logs
     * @param null $channel
     */
    public function setLogChannel($channel = null) {
        $this->logChannel = $channel;
    }

    /**
     * Get the channel to write logs
     * @param null $channel
     * @return string
     */
    public function getLogChannel($channel = null) {
        return $this->logChannel;
    }

    /**
     * Get argument of Command
     * @return mixed
     */
    public function getArgument() {
        $argument = $this->argument('urls');
        return $argument;
    }

    /**
     * Convert Argument to String Via json_encode & Str::of()
     * @param $argument
     * @return \Illuminate\Support\Stringable
     */
    public function toString($argument) {
        // While passing array of URLs as argument, the scheduler formats the string and the url contains a "\\"
        // for every '/'. Using Str::remove(), the '\\' can be stripped off and url becomes a normal url
        // same as prior to scheduler formatting.

        // convert to string to allow for String Operations
        $argument = json_encode($argument);
        $argument = Str::of($argument); // Get a new stringable object from the given string. (Required, otherwise errors executing Str functions)
        return $argument;
    }

    /**
     * Convert Argument to Array by exploding at "," and using json_decode at exploded array
     * @param $argument
     * @return mixed
     */
    public function toArray($argument) {
        // split the array at "," and convert into sub arrays using laravel explode
        $argument = $argument->explode(',');
        $argument = json_decode($argument);
        return $argument;
    }

    /**
     * Remove "[", "]", & '"' from Array of Strings
     * @param $argument
     * @return string
     */
    public function sanitizeArgument($argument) {
        // Remove "[", "]", & '"' from the array using laravel replaceArray
        $argument = Str::remove('[', $argument);
        $argument = Str::remove(']', $argument);
        $argument = Str::remove('"', $argument);  // remove the '"' that was not removed alongside "[" & "]"

        return $argument;
    }

    /**
     * Remove escape backslashes "\" from Array of Strings
     * @param $argument
     * @return string
     */
    public function removeEscapeSlashes($argument) {
        // Strip "\\" from Exploded Array
        $argument = Str::remove("\\", $argument);
        return $argument;
    }
}
