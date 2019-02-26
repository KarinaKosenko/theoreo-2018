<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['name', 'brand_id', 'city_id', 'active_from', 'active_to', 'text', 'upload_id', 'status', 'links', 'type'];
    
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
    
    public function upload()
    {
        return $this->belongsTo('App\Models\Upload');
    }
    
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
}
