@extends ('layouts.main')

@section ('content')

<div class="row-fluid">
    <div class="top-nav clearfix">
        <div class="col-xs-24">
            <div class="sort-category hidden-sm hidden-md hidden-lg">
                <div class="dropdown">
                    <a data-toggle="dropdown" href="#" class="sort-category__link">По свежести <i class="ico ico-arrow-down-grey sort-category__ico"></i></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" href="#" target="_blank">По рейтингу</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="sort text-right hidden-xs">
                <span class="sort__text">
                    Сортировать по:
                    <span class="sort__by">свежести</span> и
                    <span class="sort__link link-is-active">рейтингу</span>
                </span>
            </div>
        </div>
    </div>
</div>

@forelse ($actions as $action)

<div class="row-fluid">
    <article role="article" class="content-block clearfix">

        <div class="sidebar col-xs-24 col-sm-6">
            <div class="sidebar__item">
                <a href="offer.html" title="Скидка 20% на все средства по уходу за волосами Gliss Kur">
                    <div class="sidebar__img">
                        <img src="{{ URL::asset('img/temp/temp_photo-1.jpg') }}" alt="" class="img-responsive">
                    </div>
                </a>
            </div>
            <div class="sidebar__item">
            <?php $brand_name = App\Models\Brand::where('id', '=', $action->brand_id)->first(); ?>
                <strong><a href="{{ route ('brand', ['brand_id' => $action->brand_id])}}">{{ $brand_name->name }}</a></strong>
            </div>
        </div>
        
        <div class="col-xs-24 col-sm-6">
            <a role="link" href="/show" class="content-block__heading">
                <h2>{{ $action->name }}</h2>
            </a>
            <p class="content-block__introtext">{{ $action->text }}</p>
            <p class="content-block__date">Срок проведения: {{ Carbon\Carbon::parse($action->active_from)->format('d.m.Y') }} - {{ Carbon\Carbon::parse($action->active_to)->format('d.m.Y') }}</p>
            <ul class="content-block__list list-unstyled list-inline hidden-xs">
                @foreach ($action->tags as $tag)
                <li class="content-block__item"><a href="{{route('tag', ['tag_id' => $tag->id])}}" class="btn btn-default content-block__tag">{{ $tag->name }}</a></li>
                @endforeach
            </ul>
            <div class="content-block__footer clearfix">
                <div class="content-block__tag--wrapper pull-left">
                    <button role="button" class="btn btn-primary">
                        <i class="content-block__cart ico ico-cart pull-left hidden-xs"></i>
                        Купить онлайн
                    </button>
                </div>
                <div class="pull-left social">
                    <ul class="social__list list-unstyled list-inline">
                        <li class="social__item">
                            <a role="link" href="/" class="social__link social__link--ok anim">
                                <i class="social-ico social-ico-ok anim"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a role="link" href="/" class="social__link social__link--vk anim">
                                <i class="social-ico social-ico-vk anim"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a role="link" href="/" class="social__link social__link--tw anim">
                                <i class="social-ico social-ico-tw anim"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a role="link" href="/" class="social__link social__link--fb anim">
                                <i class="social-ico social-ico-fb anim"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </article>
</div>

@empty

   Нет акций

@endforelse

@endsection

@section ('navigation')
    @include ('widgets.button_load_more')
@endsection

@section ('modal')
    @include ('parts.modal')
@endsection