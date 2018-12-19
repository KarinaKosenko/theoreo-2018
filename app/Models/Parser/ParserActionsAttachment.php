<?php

namespace App\Models\Parser;

use Illuminate\Database\Eloquent\Model;

class ParserActionsAttachment extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function parserAction()
    {
        return $this->belongsTo('App\Models\Parser\ParserAction');
    }
}
