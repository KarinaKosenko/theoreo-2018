<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    //protected $fillable = ['name'];
    
    public function actions()
    {
        return $this->belongsToMany('App\Models\Action');
    }
}
