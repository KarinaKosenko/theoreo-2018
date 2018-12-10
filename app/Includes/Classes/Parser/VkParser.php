<?php

namespace App\Includes\Classes\Parser;

use ATehnix\VkClient\Auth,
    ATehnix\VkClient\Client,
    ATehnix\VkClient\Requests\Request as vkRequest;

class VkParser extends Parser
{
    protected $lastParseActionCount = 0;

    protected function getData($startTime = null)
    {
        $params = [];
        if ($startTime) $params['start_time'] = $startTime;

        $api = new Client;
        $api->setDefaultToken($this->getParam('access_token'));
        $request = new vkRequest('newsfeed.get', $params);
        $response = $api->send($request);
        $this->data = $response;
    }

    protected function getPhotoUrl($arPhoto = [])
    {
        foreach (array_reverse($arPhoto) as $photoKey => $photoVal) {
            if (mb_stripos($photoKey, 'photo') !== false) return $photoVal;
        }
    }

    public function lastActionsCount()
    {
        return $this->lastParseActionCount;
    }

    public function execute($lastRun = null)
    {
        $arActions = [];

        $this->getData(strtotime($lastRun));

        $this->lastParseActionCount = count($this->data['response']['items']);

        foreach ($this->data['response']['items'] as $post) {
            if (isset($post['text']) && $post['type'] = 'post') {
                if ($this->checkStopPhrases($post['text'])) continue;

                if ($this->checkSearchPhrases($post['text'])) {

                    $arActions[$post['post_id']] = [
                        'ext_id' => $post['post_id'],
                        'source_id' => $post['source_id'],
                        'date' => date('Y-m-d H:i:s', $post['date']),
                        'text' => $post['text'],
                        'status' => 'Ожидает модерации'
                    ];

                    if (isset($post['attachments'])) {
                        $arAttschments = [];
                        foreach ($post['attachments'] as $attachmentKey => $attachment) {
                            switch ($attachment['type']) {
                                case 'link':
                                    $arAttschments[$attachmentKey] = [
                                        'type' => $attachment['type'],
                                        'url' => $attachment['link']['url'] ?? '',
                                        'text' => $attachment['link']['title'] ?? ''
                                    ];
                                    break;
                                case 'photo':
                                    $arAttschments[$attachmentKey] = [
                                        'type' => $attachment['type'],
                                        'url' => $this->getPhotoUrl($attachment['photo']) ?? '',
                                        'text' => $attachment['photo']['text'] ?? ''
                                    ];
                                    break;
                            }
                        }

                        $arActions[$post['post_id']]['attachments'] = $arAttschments;
                    }
                }
            }
        }

        return $arActions;
    }

}
