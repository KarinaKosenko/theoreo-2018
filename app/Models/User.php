<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	protected $guarded = ['id', 'created_at', 'updated_at'];
    //protected $fillable = ['name', 'email', 'email_verified_at', 'password'];
    protected $hidden = ['password', 'remember_token'];
    
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}
