<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'guard_name',
        'remember_token',
    ];

    public function getAllRoles()
    {
        return self::all();
    }
    
    public function getRole($id)
    {
        return self::find($id);
    }
    
}
