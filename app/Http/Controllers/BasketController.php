<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class BasketController extends Controller
{
    public function basket() 
    {
        $orderId = session('orderId');
        if (!is_null($orderId))
        {
            $order = Order::findOrFail($orderId);
        }
        return view('basket', compact('order'));
    }
    public function checkout() 
    {
        return view('checkout');
    }
    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) 
        {
            $order = Order::create()->id;
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        $order->products()->attach($productId);

        return redirect()->route('basket');
    }
    public function basketRemove($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) 
        {
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);
        $order->products()->detach($productId);
        return redirect()->route('basket');
    }
}
