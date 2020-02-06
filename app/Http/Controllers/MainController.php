<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use App\Search;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $items = Item::all();
        $max_search = Search::where('customer_id',auth()->user()->id)->get();
        $data = $max_search->countBy('search_text');
        return collect($data);
//        $recommends = Item::where('category',$)
        return view('Main.index',compact('items','recommends'));
    }

    public function cart(){
        $items = Cart::where('user_id', auth()->user()->id)->get();

        $user = User::findOrFail(auth()->user()->id);

        $id = $user->id;
        $items = Item::whereHas('User',function($query) use($id){
            $query->where('user_id', $id);
        })->get();
        $total_price = $items->sum('price');
        return view('Main.cart',compact('items','total_price'));
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

    public function contact(){
        return view('Main.contact');
    }

    public function product($category){
        $items = Item::where('category',$category)->get();
        return view('Main.category',compact('items'));
    }

    public function singleProduct($id){
        $item = Item::where('id',$id)->first();
        if(auth()) {
            $search = new Search;
            $search->search_text = $item->category;
            $search->customer_id = auth()->user()->id;
            $search->save();

            $search = new Search;
            $search->search_text = $item->sub_category;
            $search->customer_id = auth()->user()->id;
            $search->save();
        }
        return view('Main.single-product',compact('item'));
    }

    public function productByBrand($category, $brand){
        $items = Item::where('brand',$brand)->get();
        return view('Main.category',compact('items'));
    }

    public function productByPrice($price){
        $items = Item::where('price','>',$price)->get();
        return view('Main.category',compact('items'));
    }

    public function recommend(){
        $items = Item::all();
        return view('Main.category',compact('items'));
    }
}
