<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GeoLocationController extends Controller
{
    public function location(Request $request){
     
        $arr_ip = geoip()->getLocation('103.246.226.154');
        dd($arr_ip);
        
        
    }

}
