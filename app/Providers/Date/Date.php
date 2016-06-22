<?php

namespace App\Providers\Date;

class Date
{
    public function getInterval($date = null, $hour = 0, $min = 0, $sec = 0)
    {
        try{
            if(empty($date)) throw new \Exception;

            if(is_string($date)) $date = $this->getTimeFromDate($date, $hour, $min, $sec);

            $diff = $date - time();

            if($diff < 0) throw new \Exception;

            $days = intval($diff / 86400);

            $tail = $diff - ($days * 86400);

            $hours = intval($tail / 3600);

            $tail = $tail - ($hours * 3600);

            $mins = intval($tail / 60);

            return [$days, $hours, $mins];
        }catch (\Exception $e){
            return [0, 0, 0];
        }
    }

    public function getTimeFromDate($date = '', $hour = 0, $min = 0, $sec = 0)
    {
        try{
            $date = explode('.', $date);

            $time = mktime($hour, $min, $sec, $date[1], $date[0], $date[2]);

            return $time;
        }catch (\Exception $e){
            return time();
        }
    }
}
