@extends('master')

@section('content')
<div class="gallery-page">
    <div class="fixed menu-container">
        @include('common.menu')
    </div>

    <div class="gallery section">
        <div class="grid">
            <ul class="x6 clearfix">
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="double has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
            </ul>
            <ul class="x3 clearfix">
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
            </ul>
            <ul class="x6 clearfix">
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="name-banner">
                    <a href="">
                        Юрий <span>Жданов</span>
                    </a>
                </li>
                <li class="double has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
            </ul>
            <ul class="x3 clearfix">
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
            </ul>
        </div>
    </div>

    <div class="footer section">
        <div class="wrapper clearfix">

            @include('common.footerMenu')

            <div class="contacts grid">
                <div class="x3 row">
                    <div class="items">
                        ZHDANOV & AGRBA 2015
                    </div>
                    <div class="phones items">
                        <span>+ 7 (050) 555 77 75</span>
                        <span>+ 7 (050) 555 77 75</span>
                    </div>
                    <div class="items">
                        <span class="social-icons"><a href="" class="vk"></a><a href="" class="tw"></a><a href="" class="ig"></a><a href="" class="fb"></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection