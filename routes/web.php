<?php

use Illuminate\Support\Facades\Route;


Route::get('/categories', 'mainController@categories');
Route::get('/product', 'mainController@product');

Route::get('/', function () {
  return view('index');
});
Route::get('/categories', function () {
  return view('categories');
});
Route::get('/product', function () {
  return view('product');
});

Route::get('/', 'mainController@index');