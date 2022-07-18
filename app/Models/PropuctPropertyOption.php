<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropuctPropertyOption extends Model
{
    protected $table = 'propuct_property_option';
    protected $fillable = ['property_option_id', 'product_id'];
}
