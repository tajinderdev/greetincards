<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'company_name',
        'address',
        'country',
        'post_code',
        'phone',
        'remember_token',
    ];

    public function stores()
    {
        return $this->hasMany(Store::class);
    }

    public function getAllShops() {
        return self::all();
    }
    
    public function getShop($id)
    {
        return self::find($id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
