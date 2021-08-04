<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['code', 'name', 'category_id', 'description', 'price', 'image', 'hit', 'new', 'recommend'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getPriceFoCount() {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }

    public function isHit()
    {
        return $this->hit == 1;
    }
    public function isNew()
    {
        return $this->new == 1;
    }
    public function isRecommend()
    {
        return $this->recommend == 1;
    }
}
