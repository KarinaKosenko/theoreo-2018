<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Models\VkParser;

class ParseController extends Controller
{
    public function getWall()
    {
        $vkParser = new VkParser();
        return $vkParser->getData();
    }
}
