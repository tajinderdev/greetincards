<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dvouchers extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'type',
        'amount',
        'discount_percentage',
        'start_date',
        'end_date',
        'is_active',
        'remeber_token',
    ];
}
