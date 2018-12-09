<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Includes\Classes\Parser\VkParser;

class ParseController extends Controller
{
    protected $params = [
        'access_token' => '27a5186b0ed16e2f94de2e1abea2a0686dd46b95ff09a2ce45fa89b31029ae1013b87f5b4442f4a831775',
        'client_secret' => 'ALxOJTdE08wDrqas36Pt',
        'client_id' => '5523560',
    ];

    public function getWall()
    {
        $vkParser = new VkParser($this->params);
        return $vkParser->execute();
    }
}
