<!-- (.)(.) -->
<!DOCTYPE html>
<html>

<head lang="ru">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=9">
    <meta content="width=1004,maximum-scale=1.0" name="viewport">
    <title>{{ $title or 'Hello!' }}</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=1024, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="/bower_components/animate.css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/bower_components/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/{{ $css or 'index' }}.css" />
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/bower_components/lt-ie-9/lt-ie-9.min.js"></script>
    <![endif]-->
    <link rel="icon" type="image/ico" href="/favicon.ico" />
</head>

<body id="top">

<div class="wait"></div>

<div class="fade"></div>

<div class="cart-data pop-label">
    <span><a href="/cart">2</a></span> товара в <a href="/cart">Корзине</a> <a onclick="movePopLabel($(this).parent(), 0);" href="javascript: void(0);" class="close"><i class="fa fa-close"></i> скрыть</a>
</div>

<div class="courses-data pop-label">
    <span><a href="">1</a></span> программа в <a href="">Портфеле</a> <a onclick="movePopLabel($(this).parent(), 0);" href="javascript: void(0);" class="close"><i class="fa fa-close"></i> скрыть</a>
</div>

@yield('content')

<script src="/bower_components/jquery-form/jquery.form.js"></script>
<script src="/bower_components/cookie/cookie.min.js"></script>
<script src="/js/js.js"></script>
</body>
</html>