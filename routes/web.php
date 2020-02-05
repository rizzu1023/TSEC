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

    Route::resource('/item','ItemController')->middleware('vendor');
    Route::resource('/offer','OfferController');

});

Route::get('/', 'MainController@index')->name('index');
Route::get('/cart','MainController@cart')->middleware('auth');
Route::post('/cart','CartController@store')->middleware('auth');
Route::delete('/cart/{id}','CartController@destroy')->middleware('auth');
Route::get('/login/show','MainController@login');
Route::post('/logins','Auth\LoginController@authenticate');
Route::get('/vendor','MainController@vendor');
Route::post('/vendor','VendorController@store')->name('vendor.store');

Route::get('/account','MainController@account')->middleware('auth');
Route::get('/order','MainController@order');
Route::get('/confirmation','MainController@confirmation');



