<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'order_number',
        'status',
        'payment_status',
        'payment_method',
        'shipping_method',
        'shipping_address',
        'billing_address',
        'subtotal',
        'tax',
        'shipping_cost',
        'total',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
   
}
