<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Auth::user()->orders()->where('status', 1)->get();
        return view('auth.admin.orders.person.index', compact('orders'));
    }
    public function show(Order $order)
    {
        return view('auth.admin.orders.show', compact('order'));
    }
}
