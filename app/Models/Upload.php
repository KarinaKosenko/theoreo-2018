<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['path', 'ext', 'size', 'old_name'];
    
    public function action()
    {
        return $this->hasOne('App\Models\Action');
    }
    
    public function brands()
    {
        return $this->hasOne('App\Models\Brand');
    }
}
