<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesCollection extends Model
{
    protected $fillable = ['product_code', 'filename'];
    public function products()
    {
        return $this->belongsTo('App\Product', 'product_code');
    }
}
