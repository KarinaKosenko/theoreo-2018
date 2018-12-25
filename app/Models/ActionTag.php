<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionTag extends Model
{
    protected $table = 'action_tag';
	
    protected $fillable = [
        'action_id', 'tag_id'
    ];
}
