<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Services;



class MainController extends Controller
{
  public function index() {
    $products = Product::get();
    return view('index', compact('products'));
  }
  public function contacts() {
    return view('contacts');
  }
  public function categories() {
    $categories = Category::get();
    return view('categories', compact('categories'));
  }
  public function services() {
    $services = Services::get();
    return view('services', compact('services'));
  }
  public function category($code) {
    $category = Category::where('code', $code)->first();
    return view('category', compact('category'));
  }
  public function product($category, $product = null) {
    return view('product', ['product' => $product]);
  }

}
