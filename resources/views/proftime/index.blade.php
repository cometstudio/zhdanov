@extends('master')

@section('content')
<div class="ProfFashionTime-page fc page-bg">
    <div class="fixed menu-container">
        @include('common.menu')
    </div>

    <div class="section1 section">
        <div class="wrapper fc common-h2">
            <h2><span>PROF fashion TIME</span></h2>
        </div>
    </div>

    <div class="section2 section">
        <div class="wrapper">
            <div class="grid">
                <div class="x2 row clearfix">
                    <div class="items">
                        PROF fashion TIME &mdash; видеоканал для новичков и профессионалов в сфере создания стиля. Обзоры, тесты, советы.
                    </div>
                    <div class="items">
                        <a href="" class="black buttons">Подписаться на канал Юрия Жданова</a>
                        <a href="" class="gold buttons">Подписаться на канал Ирины Агрба</a>
                        <a href="" class="buttons">Подписаться на канал PROF fashion TIME</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section3 section">
        <div class="wrapper">
            <div class="player">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/pYArFgu20bQ" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="section4 section">
        <div class="wrapper">
            <div class="grid">
                <div class="x2 row clearfix">
                    @for($i=0;$i<10;$i++)
                        <div class="items clearfix">
                            <a href="http://youtube.com" target="_blank"><img src="img/eventTeaser1.jpg" /></a>
                            <div>
                                <h3><a href="http://youtube.com" target="_blank">#themetag</a></h3>
                                Обзоры инструмента
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <div class="footer section">
        <div class="wrapper clearfix">
            <nav>
                <a href="">Ирина Агрба</a>
                <a href="">Юрий Жданов</a>
                <a href="">Расписание</a>
                <a href="">PROF fashion TIME</a>
                <a href="">Магазин</a>
                <a href="">Галерея</a>
                <a href="contacts.html">Контакты</a>
            </nav>
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