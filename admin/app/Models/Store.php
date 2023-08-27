<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
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

    public function shop()
    {
        return $this->belongsTo(Shops::class);
    }

    public function getAllStores() {
        return self::all();
    }
    
    public function getStore($id)
    {
        return self::find($id);
    }
    
}
