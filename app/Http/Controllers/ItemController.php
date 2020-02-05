<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('Admin.Item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension =$request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/item/images',$fileNameToStore);
        }
        else{
            $fileNameToStore = 'default.jpeg';
        }
        $item = Item::create([
            'name' => $request->name,
            'image' => $fileNameToStore,
            'price' => $request->price,
            'category' => $request->category,
            'size' => $request->size,
            'color' => $request->color,
            'description' => $request->description,
            'sub_category' => $request->sub_category,
            'vendor_id' => $request->vendor_id,
            'brand' => $request->brand,
            'model_no' => $request->model_no,
            'height'=> $request->height,
            'weight' => $request->weight,
            'width' => $request->width,
            'warranty' => $request->warranty,
            'model' => $request->model,
        ]);

        return redirect::route('item.index')->with('message','Item has been succesfully Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('Admin.Item.show',compact('item'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect::route('item.index')->with('message','Successfully Deleted');
    }
}
