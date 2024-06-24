<?php

namespace App\Helper;
use Carbon\Carbon;

class Helper
{
    public static function getAge($birth_date='')
    {
        try{
            $bod = Carbon::parse($birth_date);
            return $bod->diff(Carbon::now())
            ->format('%y year, %m month, %d day');
        }catch(\Exception $d){
            return "Could Not pass";
        }
    
    }
}
