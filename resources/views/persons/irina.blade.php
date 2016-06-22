@extends('master')

@section('content')
    <div class="person-page">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="irina section1 section">
            <div class="wrapper">
                <div class="head-image">
                    <span></span>
                    <img src="/img/irinaHead.jpg" />
                </div>
                <ul>
                    <li><a href="/irina#timetable">Ближайшие <span>мероприятия</span></a></li>
                    <li><a href="/irina#section3"><span>Online-</span>обучение</a></li>
                    <li><a href="/irina#gallery">Галерея</a></li>
                    <li><a href="/courses"><span>Программы</span> обучения</a></li>
                    <!--<li><a href="/irina#section4">Пресса</a></li>-->
                </ul>
            </div>
        </div>

        <!--
        <div id="section2" class="section2 section">
            <div class="wrapper clearfix">
                <div class="red common-h2">
                    <h2><span>Расписание мероприятий</span></h2>
                </div>
                <div class="events-teaser grid">
                    <div class="x3 row">
                        <div class="items">
                            <a href=""><img src="/img/eventTeaser1.jpg" /></a>
                            <div class="date">14 мая 2016</div>
                            Кубок города Парикмахерское исскуство 2015
                        </div>
                        <div class="items">
                            <a href=""><img src="/img/eventTeaser2.jpg" /></a>
                            <div class="date">14 мая 2016</div>
                            Четырехчасовой мастер класс в салоне Shato, в октябре
                        </div>
                        <div class="items">
                            <a href=""><img src="/img/eventTeaser3.jpg" /></a>
                            <div class="date">14 мая 2016</div>
                            Презентация новой коллекции средств по уходу за волосами
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->

        <div id="timetable" class="timetable section">
            <div class="wrapper">
                <div class="common-h2">
                    <h2><span>Ближайшие мероприятия</span></h2>
                </div>
                <div class="grid">
                    <div class="x7 row clearfix">
                        <div class="items">
                            <a href="/timetable/1"><img src="/img/timatableItem1.jpg" /></a>
                            <div class="date clearfix">
                                <div class="l">02-05/06</div>
                                <div class="r">11:00</div>
                            </div>
                            <a href="/timetable/1" class="title">
                                Курс "Barber expert"
                            </a>
                            <div class="performer">
                                <p>Сочи</p>
                                <p>Ирина Агрба</p>
                            </div>
                        </div>
                        <div class="items">
                            <a href="/timetable/1"><img src="/img/timatableItem1.jpg" /></a>
                            <div class="date clearfix">
                                <div class="l">02-05/06</div>
                                <div class="r">11:00</div>
                            </div>
                            <a href="/timetable/1" class="title">
                                Курс "Barber expert"
                            </a>
                            <div class="performer">
                                <p>Сочи</p>
                                <p>Ирина Агрба</p>
                            </div>
                        </div>
                        <div class="items">
                            <a href="/timetable/1"><img src="/img/timatableItem1.jpg" /></a>
                            <div class="date clearfix">
                                <div class="l">02-05/06</div>
                                <div class="r">11:00</div>
                            </div>
                            <a href="/timetable/1" class="title">
                                Курс "Barber expert"
                            </a>
                            <div class="performer">
                                <p>Сочи</p>
                                <p>Ирина Агрба</p>
                            </div>
                        </div>
                        <div class="items">
                            <a href="/timetable/1"><img src="/img/timatableItem1.jpg" /></a>
                            <div class="date clearfix">
                                <div class="l">02-05/06</div>
                                <div class="r">11:00</div>
                            </div>
                            <a href="/timetable/1" class="title">
                                Курс "Barber expert"
                            </a>
                            <div class="performer">
                                <p>Сочи</p>
                                <p>Ирина Агрба</p>
                            </div>
                        </div>
                        <div class="items">
                            <a href="/timetable/1"><img src="/img/timatableItem1.jpg" /></a>
                            <div class="date clearfix">
                                <div class="l">02-05/06</div>
                                <div class="r">11:00</div>
                            </div>
                            <a href="/timetable/1" class="title">
                                Курс "Barber expert"
                            </a>
                            <div class="performer">
                                <p>Сочи</p>
                                <p>Ирина Агрба</p>
                            </div>
                        </div>
                        <div class="items">
                            <a href="/timetable/1"><img src="/img/timatableItem1.jpg" /></a>
                            <div class="date clearfix">
                                <div class="l">02-05/06</div>
                                <div class="r">11:00</div>
                            </div>
                            <a href="/timetable/1" class="title">
                                Курс "Barber expert"
                            </a>
                            <div class="performer">
                                <p>Сочи</p>
                                <p>Ирина Агрба</p>
                            </div>
                        </div>
                        <div class="items">
                            <a href="/timetable/1"><img src="/img/timatableItem1.jpg" /></a>
                            <div class="date clearfix">
                                <div class="l">02-05/06</div>
                                <div class="r">11:00</div>
                            </div>
                            <a href="/timetable/1" class="title">
                                Курс "Barber expert"
                            </a>
                            <div class="performer">
                                <p>Сочи</p>
                                <p>Ирина Агрба</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="section3" class="section3 section">
            <div class="wrapper">
                <div class="inverted gold common-h2">
                    <h2><span>Online-обучение</span></h2>
                </div>
                <div class="grid">
                    <div class="x2 row clearfix">
                        <div class="tar items"><a href="/lessons" class="empty white big buttons">Все видеоуроки</a></div>
                        <div class="items"><a href="/webinars" class="empty white big buttons">Все вебинары</a></div>
                    </div>
                </div>
                <div class="lessons-grid">
                    <div class="grid">
                        <div class="x2 row clearfix">
                            <div class="items">
                                @if(!empty($lesson))
                                    <span class="l black labels">вечерняя причёска</span>
                                    @if(empty($lesson->price))
                                        <span class="r red labels">Free</span>
                                    @else
                                        <span class="r labels">{{ number_format($lesson->price, 0, '', ' ') }}.-</span>
                                    @endif

                                    <a href="/lessons/{{ $lesson->id }}"><img src="/img/webinarGridItem.jpg" /></a>
                                    <div class="title"><a href="/lessons/{{ $lesson->id }}">{{ $lesson->name }}</a></div>
                                    <div class="controls clearfix">
                                        <a href="" class="empty red buttons">Смотреть</a>
                                        @if($lesson->length_hr || $lesson->length_min)
                                            <span><span class="fa fa-clock-o"></span> {{ $lesson->length_hr }} часа {{ $lesson->length_min }} минут</span>
                                        @endif

                                    </div>
                                @else
                                    &nbsp;
                                @endif
                            </div>
                            <div class="items">
                                @if(!empty($webinar))
                                    <span class="l black labels">hair-tatoo</span>
                                    @if(empty($webinar->price))
                                        <span class="r red labels">Free</span>
                                    @else
                                        <span class="r labels">{{ number_format($webinar->price, 0, '', ' ') }}.-</span>
                                    @endif
                                    <a href="/webinars/{{ $webinar->id }}"><img src="/img/webinarGridItem.jpg" /></a>
                                    <ul class="date clearfix">
                                        <li>14 сентября, 18:00</li>
                                        @if($webinar->length_hr || $webinar->length_min)
                                            <li><span class="fa fa-clock-o"></span> {{ $webinar->length_hr }} часа {{ $webinar->length_min }} минут</li>
                                        @endif
                                    </ul>
                                    <div class="title"><a href="/webinars/{{ $webinar->id }}">{{ $webinar->name }}</a></div>
                                    <div class="controls clearfix">
                                        <a href="" class="empty red buttons">Записаться</a><span>8 из 15 мест свободны</span>
                                    </div>
                                @else
                                    &nbsp;
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
        <div id="section3" class="section3 section">
            <div class="wrapper">
                <div class="inverted gold  common-h2">
                    <h2><span>Online-обучение</span></h2>
                </div>
                <div class="grid clearfix">
                    <div class="x2 row">
                        <div class="lesson-teaser items">
                            <a href="/lessons" class="empty white big buttons">Все видеоуроки</a>
                            <a href="/lessons"><img src="/img/personLessonTeaser.jpg" /></a>
                            <div class="name">Правильное построение образа. Урок 12</div>
                            <div class="length">Длительность 2 часа 13 минут</div>
                        </div>
                        <div class="webinar-teaser items">
                            <a href="/webinars" class="empty white big buttons">Все вебинары</a>
                            <a href=""><img src="/img/personWebinarTeaser.jpg" /></a>
                            <div class="date">14 сентября, 18:00</div>
                            <div class="name">Двухчасовой вебинар "Основы химической завивки"</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->

        <div id="gallery" class="gallery section">
            <div class="inverted common-h2">
                <h2><span>Галерея</span></h2>
            </div>
            @include('common.galleryGrid')
        </div>

        <!--
        <div id="section4" class="section4 section">
            <div class="wrapper">
                <div class="common-h2">
                    <h2><span>О нас в прессе</span></h2>
                </div>
            </div>
            <div class="feed clearfix">
                <div class="col">
                    <img src="/img/personAbout.jpg" />
                </div>
                <div class="col">
                    <div class="wrapper">

                    </div>
                </div>
            </div>
        </div>
        -->

        <div id="section6" class="section6 section">
            <div class="wrapper clearfix">
                <div class="common-h2">
                    <h2><span>Программа обучения</span></h2>
                </div>
                <div class="shop-teaser grid">
                    <div class="x3 row">
                        <div class="items">
                            <a href="/courses"><img src="/img/eventTeaser1.jpg" /></a>
                            <h3><a href="/courses">Для салонов</a></h3>
                        </div>
                        <div class="items">
                            <a href="/courses"><img src="/img/eventTeaser2.jpg" /></a>
                            <h3><a href="/courses">Для мужчин</a></h3>
                        </div>
                        <div class="items">
                            <a href="/courses"><img src="/img/eventTeaser3.jpg" /></a>
                            <h3><a href="/courses">Для женщин</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section5 section">
            <div class="wrapper">
                <div class="inverted common-h2">
                    <h2><span>Рекомендуем</span></h2>
                </div>
                <div class="small shop-grid grid">
                    <div class="x5 row clearfix">
                        <div class="items">
                            <div class="title">
                                <a href="">Фен PARLUX 385</a>
                            </div>
                            <a href="shop-item.html" class="image">
                                <div class="overlay">
                                    <i></i>
                                    <div>Набор препаратов для защиты, восстановления, укрепления волос и придания им восхитительного здорового блеска. Шампунь, маска и эликсир на основе кератина и масла арганы обеспечивают великолепное увлажнение, питание и непревзойденную защиту волос от повреждения.</div>
                                </div>
                                <img src="/img/shopGridItem.jpg" />
                            </a>
                            <ul class="info clearfix">
                                <li>1 290 руб.</li>
                                <li><a href="" class="red empty buttons">Купить</a></li>
                            </ul>
                        </div>
                        <div class="items">
                            <div class="title">
                                <a href="">Фен PARLUX 385</a>
                            </div>
                            <a href="shop-item.html" class="image">
                                <div class="overlay">
                                    <i></i>
                                    <div>Набор препаратов для защиты, восстановления, укрепления волос и придания им восхитительного здорового блеска. Шампунь, маска и эликсир на основе кератина и масла арганы обеспечивают великолепное увлажнение, питание и непревзойденную защиту волос от повреждения.</div>
                                </div>
                                <img src="/img/shopGridItem.jpg" />
                            </a>
                            <ul class="info clearfix">
                                <li>1 290 руб.</li>
                                <li><a href="" class="red empty buttons">Купить</a></li>
                            </ul>
                        </div>
                        <div class="items">
                            <div class="title">
                                <a href="">Фен PARLUX 385</a>
                            </div>
                            <a href="shop-item.html" class="image">
                                <div class="overlay">
                                    <i></i>
                                    <div>Набор препаратов для защиты, восстановления, укрепления волос и придания им восхитительного здорового блеска. Шампунь, маска и эликсир на основе кератина и масла арганы обеспечивают великолепное увлажнение, питание и непревзойденную защиту волос от повреждения.</div>
                                </div>
                                <img src="/img/shopGridItem.jpg" />
                            </a>
                            <ul class="info clearfix">
                                <li>1 290 руб.</li>
                                <li><a href="" class="red empty buttons">Купить</a></li>
                            </ul>
                        </div>
                        <div class="items">
                            <div class="title">
                                <a href="">Фен PARLUX 385</a>
                            </div>
                            <a href="shop-item.html" class="image">
                                <div class="overlay">
                                    <i></i>
                                    <div>Набор препаратов для защиты, восстановления, укрепления волос и придания им восхитительного здорового блеска. Шампунь, маска и эликсир на основе кератина и масла арганы обеспечивают великолепное увлажнение, питание и непревзойденную защиту волос от повреждения.</div>
                                </div>
                                <img src="/img/shopGridItem.jpg" />
                            </a>
                            <ul class="info clearfix">
                                <li>1 290 руб.</li>
                                <li><a href="" class="red empty buttons">Купить</a></li>
                            </ul>
                        </div>
                        <div class="items">
                            <div class="title">
                                <a href="">Фен PARLUX 385</a>
                            </div>
                            <a href="shop-item.html" class="image">
                                <div class="overlay">
                                    <i></i>
                                    <div>Набор препаратов для защиты, восстановления, укрепления волос и придания им восхитительного здорового блеска. Шампунь, маска и эликсир на основе кератина и масла арганы обеспечивают великолепное увлажнение, питание и непревзойденную защиту волос от повреждения.</div>
                                </div>
                                <img src="/img/shopGridItem.jpg" />
                            </a>
                            <ul class="info clearfix">
                                <li>1 290 руб.</li>
                                <li><a href="" class="red empty buttons">Купить</a></li>
                            </ul>
                        </div>
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
                    <a href="/contacts">Контакты</a>
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