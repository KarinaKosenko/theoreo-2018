<?php

namespace App\Models\Parser;

use Illuminate\Database\Eloquent\Model;

abstract class Phrase extends Model
{
    /*
 *  Get all phrases to array
 *  @return array
 */
    static public function getAllValues()
    {
        $res = [];
        foreach (self::all() as $prase) {
            $res[] = $prase->value;
        }
        return $res;
    }
}
