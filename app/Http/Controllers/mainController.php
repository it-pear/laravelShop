<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ImagesCollection;
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
  public function catalog(Request $request) {
    $categories = Category::get();
    $productsQuery = Product::query();

    if ($request->filled('toprice')) {
      $productsQuery->where('price', '>=', $request->toprice);
    }
    if ($request->filled('doprice')) {
      $productsQuery->where('price', '<=', $request->doprice);
    }
    if ($request->has('category')) {
      $productsQuery->where('category_id', '=', $request->category);
    }
    if ($request->filled('search')) {
      $productsQuery->where('name', 'LIKE', '%' . $request->search . '%');
    }

    $products = $productsQuery->orderBy('price', 'asc')->paginate(9)->withPath("?" . $request->getQueryString());
    return view('catalog', compact('products', 'categories'));
  }
  public function product($category, $product) {
    $product = Product::where('code', $product)->first();
    $products = Product::where('category_id', $product->category_id)->limit(2)->get();
    $images = ImagesCollection::where('product_code', $product->code)->get();
    return view('product', compact('product', 'products', 'images'));
  }

}
