<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function dashboard(){
        $users = User::all();
        return view('Admin.index',compact('users'));
    }

    public function vendor($id){
        $user = User::where('id',$id)->first();
        $user->isVendor = '1';
        $user->save();
        return redirect::route('dashboard')->with('message','Added to Vendor');
    }
    public function vendorRemove($id){
        $user = User::where('id',$id)->first();
        $user->isVendor = '0';
        $user->save();
        return redirect::route('dashboard')->with('message','Added to Vendor');
    }
}
