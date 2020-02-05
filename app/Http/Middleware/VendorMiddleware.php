<?php

namespace App\Http\Middleware;

use App\User;
use App\Vendor;
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
            $vendor_id = auth()->user()->Vendor->id;
            $user = Vendor::where('id',$vendor_id)->where('isVendor', 1)->first();
            if($user)
                return $next($request);
//            else{
//                dd('you are not a vendor');
//            }
        }
        else{
            dd('Login first');
        }
    }
}
