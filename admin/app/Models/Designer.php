<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'dob',
        'address',
        'country',
        'post_code',
        'phone',
        'role',
        'remember_token',
    ];


    public function designers()
    {
        return $this->belongsTo(Designers::class);
    }

    public function getAllDesigners() {
        return self::all();
    }
    
    public function getDesigner($id)
    {
        return self::find($id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
