<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use App\Order;
use App\Search;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(){
        $items = collect();
        $total_price = 0;
        if(auth()) {
//            dd('asdf');
            $user = User::findOrFail(auth()->user()->id);
            $id = $user->id;
            $items = Item::whereHas('User',function($query) use($id){
                $query->where('user_id', $id);
            })->get();
        $total_price = $items->sum('price');
        }

        $assign = NULL;

        return view('Main.index',compact('items','total_price','assign'));
    }

    public function shop(){
//        $items = Item::all();
        return view('Main.shop');
    }

    public function cart(){
//        $items = Cart::where('user_id', auth()->user()->id)->get();

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
        $orders = Order::where('buyer_name',auth()->user()->name)->get();
        return view('Main.orders',compact('orders'));
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
            if($search = Search::where('search_text',$item->category)->first()){
                $search->count = $search->count + 1;
                $search->save();
            }
            else {

                $search = new Search;
                $search->search_text = $item->category;
                $search->customer_id = auth()->user()->id;
                $search->count = 1;
                $search->save();
            }

//            $search = new Search;
//            $search->search_text = $item->sub_category;
//            $search->customer_id = auth()->user()->id;
//            $search->save();
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
        $max_search = Search::select('search_text')->where('customer_id',auth()->user()->id)->orderBy('count','desc')->take(2)->get();
        $items = Item::where('category',$max_search['0']->search_text)->orWhere('category',$max_search['1']->search_text)->get();
        return view('Main.category',compact('items'));
    }


}
