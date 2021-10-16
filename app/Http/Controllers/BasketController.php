<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
  public function basket() 
  {
    $orderId = session('orderId');
    if (is_null($orderId)) 
    {
      $order = Order::create();
      session(['orderId' => $order->id]);
    } else {
      $order = Order::find($orderId);
    }
    
    return view('basket', compact('order'));
  }

  public function template() 
  {
    return view('basket', compact('order'));
  }  

  public function checkoutConfirm(RegisterRequest $request)
  {
    $email = Auth::check() ? Auth::user()->email : $request->email;
    dd($request->request);
    $orderId = session('orderId');
    if (is_null($orderId)) {
      return redirect()->route('index');
    }
    $order = Order::find($orderId);
    $success = $order->saveOrder($request->name, $request->phone, $email);
    if ($success) {
      // session()->flash('success', 'Ваш заказ принят в обработку');
      return view('mail.orderCreated');
    } else {
      session()->flash('warning', 'Случилась ошибка');
    }

    return redirect()->route('index');
  }
  
  public function checkout() 
  {
    $orderId = session('orderId');
    if (is_null($orderId)) {
      return redirect()->route('index');
    }
    $order = Order::find($orderId);
    return view('checkout', compact('order'));
  }
  public function checkoutnologin() 
  {
    $orderId = session('orderId');
    if (is_null($orderId)) {
      return redirect()->route('index');
    }
    $order = Order::find($orderId);
    return view('checkoutnolog', compact('order'));
  }

  public function basketAdd(Request $request, $productId)
  {
    $count = $request->count;
    $orderId = session('orderId');
    if (is_null($orderId)) 
    {
      $order = Order::create();
      session(['orderId' => $order->id]);
    } else {
      $order = Order::find($orderId);
    }
    
    // dd($pivotRow->count);

    if ($order->products->contains($productId))
    {
      $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
      if (is_null($count)) {
        $pivotRow->count++;
      } else {
        $pivotRow->count = $count;
      }
      
      $pivotRow->update();
    } else {
      $order->products()->attach($productId);
    }
    $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
    if (is_null($count)) {
      $pivotRow->count;  
    } else {
      $pivotRow->count = $count;
    }
    $pivotRow->update();
    // $order->products()->detach($productId);

    if (Auth::check()) {
      $order->user_id = Auth::id();
      $order->save();
    }
    
    return back();
  }

  public function basketRemove($productId)
  {
    $orderId = session('orderId');
    if (is_null($orderId)) 
    {
      return redirect()->route('basket');
    }
    $order = Order::find($orderId);

    if ($order->products->contains($productId))
    {
      $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
      if ($pivotRow->count < 2)
      {
        $order->products()->detach($productId);
      } else {
        $pivotRow->count--; 
        $pivotRow->update();
      }
    } 

    return redirect()->route('basket');
  }

  public function basketDelte($productId) 
  {
    $orderId = session('orderId');
    $order = Order::find($orderId);   
    $order->products()->detach($productId);
    return redirect()->route('basket');
  }

}
