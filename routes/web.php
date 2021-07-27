<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\Order;

Auth::routes([
  'reset' => false,
  'confirm' => false,
  'verify' => false,
]);

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('get-logout');

Route::group([
  'middleware' => 'auth',
  'namespce' => 'Admin',
  'prefix' => 'admin',
], function(){
  Route::group(['middleware' => 'is_admin' ], function() {
    Route::get('/home', 'App\Http\Controllers\Admin\HomeController@index')->name('home');
    Route::get('/orders', 'App\Http\Controllers\Admin\OrderController@index')->name('orders');
  });
  
  Route::resource('categories', 'App\Http\Controllers\Admin\CategoryController');
  Route::resource('products', 'App\Http\Controllers\Admin\ProductController');
});

Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');
Route::get('/contacts', 'App\Http\Controllers\MainController@contacts')->name('contacts');
Route::get('/buy', 'App\Http\Controllers\MainController@buy')->name('buy');
Route::get('/policy', 'App\Http\Controllers\MainController@policy')->name('policy');
Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/services', 'App\Http\Controllers\MainController@services')->name('services');
Route::get('/basket', 'App\Http\Controllers\BasketController@basket')->name('basket');
Route::get('/checkout', 'App\Http\Controllers\BasketController@checkout')->name('checkout');
Route::post('/checkout/send', 'App\Http\Controllers\BasketController@checkoutConfirm')->name('checkout-confirm');

Route::post('/basket/add/{id}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket-add');
Route::post('/basket/remove/{id}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');
Route::post('/basket/delte/{id}', 'App\Http\Controllers\BasketController@basketDelte')->name('basket-delte');
Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product?}', 'App\Http\Controllers\MainController@product')->name('product');

View::composer(['/layout/master'], function() {
  $orderId = session('orderId');
  if (!is_null($orderId)) 
  {
    $order = Order::find($orderId);
    View::share('order', $order);
  }
});
Auth::routes();


