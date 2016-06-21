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
                    <h1>{{ $webinar->name }}</h1>
                    <div class="details">10 мая 2016 в 18:00, {{ $webinar->author->name }} <a href="{{ route('lessons', ['tid'=>$webinar->theme_id], false) }}" class="labels">{{ $webinar->theme->name }}</a></div>
                </div>
            </div>
        </div>

        <div class="section8 section">
            <div class="wrapper">
                <div class="grid">
                    <div class="x2 row clearfix">
                        <div class="items">
                            @if(!empty($webinar->teaser))
                                {{ $webinar->teaser }}
                            @else
                                &nbsp;
                            @endif
                        </div>
                        <div class="countdown items">
                            <p>Начало через 10 {{ \Dictionary::get('time.days', 10) }}, 10 {{ \Dictionary::get('time.hours', 10) }} и 35 {{ \Dictionary::get('time.min', 35) }}</p>
                            @if(!empty($webinar->price))
                                <a href="" class="big buttons">Принять участие за {{ number_format($webinar->price, 0, '', ' ') }}.-</a>
                            @endif
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
                @if(!empty($webinar->text))
                    {!! $webinar->text !!}
                @endif
                <div class="social-icons">
                    <span>Поделиться:</span><a class="vk" href=""></a><a class="tw" href=""></a><a class="ig" href=""></a><a class="fb" href=""></a>
                </div>
            </div>
        </div>

        <div class="lessons-grid section6 section">
            <div class="wrapper">
                @if(!empty($nextWebinars) && $nextWebinars->count())
                <div class="common-h2">
                    <h2><span>Ближайшие вебинары</span></h2>
                </div>
                <div class="no-margin grid">
                    <div class="x2 row clearfix">
                        @foreach($nextWebinars as $nextWebinar)
                            @include('webinars.gridItem', ['webinar'=>$nextWebinar])
                        @endforeach
                    </div>
                </div>
                @endif
                <div class="more-grid-items">
                    <a href="{{ route('webinars') }}" class="black big empty buttons">Все вебинары</a>
                </div>
            </div>
        </div>

        @if(!empty($lessons) && $lessons->count())
            <div class="lessons-grid section7 section">
                <div class="wrapper">
                    <div class="inverted common-h2">
                        <h2><span>Видеоуроки</span></h2>
                    </div>
                    <div class="no-margin grid">
                        <div class="x2 row clearfix">
                            @foreach($lessons as $lesson)
                                @include('lessons.gridItem')
                            @endforeach
                        </div>
                    </div>
                    <div class="more-grid-items">
                        <a href="{{ route('lessons') }}" class="white big empty buttons">Все видеоуроки</a>
                    </div>
                </div>
            </div>
        @endif

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