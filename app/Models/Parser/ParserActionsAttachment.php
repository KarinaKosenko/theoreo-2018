<?php

namespace App\Models\Parser;

use Illuminate\Database\Eloquent\Model;

class ParserActionsAttachment extends Model
{
    public function ParserAction()
    {
        return $this->belongsTo('App\Models\Parser\ParserAction');
    }
}
