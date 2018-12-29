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

<?php

   foreach ($actions as $action) {
    $brand = DB::table('brands')->where('id', $action->brand_id)->value('name');
?>
         
         
    


<div class="row-fluid">
    <article role="article" class="content-block clearfix">

        <div class="sidebar col-xs-24 col-sm-6">
            <div class="sidebar__item">
                <a href="offer.html" title="Скидка 20% на все средства по уходу за волосами Gliss Kur">
                    <div class="sidebar__img">
                        <img src="img/temp/temp_photo-1.jpg" alt="" class="img-responsive">
                    </div>
                </a>
            </div>
            <div class="sidebar__item">
                <strong><?php echo $brand; ?></strong>
            </div>
        </div>
        
        <div class="col-xs-24 col-sm-6">
            <a role="link" href="/show" class="content-block__heading">
                <h2><?php echo $action->name; ?></h2>
            </a>
            <p class="content-block__introtext"><?php echo $action->text; ?></p>
            <p class="content-block__date">Срок проведения: <?php echo Carbon\Carbon::parse($action->active_from)->format('d.m.Y'); ?> - <?php echo Carbon\Carbon::parse($action->active_to)->format('d.m.Y'); ?></p>
            <ul class="content-block__list list-unstyled list-inline hidden-xs">
                <?php
                    foreach ($action_tag as $action_tag_item) {
                        if ($action_tag_item->action_id == $action->id)
                        {
                        $tag_name = DB::table('tags')->where('id', $action_tag_item->tag_id)->value('name');
                ?>
                    <li class="content-block__item"><a href="" class="btn btn-default content-block__tag"><?php echo $tag_name; }?></a></li><?php } ?>
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
<?php
}
?>

@endsection

@section ('navigation')
    @include ('widgets.button_load_more')
@endsection

@section ('modal')
    @include ('parts.modal')
@endsection