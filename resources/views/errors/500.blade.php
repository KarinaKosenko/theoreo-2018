@extends ('layouts.main')

@section ('content')

<div class="row-fluid">
    <div class="top-nav clearfix">
        <div class="col-xs-24">
            <div class="page-prev">
                <a href="/" class="page-prev__link js-back">
                    <div class="page-prev__container">
                        <i class="page-prev__ico ico ico-arrow-left"></i>
                    </div>
                    <span class="page-prev__text">На главную</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <aside class="sidebar col-xs-24 col-md-9">
        <div class="error__num">
            500
        </div>
    </aside>
    <div class="error__text col-xs-24 col-md-15">
        <h1 class="error__heading">Ошибка сервера!</h1>
        <p>На сервере произошла непредвиденная ошибка.</p>
    </div>
</div>

@endsection