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
    $categories = Category::get();
    $recommends = Product::where('recommend', 1)->limit(8)->get();
    $hits = Product::where('hit', 1)->limit(6)->get();
    $hit = Product::where('hit', 1)->latest('created_at')->first();
    $news = Product::where('new', 1)->limit(6)->get();
    $categories = Category::limit(6)->get();
    $services = Services::get();
    return view('index', compact('products', 'categories', 'recommends', 'hits', 'hit', 'news', 'categories', 'services'));
  }
  public function contacts() {
    return view('contacts');
  }
  public function buy() {
    return view('buy');
  }
  public function policy() {
    return view('policy');
  }
  public function categories() {
    $categories = Category::paginate(9);
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
  public function product($category, $product) {
    $product = Product::where('code', $product)->first();
    return view('product', compact('product'));
  }

}
