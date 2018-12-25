<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionCategory extends Model
{
    protected $table = 'action_category';
	
    protected $fillable = [
        'action_id', 'category_id'
    ];
}
