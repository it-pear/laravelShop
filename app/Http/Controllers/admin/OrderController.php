<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::where('status', 1)->paginate(10);
        return view('auth.admin.orders.index', compact('orders'));
    }
    public function show(Order $order)
    {
        return view('auth.admin.orders.show', compact('order'));
    }
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
    public function update(Request $request, Order $order)
    {
        $params = $request->all();
        
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($product->image);
            $params['image'] = $request->file('image')->store('products');
        }

        foreach (['new', 'hit', 'recommend'] as $fieldName) {
            if (!isset($params[$fieldName])) {
                $params[$fieldName] = 0;
            } 
        }
        $product->update($params);
        return redirect()->route('products.index');
    }
}
