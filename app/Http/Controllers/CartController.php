<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Main.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        return $request->all();

//        Cart::create([
//            'user_id' => $request->user_id,
//            'item_id' => $request->item_id,
//        ]);

        $item = Item::find(request('item_id'));
        $user = User::find(request('user_id'));
        $user->Item()->syncWithoutDetaching($item);

        return redirect::back()->with('message','Added to Cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Cart $cart,$id)
    {
        $item = Item::find($id);
        $user = User::find(auth()->user()->id);
        $user->Item()->detach($item);

        return redirect::back()->with('message','Removed from cart');
    }

    public function assign_cashier(){
        $user = User::findOrFail(auth()->user()->id);

        $id = $user->id;
        $items = Item::whereHas('User',function($query) use($id){
            $query->where('user_id', $id);
        })->get();
        $total_price = $items->sum('price');


        return view('Main.cart',compact('items','total_price'));
    }
}
