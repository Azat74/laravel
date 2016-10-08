<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});



Route::get('customer', function (){
    $customer = App\Customer::first();
    echo $customer->name;
});

Route::get('customer/{id}', 'CustomerController@customer');




Route::get('customer_name', function (){
    $customer = App\Customer::where('name', '=', 'Azat')->first();
    echo $customer->id;
});

Route::get('orders', function (){
    $orders = App\Order::all();
    foreach ($orders as $order){

        echo $order->name . ' belongs to ' . $order->customer->name . '<br>';
    }
});

Route::get('mypage', function (){
    $data = array(
        'var1' => 'Hamburger',
        'var2' => 'Hot Dog',
        'var3' => 'French Fries',
        'orders' => App\Order::all()
    );
    return view('mypage', $data);
});





Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => ['admin']], function () {

    Route::get('admin', function () {
        echo 'You Have Access!';
    });
});