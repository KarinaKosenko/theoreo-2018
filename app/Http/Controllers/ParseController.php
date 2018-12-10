<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Includes\Classes\Parser\VkParser,
    App\Models\Parser\ParserSearchPhrase,
    App\Models\Parser\ParserStopPhrase,
    App\Models\Parser\ParserAction,
    App\Models\Parser\ParserActionsAttachment,
    App\Models\Parser\ParserRun;

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
        $vkParser
            ->setStopPhrases(ParserStopPhrase::getAllValues())
            ->setSearchPhrases(ParserSearchPhrase::getAllValues());

        $result = $vkParser->execute(ParserRun::latest()->value('parse_time'));

        foreach ($result as $arAction) {
            $arAttachnments = $arAction['attachments'];
            unset($arAction['attachments']);
            $action = ParserAction::create($arAction);
            foreach ($arAttachnments as $arAttachnment) {
                $attachnment = new ParserActionsAttachment($arAttachnment);
                $action->ParserActionsAttachments()->save($attachnment);
            }
        }

        ParserRun::create([
            'all_records_cnt' => $vkParser->lastActionsCount(),
            'added_actions_cnt' => count($result),
            'parse_time' => date('Y-m-d H:i:s')
        ]);

        return $result;
    }
}
