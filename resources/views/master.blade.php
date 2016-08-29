<!-- (.)(.) -->
<!DOCTYPE html>
<html>

<head lang="ru">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=9">
    <meta content="width=1024,maximum-scale=1.0" name="viewport">
    <title>{{ $title or 'Hello!' }}</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="csrf-token" content="{!! csrf_token() !!}" />
    <link rel="stylesheet" type="text/css" href="/bower_components/animate.css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/bower_components/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/{{ $css or 'index' }}.css?v=6" />
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/bower_components/lt-ie-9/lt-ie-9.min.js"></script>
    <![endif]-->
    <link rel="icon" type="image/ico" href="/favicon.ico" />
</head>

<body id="top">

<div class="wait"></div>

<div class="fade"></div>

<div class="cart-data hidden pop-label">
    <span><a href="/cart" class="total">0</a></span> <span class="dictionary">{{ \Dictionary::get('goods', 0) }}</span> в <a href="/cart">Корзине</a> <a onclick="movePopLabel($(this).parent(), 0);" href="javascript: void(0);" class="close"><i class="fa fa-close"></i> скрыть</a>
</div>

<div class="activity-label" rel="/activity/get"></div>

@if(Auth::check() && (Auth::user()->type == 2))
    <div class="pack-data{{ $currentUser->packs()->count() ? '' : ' hidden' }} pop-label">
        <span><a href="{{ route('pack', [], false) }}" class="total">{{ $currentUser->packs()->count() }}</a></span> <span class="dictionary">{{ \Dictionary::get('packs', $currentUser->packs()->count()) }}</span> в <a href="{{ route('pack', [], false) }}">Портфеле</a> <a onclick="movePopLabel($(this).parent(), 0);" href="javascript: void(0);" class="close"><i class="fa fa-close"></i> скрыть</a>
    </div>
@endif

@yield('content')

<script src="/bower_components/jquery-form/jquery.form.js"></script>
<script src="/bower_components/cookie/cookie.min.js"></script>
<script src="/js/js.js?v=6"></script>
</body>
</html>