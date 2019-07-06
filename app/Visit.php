<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{

    const UPDATED_AT = null;

    public static function createArrValue()
    {
        $arrValue = [];
        $arrValue['visitsToday'] = DB::table('visits')
            ->whereDate('created_at', date('Y-m-d'))
            ->count('visitor');
        $arrValue['uniqVisitsToday'] = DB::table('visits')
            ->whereDate('created_at', date('Y-m-d'))
            ->distinct('visitor')
            ->count('visitor');
        $arrValue['uniqVisitsPerWeek'] = DB::table('visits')
            ->distinct('visitor')
            ->whereRaw('created_at > DATE_SUB(NOW(), INTERVAL 168 HOUR)')
            ->count('visitor');
        $arrValue['visitsPerLastDay'] = DB::table('visits')
            ->where('visitor', $_SERVER['REMOTE_ADDR'])
            ->whereRaw('created_at > DATE_SUB(NOW(), INTERVAL 24 HOUR)')
            ->count();
        return $arrValue;
    }

}
