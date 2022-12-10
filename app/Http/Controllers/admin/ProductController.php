<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\ImagesCollection;
use App\Models\Category;
use App\Models\PropertyOption;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productsQuery = Product::query();
        if ($request->filled('search')) {
          $productsQuery->where('name', 'LIKE', '%' . $request->search . '%');
        }
        $products = $productsQuery->paginate(10)->withPath("?" . $request->getQueryString());
        return view('auth.admin.products.index', compact('products'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $property_option = PropertyOption::get();
        return view('auth.admin.products.form', compact('categories', 'property_option'));
    }

    /**
     * upload a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        return view('auth.admin.products.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request, Product $product)
    {
        $params = $request->all();
        // dd($request->property_option_id);
        unset($params['image']);
        if ($request->has('image')) {
            $params['image'] = $request->file('image')->store('products');
        }
        if ($request->has('photos')) {
            foreach ($request->photos as $photo) {
                $filename = $photo->store('photos');
                ImagesCollection::create([
                    'product_code' => $request->code,
                    'filename' => $filename
                ]);
            } 
        }
        $model = Product::create($params);
        $product['id'] = $model->id;
        if (!is_null($request->property_option_id)) {
            $product->PropertyOption()->sync($request->property_option_id);
        }
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, ImagesCollection $ImagesCollection)
    {
        $images = ImagesCollection::where('product_code', $product->code)->get();
        return view('auth.admin.products.show', compact('product', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        $property_option = PropertyOption::get();
        return view('auth.admin.products.form', compact('product', 'categories', 'property_option'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($product->image);
            $params['image'] = $request->file('image')->store('products');
        }
        
        if ($request->has('photos')) {
            $images = ImagesCollection::where('product_code', $product->code)->get();
            foreach ($images as $img) {
                $img->delete();
                Storage::delete($img->filename);
            }
            foreach ($request->photos as $photo) {
                $filename = $photo->store('photos');
                ImagesCollection::create([
                    'product_code' => $request->code,
                    'filename' => $filename
                ]);
            }
        }
        
        foreach (['new', 'hit', 'recommend'] as $fieldName) {
            if (!isset($params[$fieldName])) {
                $params[$fieldName] = 0;
            } 
        }
 
        $product->PropertyOption()->sync($request->property_option_id);
        $product->update($params);
        return redirect()->back();
    }

    /**
     * update general image the product
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function updateImage(Request $request, Product $product)
    {
        $params = $request->all();
        $product->update($params);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
