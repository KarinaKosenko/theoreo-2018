@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Стоп фразы ({{count($phrases['stop'])}}):</div>

                    <div class="card-body">
                        <div>
                            <ol>
                                @foreach($phrases['stop'] as $phraseStop)
                                    <li>{{$phraseStop}}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Поисковые фразы ({{count($phrases['search'])}}):</div>

                    <div class="card-body">
                        <div>
                            <ol>
                                @foreach($phrases['search'] as $phraseSearch)
                                    <li>{{$phraseSearch}}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Результаты запуска парсера ({{$parserRun->parse_time}}):</div>

                    <div class="card-body">
                        <div>Получено записей: {{$parserRun->all_records_cnt}}</div>
                        <div>Добавлено записей в базу: {{$parserRun->added_actions_cnt}}</div>
                    </div>
                </div>
                <a href="/vk/actions/"
                   style="display: inline-block; padding: 5px 15px; border: 1px solid #000; margin-top: 10px">Назад к
                    списку статей</a>
            </div>
        </div>
    </div>
@endsection