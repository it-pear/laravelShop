<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCreated;


class Order extends Model
{
  protected $fillable = ['status'];
  public function products() 
  {
    return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
  }
  public function getFullPrice()
  {
    $sum = 0;
    foreach ($this->products as $product) {
      $sum += $product->getPriceFoCount();
    }
    return $sum;
  }

  // public function user() 
  // {
  //   return $this->belongsTo(User::class);
  // }

  public function getPriceAllCount()
  {
    $sum = 0;
    foreach ($this->products as $product) {
      $sum += $product->pivot->count;
    }
    return $sum;
  }


  public function saveOrder($name, $phone, $email, $userId, $country, $city, $street, $home, $index, $message, $checkout_payment_method) 
  {
    if ($this->status == 0) {
      $this->name = $name;
      $this->phone = $phone;
      
      $this->status = 1;
      $this->user_id = $userId;
      $this->country = $country;
      $this->city = $city;
      $this->street = $street;
      $this->home = $home;
      $this->index = $index;
      $this->message = $message;
      $this->checkout_payment_method = $checkout_payment_method;
      $this->save();
      session()->forget('orderId');
      Mail::to('yurecblinovgelarm@gmail.com')->send(new OrderCreated());
      return true;  
    } else {
      return false;
    }
      
  }
}
