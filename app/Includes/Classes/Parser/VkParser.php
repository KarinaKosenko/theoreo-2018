<?php

namespace App\Includes\Classes\Parser;

use ATehnix\VkClient\Auth,
    ATehnix\VkClient\Client,
    ATehnix\VkClient\Requests\Request as vkRequest,
    App\Models\Parser\ParserRun,
    App\Models\Parser\ParserSearchPhrase,
    App\Models\Parser\ParserStopPhrase,
    App\Models\Parser\ParserAction,
    App\Models\Parser\ParserActionsAttachment;

class VkParser extends Parser
{
    public function getData($StartTime = null)
    {
        $params = [];
        if ($StartTime) $params['start_time'] = $StartTime;

        $api = new Client;
        $api->setDefaultToken($this->getParam('access_token'));
        $request = new vkRequest('newsfeed.get', $params);
        $response = $api->send($request);
        $this->data = $response;
    }

    public function execute()
    {
        $lastRun = ParserRun::latest()->value('parse_time');

        $this->setStopPhrases(ParserStopPhrase::all()->values());

        $this->setSearchPhrases(ParserSearchPhrase::all()->values());

        $this->getData(strtotime($lastRun));

        foreach ($this->data['response']['items'] as $post) {
            if (isset($post['text']) && $post['type'] = 'post') {
                if ($this->checkStopPhrases($post['text'])) continue;

                if ($this->checkSearchPhrases($post['text'])) {

                    $arParams = [
                        'ext_id' => $post['post_id'],
                        'source_id' => $post['source_id'],
                        'date' =>  date('Y-m-d H:i:s', strtotime($post['date'])),
                        'text' => $post['text'],
                        'status' => 'Ожидает модерации'
                    ];

                    $parserAction = new ParserAction($arParams);

                    /* Блок с добавлением приложений */
                }
            }
        }

        return $this->data;
    }

}
