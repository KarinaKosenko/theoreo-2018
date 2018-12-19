<?php

namespace App\Models\Parser;

use Illuminate\Database\Eloquent\Model;

class ParserAction extends Model
{

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function parserActionsAttachments()
    {
        return $this->hasMany('App\Models\Parser\ParserActionsAttachment');
    }
}
