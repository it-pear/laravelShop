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

Route::middleware(['auth'])->group(function() {
  Route::group([
    'prefix' => 'person',
    'as' => 'person.'
  ], function () {
    Route::get('/orders', 'App\Http\Controllers\Person\OrderController@index')->name('orders.index');
    Route::get('/orders/{order}', 'App\Http\Controllers\Person\OrderController@show')->name('orders.show');
    Route::get('/profile', 'App\Http\Controllers\Person\OrderController@profile')->name('profile');
  });

  Route::group([
    'prefix' => 'admin'
  ], function(){
    Route::group(['middleware' => 'is_admin' ], function() {
      Route::get('/home', 'App\Http\Controllers\admin\HomeController@index')->name('home');
      Route::resource('/orders', 'App\Http\Controllers\admin\OrderController');
      // Route::post('/orders', 'App\Http\Controllers\admin\OrderController@destroy')->name('orders.destroy');
      // Route::get('/orders/{order}', 'App\Http\Controllers\admin\OrderController@show')->name('orders.show');

      Route::resource('categories', 'App\Http\Controllers\admin\CategoryController');
      Route::get('upload', 'App\Http\Controllers\admin\ProductController@upload')->name('upload');
      Route::resource('products', 'App\Http\Controllers\admin\ProductController');
      Route::resource('images', 'App\Http\Controllers\admin\ImagesController');
      Route::resource('services', 'App\Http\Controllers\admin\ServicesController');
    });
    
  });
});

Route::middleware(['checkout_auth'])->group(function() {
  Route::get('/checkout', 'App\Http\Controllers\BasketController@checkout')->name('checkout');
});

Route::post('/products/import', 'App\Http\Controllers\import\ProductController@import')->name('import.products');

Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');
Route::get('/contacts', 'App\Http\Controllers\MainController@contacts')->name('contacts');
Route::get('/buy', 'App\Http\Controllers\MainController@buy')->name('buy');
Route::get('/policy', 'App\Http\Controllers\MainController@policy')->name('policy');
Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/services', 'App\Http\Controllers\MainController@services')->name('services');
Route::get('/basket', 'App\Http\Controllers\BasketController@basket')->name('basket');
Route::get('/checkout-nologin', 'App\Http\Controllers\BasketController@checkoutnologin')->name('checkoutnologin');
Route::post('/checkout/send', 'App\Http\Controllers\BasketController@checkoutConfirm')->name('checkout-confirm');
Route::post('/checkout/sendauth', 'App\Http\Controllers\BasketController@checkoutConfirmAuth')->name('checkout-confirm-auth');

Route::post('/basket/add/{id}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket-add');
Route::post('/basket/remove/{id}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');
Route::post('/basket/delte/{id}', 'App\Http\Controllers\BasketController@basketDelte')->name('basket-delte');
Route::get('/catalog', 'App\Http\Controllers\MainController@catalog')->name('catalog');
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


