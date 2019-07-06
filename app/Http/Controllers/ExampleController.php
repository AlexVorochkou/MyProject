<?php

namespace App\Http\Controllers;

use App\Visit;
use DB;

class ExampleController extends Controller
{

    public function index()
    {
        $arrValue = Visit::createArrValue();
        
        $visit = new Visit;
        $visit->useragent = $_SERVER['HTTP_USER_AGENT'];
        $visit->visitor = $_SERVER['REMOTE_ADDR'];
        $visit->save();

        return view('welcome', compact('arrValue'));
    }
}
