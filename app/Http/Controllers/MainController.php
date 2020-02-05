<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $items = Item::all();
        return view('Main.index',compact('items'));
    }

    public function cart(){
        $items = Cart::where('user_id', auth()->user()->id)->get();

        $user = User::findOrFail(auth()->user()->id);

        $id = $user->id;
        $items = Item::whereHas('User',function($query) use($id){
            $query->where('user_id', $id);
        })->get();
        return view('Main.cart',compact('items'));
    }

    public function vendor(){
        return view('Main.vendorSignup');
    }

    public function login(){
        return view('Main.login');
    }

    public function order(){
        return view('Main.orders');
    }

    public function account(){
        return view('Main.account_info');
    }

    public function confirmation(){
        return view('Main.confirmation');
    }
}
