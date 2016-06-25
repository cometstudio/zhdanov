@extends('master')

@section('content')

<div class="index-page">

    <div class="section1 inverted section">
        <div class="video-overlay"></div>
        <div class="scroll-hint"></div>
        <video autoplay loop poster="/images/poster1.jpg" id="bgvid" width="100%" height="100%">
            <source type="video/mp4" src="/images/videobg.mp4" />
        </video>
        <div class="menu-container">
            <div class="row">
                <div class="col">
                    @include('common.menu')
                </div>
            </div>
        </div>
    </div>

    <div class="section2 section">
        <div class="wrapper clearfix">
            <div class="left-col">
                <div class="title">
                    <div class="col"><img src="/img/irinaSmallLogo.png" /></div>
                    <div class="col">Ирина <span>Агрба</span></div>
                </div>
                <ul>
                    <li><a href="irina.html#section2">Расписание <span>мероприятий</span></a></li>
                    <li><a href="irina.html#section3"><span>Online-</span>обучение</a></li>
                    <li><a href="irina.html#gallery">Галерея</a></li>
                    <li><a href="courses.html"><span>Программы</span> обучения</a></li>
                    <!--<li><a href="irina.html#section4">Пресса</a></li>-->
                </ul>
            </div>
            <div class="right-col">
                <ul>
                    <li><a href="yuri.html#section2">Расписание <span>мероприятий</span></a></li>
                    <li><a href="yuri.html#section3"><span>Online-</span>обучение</a></li>
                    <li><a href="yuri.html#gallery">Галерея</a></li>
                    <li><a href="courses.html"><span>Программы</span> обучения</a></li>
                    <!--<li><a href="yuri.html#section4">Пресса</a></li>-->
                </ul>
                <div class="title">
                    <div class="col">Юрий <span>Жданов</span></div>
                    <div class="col"><img src="/img/yuriSmallLogo.png" /></div>
                </div>
            </div>
        </div>
    </div>

    <div class="schedule section">
        <div class="wrapper">
            <div class="common-h2">
                <h2><span>Ближайшие мероприятия</span></h2>
            </div>
            <div class="grid">
                <div class="x7 row clearfix">
                    <div class="items">
                        <a href="/schedule/1"><img src="/img/timatableItem1.jpg" /></a>
                        <div class="date clearfix">
                            <div class="l">02-05/06</div>
                            <div class="r">11:00</div>
                        </div>
                        <a href="/schedule/1" class="title">
                            Курс "Barber expert"
                        </a>
                        <div class="performer">
                            <p>Сочи</p>
                            <p>Ирина Агрба</p>
                        </div>
                    </div>
                    <div class="items">
                        <a href="/schedule/1"><img src="/img/timatableItem1.jpg" /></a>
                        <div class="date clearfix">
                            <div class="l">02-05/06</div>
                            <div class="r">11:00</div>
                        </div>
                        <a href="/schedule/1" class="title">
                            Курс "Barber expert"
                        </a>
                        <div class="performer">
                            <p>Сочи</p>
                            <p>Ирина Агрба</p>
                        </div>
                    </div>
                    <div class="items">
                        <a href="/schedule/1"><img src="/img/timatableItem1.jpg" /></a>
                        <div class="date clearfix">
                            <div class="l">02-05/06</div>
                            <div class="r">11:00</div>
                        </div>
                        <a href="/schedule/1" class="title">
                            Курс "Barber expert"
                        </a>
                        <div class="performer">
                            <p>Сочи</p>
                            <p>Ирина Агрба</p>
                        </div>
                    </div>
                    <div class="items">
                        <a href="/schedule/1"><img src="/img/timatableItem1.jpg" /></a>
                        <div class="date clearfix">
                            <div class="l">02-05/06</div>
                            <div class="r">11:00</div>
                        </div>
                        <a href="/schedule/1" class="title">
                            Курс "Barber expert"
                        </a>
                        <div class="performer">
                            <p>Сочи</p>
                            <p>Ирина Агрба</p>
                        </div>
                    </div>
                    <div class="items">
                        <a href="/schedule/1"><img src="/img/timatableItem1.jpg" /></a>
                        <div class="date clearfix">
                            <div class="l">02-05/06</div>
                            <div class="r">11:00</div>
                        </div>
                        <a href="/schedule/1" class="title">
                            Курс "Barber expert"
                        </a>
                        <div class="performer">
                            <p>Сочи</p>
                            <p>Ирина Агрба</p>
                        </div>
                    </div>
                    <div class="items">
                        <a href="/schedule/1"><img src="/img/timatableItem1.jpg" /></a>
                        <div class="date clearfix">
                            <div class="l">02-05/06</div>
                            <div class="r">11:00</div>
                        </div>
                        <a href="/schedule/1" class="title">
                            Курс "Barber expert"
                        </a>
                        <div class="performer">
                            <p>Сочи</p>
                            <p>Ирина Агрба</p>
                        </div>
                    </div>
                    <div class="items">
                        <a href="/schedule/1"><img src="/img/timatableItem1.jpg" /></a>
                        <div class="date clearfix">
                            <div class="l">02-05/06</div>
                            <div class="r">11:00</div>
                        </div>
                        <a href="/schedule/1" class="title">
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

    <!--
    <div class="section3 section">
        <div class="wrapper clearfix">
            <div class="common-h2">
                <h2><span>Расписание мероприятий</span></h2>
            </div>
            <div class="events-teaser grid">
                <div class="x3 row clearfix">
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

    <div class="gallery section">
        <div class="common-h2">
            <h2><span>Галерея</span></h2>
        </div>
        <div class="grid">
            <ul class="x6 clearfix">
                <li class="has-alternative">
                    <a href=""><img src="/img/gallery.jpg" /></a>
                    <a href=""><img src="/img/gallery.jpg" /></a>
                </li>
                <li class="double has-alternative">
                    <a href=""><img src="/img/gallery.jpg" /></a>
                </li>
                <li class="has-alternative">
                    <a href=""><img src="/img/gallery.jpg" /></a>
                    <a href=""><img src="/img/gallery.jpg" /></a>
                </li>
                <li class="double has-alternative">
                    <a href=""><img src="/img/gallery.jpg" /></a>
                </li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
            </ul>
        </div>
    </div>

    <!--
    <div class="section4 section">
        <div class="wrapper clearfix">
            <div class="common-h2">
                <h2><span>Новости</span></h2>
            </div>
            <div class="news-teaser grid">
                <div class="x3 row clearfix">
                    <div class="items">
                        <div class="date">14 мая 2016</div>
                        <a href=""><img src="/img/newsTeaser1.jpg" /></a>
                        <h3>Пополнение в нашей семье профессионалов!</h3>
                        <div class="teaser">
                            Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий способствует подготовки и реализации соответствующий условий <a href="">Читать далее</a>
                        </div>
                    </div>
                    <div class="items">
                        <div class="date">14 мая 2016</div>
                        <a href=""><img src="/img/newsTeaser2.jpg" /></a>
                        <h3>Пополнение в нашей семье профессионалов!</h3>
                        <div class="teaser">
                            Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий способствует подготовки и реализации соответствующий условий <a href="">Читать далее</a>
                        </div>
                    </div>
                    <div class="items">
                        <div class="date">14 мая 2016</div>
                        <a href=""><img src="/img/newsTeaser3.jpg" /></a>
                        <h3>Пополнение в нашей семье профессионалов!</h3>
                        <div class="teaser">
                            Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий способствует подготовки и реализации соответствующий условий <a href="">Читать далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->

    <div class="section5 section">
        <div class="wrapper clearfix">
            <div class="inverted common-h2">
                <h2><span>Магазин</span></h2>
            </div>
            <div class="shop-teaser grid">
                <div class="x3 row">
                    <div class="items">
                        <a href="/products"><img src="/img/productsTeaser1.jpg" /></a>
                        <h3><a href="/products">Для салонов</a></h3>
                    </div>
                    <div class="items">
                        <a href="/products"><img src="/img/productsTeaser2.jpg" /></a>
                        <h3><a href="/products">Для мужчин</a></h3>
                    </div>
                    <div class="items">
                        <a href="/products"><img src="/img/productsTeaser3.jpg" /></a>
                        <h3><a href="/products">Для женщин</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
    <div class="gallery section">
        <div class="common-h2">
            <h2><span>О нас</span></h2>
        </div>
        <div class="grid">
            <ul class="x6 clearfix">
                <li class="has-alternative">
                    <a href=""><img src="/img/gallery.jpg" /></a>
                    <a href=""><img src="/img/gallery.jpg" /></a>
                </li>
                <li class="double has-alternative">
                    <a href=""><img src="/img/gallery.jpg" /></a>
                </li>
                <li class="has-alternative">
                    <a href=""><img src="/img/gallery.jpg" /></a>
                    <a href=""><img src="/img/gallery.jpg" /></a>
                </li>
                <li class="double has-alternative">
                    <a href=""><img src="/img/gallery.jpg" /></a>
                </li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
            </ul>
        </div>
    </div>
    -->

    <div class="section6 section">
        <div class="wrapper">
            <div class="common-h2">
                <h2><span>Видеоканал PROF fashion TIME</span></h2>
            </div>
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