@extends('master')

@section('content')
    <div class="lessons-page fc page-bg">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="section1 section">
            <div class="wrapper">
                <div class="fc common-h2">
                    <h2><span>Видеоурок</span></h2>
                </div>
            </div>
        </div>

        <div class="section3 section">
            <div class="wrapper">
                <div class="common-h2">
                    <h1>Создание индивидуального образа</h1>
                    <div class="details">10 мая 2016, Юрий Жданов <a href="/lessons" class="labels">вечерняя причёска</a></div>
                </div>
            </div>
        </div>

        <div class="section8 section">
            <div class="wrapper">
                <div class="grid">
                    <div class="x2 row clearfix">
                        <div class="items">
                            В видеоруке мастер поделится с вами своими знаниями и опытом. После оплаты полной версии количество просмотров не ограничено.
                        </div>
                        <div class="countdown items">
                            <a href="" class="big buttons">Смотреть полностью за 1 500.-</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section4 section">
            <div class="wrapper">
                <div class="player">
                    <video id="my_video_1" class="video-js vjs-default-skin"
                           controls preload="none" poster='/img/lessonVideoBg.jpg'
                           data-setup='{ "aspectRatio":"16:9", "playbackRates": [1, 2, 3] }'>
                        <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
                        Ваш броузер не поддерживает воспроизведение видео
                    </video>
                </div>
            </div>
        </div>

        <div class="section9 section">
            <div class="wrapper">
                Текст-описание урока. If your computer or network is protected by a firewall or proxy, make sure that Firefox is permitted to access the Web. If your computer or network is protected by a firewall or proxy, make sure that Firefox is permitted to access the Web. If your computer or network is protected by a firewall or proxy, make sure that Firefox is permitted to access the Web.
                <div class="social-icons">
                    <span>Поделиться:</span><a class="vk" href=""></a><a class="tw" href=""></a><a class="ig" href=""></a><a class="fb" href=""></a>
                </div>
            </div>
        </div>

        <div class="lessons-grid section6 section">
            <div class="wrapper">
                <div class="common-h2">
                    <h2><span>Похожие уроки</span></h2>
                </div>
                <div class="no-margin grid">
                    <div class="x2 row clearfix">
                        <div class="items">
                            <span class="l labels">вечерняя причёска</span>
                            <span class="r red labels">Free</span>
                            <a href="lesson.html"><img src="/img/webinarGridItem.jpg" /></a>
                            <div class="title"><a href="lesson.html">Создание индивидуального образа</a></div>
                            <div class="controls clearfix">
                                <a href="" class="empty red buttons">Смотреть</a><span><span class="fa fa-clock-o"></span> 2 часа 15 минут</span>
                            </div>
                        </div>
                        <div class="items">
                            <span class="l labels">вечерняя причёска</span>
                            <span class="r gold labels">1 500.-</span>
                            <a href="lesson.html"><img src="/img/webinarGridItem.jpg" /></a>
                            <div class="title"><a href="lesson.html">Создание индивидуального образа</a></div>
                            <div class="controls clearfix">
                                <a href="" class="empty red buttons">Смотреть</a><span><span class="fa fa-clock-o"></span> 2 часа 15 минут</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-grid-items">
                    <a href="/lessons" class="black big empty buttons">Все видеоуроки</a>
                </div>
            </div>
        </div>

        <div class="lessons-grid section7 section">
            <div class="wrapper">
                <div class="inverted common-h2">
                    <h2><span>Ближайшие вебинары</span></h2>
                </div>
                <div class="no-margin grid">
                    <div class="x2 row clearfix">
                        <div class="items">
                            <span class="l labels">вечерняя причёска</span>
                            <span class="r red labels">Free</span>
                            <a href="/webinars/1"><img src="/img/webinarGridItem.jpg" /></a>
                            <ul class="date clearfix">
                                <li>14 мая, 18:00</li>
                                <li><span class="fa fa-clock-o"></span> 2 часа 15 минут</li>
                            </ul>
                            <div class="title"><a href="/webinars/1">Двухчасовой вебинар "Основы химической завивки"</a></div>
                            <div class="controls clearfix">
                                <a href="" class="empty red buttons">Записаться</a><span>8 из 15 мест свободны</span>
                            </div>
                        </div>
                        <div class="items">
                            <span class="l labels">свадебная причёска</span>
                            <span class="r gold labels">1 500.-</span>
                            <a href=""><img src="/img/webinarGridItem.jpg" /></a>
                            <ul class="date clearfix">
                                <li>21 мая, 18:00</li>
                                <li><span class="fa fa-clock-o"></span> 2 часа 15 минут</li>
                            </ul>
                            <div class="title"><a href="">Двухчасовой вебинар "Основы химической завивки"</a></div>
                            <div class="controls clearfix">
                                <span>Все 15 мест заняты</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-grid-items">
                    <a href="/webinars" class="white big empty buttons">Все вебинары</a>
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