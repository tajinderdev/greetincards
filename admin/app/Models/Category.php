<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
    ];

    public function getAllCategory()
    {
        return self::all();
    }
    
    public function getCategory($id)
    {
        return self::find($id);
    }
    
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
