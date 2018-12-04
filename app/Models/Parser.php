<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class Parser extends Model
{
    protected $settings = [];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->settings = self::all()->first();
/*        foreach ($settings as $setName => $setValue) {
            $this->settings[$setName] = $setValue;
        }*/
    }

    abstract function getData();
}
