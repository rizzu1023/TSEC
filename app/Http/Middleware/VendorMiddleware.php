<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class VendorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()){
            $user = User::where('id',auth()->user()->id)->where('isVendor', 1)->first();
            if($user)
                return $next($request);
            else{
                dd('you are not a vendor');
            }
        }
        else{
            dd('Login first');
        }
    }
}
