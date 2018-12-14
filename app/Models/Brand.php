<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['name', 'city_id', 'address', 'phone', 'upload_id', 'links'];
    
    public function uploads()
    {
        return $this->hasMany('Uploads');
    }
    
    public function cities()
    {
        return $this->belongsToMany('Cities');
    }
}
