<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route
Route::auth();

Route::get('/home', 'HomeController@index');


/**
 * System Routers Group From here
 */
Route::group(['middleware'=>'auth'],function(){

    //System Customer Route
    Route::resource('system/customer','System\Customer\CustomerController');
    //System Inventory Route
    Route::resource('system/inventory','System\Inventory\InventoryController');
    //System Dispatch
    Route::resource('system/dispatch','System\Dispatch\DispatchController');
    //System Orders Route
    Route::resource('system/orders','System\Orders\OrdersController');
    //System Stock Route
    Route::resource('/system/stock','System\Stock\StockController');
    //System Route
    Route::resource('/system','System\systemController');

});
