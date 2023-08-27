<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'slug',
        'details', 
        'price',
        'image',
        'featured',
        'quantity',
        'category_id',
        'description',
    ];

    public function getAllProduct()
    {
        return self::all();
    }
    
    public function getProduct($id)
    {
        return self::find($id);
    }

    // public function category()
    // {
    //     return $this->belongsToMany(Category::class);
    // }
    
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }   
}
