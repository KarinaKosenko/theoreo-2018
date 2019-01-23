<header class="header anim js-header">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row-fluid">

                <!-- Hamburger -->
                <div class="col-sm-1 col-xs-1 js-search-hide">
                    <div class="menu-small anim">
                        <div class="menu-small__btn js-menu js-box-show" data-box-show="menu">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="box-list">
                    <ul class="menu__list hidden js-box-list" data-box-list="menu">

                    </ul>
                </div>
                <!-- / Hamburger -->

                <!-- LOGO -->
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-10 js-search-hide">
                    <h1 class="logo anim">
                        <a role="link" href="{{ route ('index') }}" class="logo__link">
                            <img src="{{ URL::asset('img/logo.png') }}" alt="Froggle" class="logo_img">
                        </a>
                    </h1>
                </div>
                <!-- / LOGO -->

                <!-- Город full -->
                @include ('widgets.city_selection')
                <!-- / Город full -->

                <div class="box-list">
	                <ul class="choice-city__list js-box-list" data-box-list="city">
                        <?php
                            foreach ($cities as $city) {
                        ?>

                        <li class="choice-city__list--item"><a href="#" class="choice-city__list--link"><?php echo $city->name; ?></a></li>

                        <?php
                            }
                        ?>
                    </ul>
                </div>


                @section ('search_panel')
                    @include ('widgets.search_panel')
                @show

                <div class="category-list col-xs-4 hidden-xs hidden-sm">
                    <div class="menu-category">
                        <a role="link" href="/" class="btn menu-category__link js-box-show" data-box-show="category">
                            Все категории <span class="ico ico-arrow-down-light"></span>
                        </a>
                    </div>
                </div>

                <div class="top-icon__list js-top-icon">
                   
                    <!-- Город icon -->
                    @include ('widgets.city_selection_xs')
                    <!-- / Город icon -->

                    <!-- Список icon -->
                    @include ('widgets.category_selection_xs')
                    <!-- / Список icon -->

                    <!-- Поиск icon -->
                    @section ('search_panel_xs_device')
                        @include ('widgets.search_panel_xs_device')
                    @show
                    <!-- / Поиск icon -->
                    
                </div>

                <div class="top-icon__close js-box-hide">
                    <span class="search-form__link link-is-active">
                        <i class="ico ico-close-light"></i>
                    </span>
                </div>

            </div>
          @include ('widgets.category_selection')

        </div>
    </div>
</header>
<main class="main" role="main">
    <div class="wrapper">
        <div class="container-fluid">