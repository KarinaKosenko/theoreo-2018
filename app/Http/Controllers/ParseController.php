<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Includes\Classes\Parser\VkParser,
    App\Models\Parser\ParserSearchPhrase,
    App\Models\Parser\ParserStopPhrase,
    App\Models\Parser\ParserAction,
    App\Models\Parser\ParserActionsAttachment,
    App\Models\Parser\ParserRun,
    Illuminate\Support\Facades\Config;

class ParseController extends Controller
{
    public function getWall()
    {
        $phrases = [
            'stop' => ParserStopPhrase::getAllValues(),
            'search' => ParserSearchPhrase::getAllValues(),
        ];
        $vkParser = new VkParser(Config::get('vk-requester.app_params'));
        $vkParser
            ->setStopPhrases($phrases['stop'])
            ->setSearchPhrases($phrases['search']);

        $result = $vkParser->execute(ParserRun::latest()->value('parse_time'));

        foreach ($result as $arAction) {

            $attachnments = [];
            if (isset($arAction['attachments'])) {
                foreach ($arAction['attachments'] as $arAttachnment) {
                    $attachnments[] = new ParserActionsAttachment($arAttachnment);
                }
                unset($arAction['attachments']);
            }

            $action = ParserAction::create($arAction);
            $action->ParserActionsAttachments()->saveMany($attachnments);
        }

        $parserRun = ParserRun::create([
            'all_records_cnt' => $vkParser->lastActionsCount(),
            'added_actions_cnt' => count($result),
            'parse_time' => date('Y-m-d H:i:s')
        ]);

        return view('vk_parser.parser_run', ['phrases' => $phrases, 'parserRun' => $parserRun]);
    }

    public function actions()
    {
        $allActions = ParserAction::all();
        return view('vk_parser.parser_actions', ['parserActions' => $allActions->sortByDesc('created_at')]);
    }
}
