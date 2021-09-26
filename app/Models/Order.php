<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCreated;


class Order extends Model
{
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
    //     return $this->belongsTo(User::class);
    // }

    public function getPriceAllCount()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->pivot->count;
        }
        return $sum;
    }


    public function saveOrder($name, $phone, $email) 
    {
        if ($this->status == 0) {
            $this->name = $name;
            $this->phone = $phone;
            $this->status = 1;
            $this->save();
            session()->forget('orderId');
            Mail::to($email)->send(new OrderCreated());
            return true;    
        } else {
            return false;
        }
            
    }
}
