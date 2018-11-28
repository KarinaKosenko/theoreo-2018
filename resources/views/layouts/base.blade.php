<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="kywords" content="">
    <meta name="description" content="">
    <meta name="author" content="parapix.ru">

    <meta property="og:site_name" content="Theoreo-2018" />
    <meta property="og:title" content="Theoreo - сайт скидок" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://theoreo-2018.ru" />
    <meta property="og:image" content="/theme/images/icon/share.png" />
    <meta property="og:description" content="Описание сайта" />

    <link rel="apple-touch-icon" sizes="60x60" href="img/icon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/icon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/icon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icon/apple-touch-icon-152x152.png">

    <link rel="shortcut icon" href="img/icon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="js/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="js/owl-carousel/owl.theme.css">
    @yield ('head_styles')
</head>

<body>

    <noscript>
        <div class="notice notice--warning">
            <div class="container text-center">
                <!--noindex-->
                Внимание! В вашем браузере отключен <b>JavaScript</b>. Для работы с сайтом, <b>включите его</b>.
                <!--/noindex-->
            </div>
        </div>
    </noscript>

    @yield ('header')

    @yield ('content')

    @yield ('footer')

    @yield ('modal')

    @yield ('bottom_scripts')

</body>

</html>
