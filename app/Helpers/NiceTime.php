<?php

namespace KushyApi\Helpers;

class NiceTime 
{

    public $time;
    /*

    The $date parameter can be passed to this snippet to
    parse the date in "time ago" format

    ```
    <?php new NiceTime($date)->getTime() ?>
    ```

    Shoutout/credits to: http://phppot.com/php/php-time-ago-function/

    */
    public static function create($date) {
        $timestamp = strtotime($date);

        $strTime = array("second", "minute", "hour", "day", "month", "year");
        $length = array("60","60","24","30","12","10");

        $currentTime = time();
        if($currentTime >= $timestamp) {
                $diff = time()- $timestamp;
                for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
                        $diff = $diff / $length[$i];
                }

                $diff = round($diff);
                if($diff == 1) 
                {
                        $time = $diff . " " . $strTime[$i] . " ago ";
                } 
                else 
                {
                        $time = $diff . " " . $strTime[$i] . "s ago ";
                }

                return $time;

        }
    }
    
}