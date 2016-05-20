@extends('master')

@section('content')

    <div class="contacts-page fc page-bg">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="section1 section">
            <div class="wrapper">
                <div class="fc common-h2">
                    <h2><span>Контакты</span></h2>
                </div>

                <div class="grid">
                    <div class="x3 row clearfix">
                        <div class="phones items">
                            <p>+ 7 (050) 555 77 75</p>
                            <p>+ 7 (050) 555 77 75</p>
                        </div>
                        <div class="items">
                            <p>Сочи</p>
                            <p>Хоста, ул. Привольный переулок, 8/2</p>
                            <p>Пн-Пт 10:00 до 19:00</p>
                        </div>
                        <div class="items">
                            <a href="" class="buttons">Написать Юрию Жданову</a>
                            <a href="" class="gold buttons">Написать Ирине Агрба</a>
                            <a href="" class="empty black buttons">Стать партнёром</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="map">
            <div class="container">
                <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=b-28vGLp-c_Pl5xAH5Q7oDvig8vASSEf&width=100%&height=485&lang=ru_RU&sourceType=constructor&scroll=false"></script>
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