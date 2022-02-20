<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use SoftDeletes;
    protected $fillable = ['name'];

    public function propertyOptions() 
    {
        return $this->hasMany(PropertyOption::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
