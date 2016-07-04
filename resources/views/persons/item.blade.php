@extends('master')

@section('content')
    <div class="person-page">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="{{ $authorAlias }} section1 section">
            <div class="wrapper">
                <div class="head-image">
                    <span></span>
                    <img src="/img/{{ $authorAlias }}Head.jpg" />
                </div>
                @include('persons.menu')
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

        @if(!empty($recentEvents))
            <div id="section2" class="section2 schedule section">
                <div class="wrapper">
                    <div class="common-h2">
                        <h2><span>Ближайшие мероприятия</span></h2>
                    </div>
                    <div class="grid">
                        <div class="x7 row clearfix">
                            @foreach($recentEvents as $event)
                                @include('schedule.'.$event->type.'sGridItem')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div id="section3" class="section3 section">
            <div class="wrapper">
                <div class="inverted gold common-h2">
                    <h2><span>Online-обучение</span></h2>
                </div>
                <div class="grid">
                    <div class="x2 row clearfix">
                        <div class="tar items"><a href="{{ route('lessons', ['aid'=>$authorId], false) }}" class="empty white big buttons">Все видеоуроки</a></div>
                        <div class="items"><a href="{{ route('webinars', ['aid'=>$authorId], false) }}" class="empty white big buttons">Все вебинары</a></div>
                    </div>
                </div>
                <div class="lessons-grid">
                    <div class="grid">
                        <div class="x2 row clearfix">

                            @if(!empty($lesson))
                                @include('lessons.gridItem', ['lesson'=>$lesson, 'options'=>$lesson->getOptions()])
                            @else
                                <div class="items">&nbsp;</div>
                            @endif

                            @if(!empty($webinar))
                                @include('webinars.gridItem', ['webinar'=>$webinar, 'options'=>$webinar->getOptions()])
                            @else
                                <div class="items">&nbsp;</div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
        <div id="section3" class="text section3 section">
            <div class="wrapper">
                <div class="inverted red common-h2">
                    <h2><span>Online-обучение</span></h2>
                </div>
                <div class="grid clearfix">
                    <div class="x2 row">
                        <div class="items">
                            <p>
                            Повседневная практика показывает, что новая модель организационной деятельности требуют определения и уточнения систем массового участия. Идейные соображения высшего порядка, а также рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании существенных финансовых и административных условий. Задача организации, в особенности же дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки модели развития.
                            </p><p>
                            Разнообразный и богатый опыт укрепление и развитие структуры требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям. Задача организации, в особенности же сложившаяся структура организации влечет за собой процесс внедрения и модернизации новых предложений.
                            </p>
                        </div>
                        <div class="items">
                            <p>
                            Разнообразный и богатый опыт постоянный количественный рост и сфера нашей активности играет важную роль в формировании направлений прогрессивного развития. Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности способствует подготовки и реализации новых предложений.
                            </p><p>
                            Товарищи! рамки и место обучения кадров в значительной степени обуславливает создание системы обучения кадров, соответствует насущным потребностям. Товарищи! укрепление и развитие структуры требуют от нас анализа форм развития.
                        </p>
                            <a href="" class="empty white buttons">Подробнее</a>
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

        @if(!empty($products) && $products->count())
            <div class="section5 section">
                <div class="wrapper">
                    <div class="inverted common-h2">
                        <h2><span>Рекомендуем</span></h2>
                    </div>
                    <div class="small shop-grid grid">
                        <div class="x5 row clearfix">
                            @foreach($products as $product)
                                @include('products.gridItem')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif

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