<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Property;
use App\Models\PropertyOption;
use App\Models\Product;
use App\Models\ImagesCollection;
use App\Models\Services;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionMail;
use Illuminate\Support\Facades\Cache;

class MainController extends Controller
{
  
  public function index() {
    $response = Cache::remember('index_page', 60*60, function() {
      $products = Product::get();
      $categories = Category::get();
      $recommends = Product::where('recommend', 1)->limit(8)->get();
      $hits = Product::where('hit', 1)->limit(6)->get();
      $hit = Product::where('hit', 1)->latest('created_at')->first();
      $news = Product::where('new', 1)->limit(6)->get();
      $categories = Category::limit(6)->get();
      $services = Services::get();
      return compact('products', 'categories', 'recommends', 'hits', 'hit', 'news', 'categories', 'services');
    });
    
    return view('index', $response);
  }
  public function sendmail(Request $request) {
    $data = [
      $request->names,
      $request->phone,
      $request->product,
      $request->adres
    ];
    Mail::to('yurecblinovgelarm@gmail.com')->send(new SubscriptionMail($data));
    return redirect()->route('contacts');
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
    $propertyOptions = PropertyOption::get();
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
    if ($request->filled('sortprice')) {
      $productsQuery->orderBy('price', $request->sortprice);
    }
    if ($request->filled('property')) {
      $productsQuery->whereHas('PropertyOption', function($query) {
        $query->where('property_option_id', '=', '4');
      })->get();
    }

    $products = $productsQuery->paginate(18)->withPath("?" . $request->getQueryString());
    return view('catalog', compact('products', 'categories', 'propertyOptions'));
  }
  public function product($category, $product) {
    $product = Product::where('code', $product)->first();
    $products = Product::where('category_id', $product->category_id)->limit(10)->get();
    $images = ImagesCollection::where('product_code', $product->code)->get();
    return view('product', compact('product', 'products', 'images'));
  }

}
