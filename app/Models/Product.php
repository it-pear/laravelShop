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

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_product')->withTimestamps();
    }

    public function PropertyOption()
    {
        return $this->belongsToMany(PropertyOption::class, 'propuct_property_option');
    }

    public function getPriceFoCount() {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }

    public function setNewAttribute($value) 
    {
        $this->attributes['new'] = $value === 'on' ? 1 : 0;
    }
    public function setHitAttribute($value) 
    {
        $this->attributes['hit'] = $value === 'on' ? 1 : 0;
    }
    public function setRecommendAttribute($value) 
    {
        $this->attributes['recommend'] = $value === 'on' ? 1 : 0;
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
