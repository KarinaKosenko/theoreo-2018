@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="/vk/get-wall/"
                   style="display: inline-block; padding: 5px 15px; border: 1px solid #000; margin-bottom: 10px">Запустить
                    парсер</a>
                @foreach($parserActions as $parserAction)
                    <div class="card">
                        <div class="card-header">Акция №{{$parserAction->id}} от {{$parserAction->date}}
                            ({{$parserAction->status}})
                        </div>

                        <div class="card-body">
                            <div style="font-weight: bold">Текст:</div>
                            <div>
                                {{$parserAction->text}}
                            </div>
                            <div style="font-weight: bold">Приложения:</div>
                            <div>
                                @foreach($parserAction->parserActionsAttachments as $parserActionsAttachment)
                                    @if ($parserActionsAttachment->type == 'photo')
                                        <img src="{{$parserActionsAttachment->url}}"
                                             style="max-width: 200px; max-height: 200px"/>
                                    @else
                                        <a href="{{$parserActionsAttachment->url}}">{{$parserActionsAttachment->url}}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection