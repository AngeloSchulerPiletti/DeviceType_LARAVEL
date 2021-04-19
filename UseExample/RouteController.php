<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Jenssegers\Agent\Agent;




class RouteController extends Controller
{
    public function index(){
        // $device = "desktop/";

        // $agent = new Agent();
        // if($agent->isMobile() == true){
        //     $device = "mobile/";
        // }
        return view(DEVICE_TYPE . 'welcome');
    }

}
