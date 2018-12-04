<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model,
    ATehnix\VkClient\Auth,
    ATehnix\VkClient\Client,
    ATehnix\VkClient\Requests\Request as vkRequest;

class VkParser extends Parser
{
    public function getData()
    {
        $api = new Client;
/*        $api->setDefaultToken($this->settings['access_token']);
        $request = new vkRequest('newsfeed.get', []);
        $response = $api->send($request);*/
        return $this->settings;
    }
}
