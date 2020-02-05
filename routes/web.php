<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('vendor','VendorController@create')->name('vendor.create');
Route::post('vendor','VendorController@store')->name('vendor.store');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
    Route::post('/user/{id}/vendor','AdminController@vendor');
    Route::post('/user/{id}/vendor/remove','AdminController@vendorRemove');
    Route::get('vendor/{id}','VendorController@show')->name('vendor.show');


    Route::resource('/item','ItemController')->middleware('vendor');
    
});

//Route::get('admin/dashboard','AdminController@dashboard');
