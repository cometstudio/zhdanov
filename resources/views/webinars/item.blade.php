@extends('master')

@section('content')
    <div class="lessons-page fc page-bg">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="section1 section">
            <div class="wrapper">
                <div class="fc common-h2">
                    <h2><span>Вебинар</span></h2>
                </div>
            </div>
        </div>

        <div class="section3 section">
            <div class="wrapper">
                <div class="common-h2">
                    <h1>Основы химической завивки</h1>
                    <div class="details">10 мая 2016 в 18:00, Юрий Жданов <a href="/lessons" class="labels">вечерняя причёска</a></div>
                </div>
            </div>
        </div>

        <div class="section8 section">
            <div class="wrapper">
                <div class="grid">
                    <div class="x2 row clearfix">
                        <div class="items">
                            Вебинар &mdash; мастер-класс в прямом эфире с возможностью получить ответ на интересующие вас вопросы. Во время трансляции будет открыт чат.
                        </div>
                        <div class="countdown items">
                            <p>Начало через 10 дней, 10 часов и 35 минут</p>
                            <a href="" class="big buttons">Принять участие за 1 500.-</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section4 section">
            <div class="wrapper">
                <div class="player">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/pYArFgu20bQ" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="section5 section">
            <div class="wrapper">
                <div class="chat grid">
                    <div class="x2 row clearfix">
                        <div class="items">
                            <h3>Ваш комментарий или вопрос мастеру:</h3>
                        </div>
                        <div class="pop-chat items">
                            <span class="fa fa-list-alt"></span> <a href="" class="red">Открыть чат в отдельном окне</a>
                        </div>
                    </div>
                    <div class="x2 row clearfix">
                        <div class="items">
                            <div class="input clearfix">
                                <textarea name=""></textarea>
                                <button class="red empty buttons">Отправить</button>
                            </div>
                        </div>
                        <div class="items">
                            <div class="stack">
                                <div class="container">
                                    <div class="item">
                                        <div class="clearfix">
                                            <div class="name">Алёна</div>
                                            <div class="date">Сегодня, в 18:30</div>
                                        </div>
                                        <div class="message">Я все не поняла, спасибо большое. Как заново родилась.</div>
                                    </div>
                                    <div class="item">
                                        <div class="clearfix">
                                            <div class="name">Соня</div>
                                            <div class="date">Сегодня, в 18:10</div>
                                        </div>
                                        <div class="message">Ура, я вовремя проснулась!</div>
                                    </div>
                                    <div class="item">
                                        <div class="clearfix">
                                            <div class="name">Соня</div>
                                            <div class="date">Сегодня, в 18:09</div>
                                        </div>
                                        <div class="message">Ура, я вовремя проснулась!</div>
                                    </div>
                                    <div class="item">
                                        <div class="clearfix">
                                            <div class="name">Соня</div>
                                            <div class="date">Сегодня, в 18:08</div>
                                        </div>
                                        <div class="message">Ура, я вовремя проснулась!</div>
                                    </div>
                                    <div class="item">
                                        <div class="clearfix">
                                            <div class="name">Соня</div>
                                            <div class="date">Сегодня, в 18:07</div>
                                        </div>
                                        <div class="message">Ура, я вовремя проснулась!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section9 section">
            <div class="wrapper">
                Текст-описание вебинара. If your computer or network is protected by a firewall or proxy, make sure that Firefox is permitted to access the Web. If your computer or network is protected by a firewall or proxy, make sure that Firefox is permitted to access the Web. If your computer or network is protected by a firewall or proxy, make sure that Firefox is permitted to access the Web.
                <div class="social-icons">
                    <span>Поделиться:</span><a class="vk" href=""></a><a class="tw" href=""></a><a class="ig" href=""></a><a class="fb" href=""></a>
                </div>
            </div>
        </div>

        <div class="lessons-grid section6 section">
            <div class="wrapper">
                <div class="common-h2">
                    <h2><span>Ближайшие вебинары</span></h2>
                </div>
                <div class="no-margin grid">
                    <div class="x2 row clearfix">
                        <div class="items">
                            <span class="l labels">вечерняя причёска</span>
                            <span class="r red labels">Free</span>
                            <a href="webinar.html"><img src="/img/webinarGridItem.jpg" /></a>
                            <ul class="date clearfix">
                                <li>14 мая, 18:00</li>
                                <li><span class="fa fa-clock-o"></span> 2 часа 15 минут</li>
                            </ul>
                            <div class="title"><a href="webinar.html">Двухчасовой вебинар "Основы химической завивки"</a></div>
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
                    <a href="webinars.html" class="black big empty buttons">Все вебинары</a>
                </div>
            </div>
        </div>

        <div class="lessons-grid section7 section">
            <div class="wrapper">
                <div class="inverted common-h2">
                    <h2><span>Видеоуроки</span></h2>
                </div>
                <div class="no-margin grid">
                    <div class="x2 row clearfix">
                        <div class="items">
                            <span class="l labels">вечерняя причёска</span>
                            <span class="r red labels">Free</span>
                            <a href="/lessons/1"><img src="/img/webinarGridItem.jpg" /></a>
                            <div class="title"><a href="/lessons/1">Создание индивидуального образа</a></div>
                            <div class="controls clearfix">
                                <a href="" class="empty red buttons">Смотреть</a><span><span class="fa fa-clock-o"></span> 2 часа 15 минут</span>
                            </div>
                        </div>
                        <div class="items">
                            <span class="l labels">вечерняя причёска</span>
                            <span class="r red labels">Free</span>
                            <a href="/lessons/1"><img src="/img/webinarGridItem.jpg" /></a>
                            <div class="title"><a href="/lessons/1">Создание индивидуального образа</a></div>
                            <div class="controls clearfix">
                                <a href="" class="empty red buttons">Смотреть</a><span><span class="fa fa-clock-o"></span> 2 часа 15 минут</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-grid-items">
                    <a href="/lessons" class="white big empty buttons">Все видеоуроки</a>
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