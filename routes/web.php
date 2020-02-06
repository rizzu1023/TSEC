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

use App\Http\Controllers\GeoLocationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
    Route::post('/user/{id}/vendor','AdminController@vendor');
    Route::post('/user/{id}/vendor/remove','AdminController@vendorRemove');
    Route::get('vendor/{id}','VendorController@show')->name('vendor.show');

    Route::resource('/order','OrderController');

    Route::resource('/item','ItemController')->middleware('vendor');
});

Route::get('/checkout','PayController@checkout');
Route::post('/pay','PayController@pay');
Route::get('/pay-success', 'PayController@success');

Route::resource('/offer','OfferController');

Route::get('/', 'MainController@index')->name('Main.index');
Route::get('/cart','MainController@cart')->middleware('auth');
Route::post('/cart','CartController@store')->middleware('auth');
Route::delete('/cart/{id}','CartController@destroy')->middleware('auth');
Route::get('/login/show','MainController@login')->name('login.show');
Route::post('/logins','Auth\LoginController@authenticate');
Route::get('/vendor','MainController@vendor');
Route::post('/vendor','VendorController@store')->name('vendor.store');

Route::get('/account','MainController@account')->middleware('auth');
Route::get('/order','MainController@order');
Route::get('/confirmation','MainController@confirmation');
Route::get('/contact','MainController@contact');
Route::get('/product/{category}','MainController@product');
Route::get('/product/price/{price}','MainController@productByPrice');
Route::get('/product/single/{id}','MainController@singleProduct');
Route::get('/product/{category}/{brand}','MainController@productByBrand');
Route::get('/product/single/filter/{brand}','MainController@singleProductBrand');
Route::get('/customer/register','AdminController@registerShow')->name('register.show');
Route::post('/customer/register','AdminController@register')->name('register.store');

Route::get('/location','GeoLocationController@location');



