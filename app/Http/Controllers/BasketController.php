<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
    $email = $request->email;
    $orderId = session('orderId');
    if (is_null($orderId)) {
      return redirect()->route('index');
    }
    dd($request->request);
    $order = Order::find($orderId);
    User::create([
      'name' => $request->name . ' ' . $request->name2,
      'email' => $email,
      'password' => Hash::make($request->password)
    ]);
    $user = User::where('email', $email)->first();
    $userId = $user->id;
    $country = $request->country;
    $city = $request->city;
    $street = $request->street;
    $home = $request->home;
    $index = $request->index;
    $message = $request->message;
    $checkout_payment_method = $request->checkout_payment_method;
    $success = $order->saveOrder(
      $request->name, $request->phone, $email, $userId, $country, $city, $street, $home, $index, $message, $checkout_payment_method
    );
    if ($success) {
      // session()->flash('success', 'Ваш заказ принят в обработку');
      
      return view('mail.orderCreated');
    } else {
      session()->flash('warning', 'Случилась ошибка');
    }

    return redirect()->route('index');
  }
  public function checkoutConfirmAuth(Request $request)
  {
    $email = Auth::user()->email;
    $name = Auth::user()->name;
    $orderId = session('orderId');
    if (is_null($orderId)) {
      return redirect()->route('index');
    }
    $country = $request->country;
    $city = $request->city;
    $street = $request->street;
    $home = $request->home;
    $index = $request->index;
    $message = $request->message;
    $checkout_payment_method = $request->checkout_payment_method;
    $userId = Auth::user()->id;
    $order = Order::find($orderId);
    $success = $order->saveOrder(
      $name, $request->phone, $email, $userId, $country, $city, $street, $home, $index, $message, $checkout_payment_method
    );
    if ($success) {
      session()->flash('success', 'Ваш заказ принят в обработку');
      return view('contacts');
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
