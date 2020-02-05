<?php

namespace App\Http\Controllers;

use App\Customer;
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

    public function registerShow(){
        return view('Main.customersignup');
    }
    public function register(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|min:8|string',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $customer = new Customer;
        $customer->user_id = $user->id;
        $customer->dob = $user->dob;
        $customer->gender = $user->gender;
        $customer->country = $user->country;
        $customer->state = $user->state;
        $customer->city = $user->city;
        $customer->pincode = $user->pincode;
        $customer->address = $user->address;
        $customer->save();
    }
}
