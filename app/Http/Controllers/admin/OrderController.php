<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request) {
        $ordersQuery = Order::query();
        if ($request->filled('search')) {
          $ordersQuery->where('phone', 'LIKE', '%' . $request->search . '%');
        }
        $orders = $ordersQuery->orderBy('created_at','DESC')->where('status', '>=', 1)->paginate(10)->withPath("?" . $request->getQueryString());
        // $orders = Order::where('status', '>=', 1)->paginate(10);
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
        $order->update($params);
        return redirect()->back();
    }
}
