<?php

namespace App\Models;
use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Database\Eloquent\Relations\HasOne;



class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'status',
        'settings',
        'phone',
        'company_name',
        'country_code',
        'currency_code',
        'status',
        'dob',
        'address',
        'country',
        'post_code',
        'role',
        'role_name',
        'email_verified_at',
        'github_id',
        'facebook_id',
        'google_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getDesigner($id)
    {
        return self::find($id);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    public function avatar(): HasOne
    {
        return $this->hasOne(Avatar::class);
    }

    public function getAllUsers() {
        return self::all();
    }
    
    public function getUser($id)
    {
        return self::find($id);
    }

    public function shops()
    {
        return $this->hasMany(Shops::class);
    }

    public function stores()
    {
        return $this->hasMany(Store::class);
    }
}
