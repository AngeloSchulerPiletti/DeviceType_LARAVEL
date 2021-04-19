<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class AgentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    { 
        $device = "desktop/";
        $agent = new Agent();
        if($agent->isMobile() == true){
            $device = "mobile/";
        }
        define('DEVICE_TYPE', $device);
        return $next($request);
    }
}
