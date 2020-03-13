<?php

namespace App\Http\Controllers;

use App\Cashier;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $cashiers = User::all()->except(auth()->user()->id);
        return view('Admin.Cashier.index',compact('cashiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function create()
    {
        return view('Admin.Cashier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $cashier = new Cashier;
        $cashier->user_id = $user->id;
        $cashier->customer_count = 0;
        $cashier->store_id = 0;
        $cashier->save();



        return redirect::route('cashier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cashier  $cashier
     * @return \Illuminate\Http\Response
     */
    public function show(Cashier $cashier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cashier  $cashier
     * @return \Illuminate\Http\Response
     */
    public function edit(Cashier $cashier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cashier  $cashier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cashier $cashier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cashier  $cashier
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Cashier $cashier)
    {
        $cashier->delete();

        $c =  Cashier::where('user_id', $cashier->id)->first();
        $c->delete();
        return redirect::route('cashier.index');
    }
}
