<?php

namespace App\Http\Controllers;

use App\User;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function dashboard(){
        $vendors = Vendor::all();
        return view('Admin.index',compact('vendors'));
    }

    public function vendor($id){
        $vendor = Vendor::where('id',$id)->first();
        $vendor->isVendor = '1';
        $vendor->save();
        return redirect::route('dashboard')->with('message','Added to Vendor');
    }
    public function vendorRemove($id){
        $vendor = Vendor::where('id',$id)->first();
        $vendor->isVendor = '0';
        $vendor->save();
        return redirect::route('dashboard')->with('message','Added to Vendor');
    }
}
