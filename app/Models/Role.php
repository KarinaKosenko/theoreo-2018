<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['caption', 'code'];
    
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
