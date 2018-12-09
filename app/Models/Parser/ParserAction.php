<?php

namespace App\Models\Parser;

use Illuminate\Database\Eloquent\Model;

class ParserAction extends Model
{
    public function ParserActionsAttachments()
    {
        return $this->hasMany('App\Models\Parser\ParserActionsAttachment');
    }
}
