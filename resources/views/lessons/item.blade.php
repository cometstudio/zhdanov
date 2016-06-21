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
                    <h1>{{ $lesson->name }}</h1>
                    <div class="details">10 мая 2016, {{ $lesson->author->name }} <a href="{{ route('lessons', ['tid'=>$lesson->theme_id], false) }}" class="labels">{{ $lesson->theme->name }}</a></div>
                </div>
            </div>
        </div>

        <div class="section8 section">
            <div class="wrapper">
                <div class="grid">
                    <div class="x2 row clearfix">
                        <div class="items">
                            @if(!empty($lesson->teaser))
                                {{ $lesson->teaser }}
                            @else
                                &nbsp;
                            @endif
                        </div>
                        <div class="countdown items">
                            @if(!empty($lesson->price))
                                <a href="" class="big buttons">Смотреть полностью за {{ number_format($lesson->price, 0, '', ' ') }}.-</a>
                            @else
                                &nbsp;
                            @endif
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
                @if(!empty($lesson->text))
                    {!! $lesson->text !!}
                @endif
                <div class="social-icons">
                    <span>Поделиться:</span><a class="vk" href=""></a><a class="tw" href=""></a><a class="ig" href=""></a><a class="fb" href=""></a>
                </div>
            </div>
        </div>

        <div class="lessons-grid section6 section">
            <div class="wrapper">
                @if(!empty($similarLessons) && $similarLessons->count())
                <div class="common-h2">
                    <h2><span>Похожие уроки</span></h2>
                </div>
                <div class="no-margin grid">
                    <div class="x2 row clearfix">
                        @foreach($similarLessons as $similarLesson)
                            @include('lessons.gridItem', ['lesson'=>$similarLesson])
                        @endforeach
                    </div>
                </div>
                @endif
                <div class="more-grid-items">
                    <a href="{{ route('lessons') }}" class="black big empty buttons">Все видеоуроки</a>
                </div>
            </div>
        </div>

        @if(!empty($webinars) && $webinars->count())
            <div class="lessons-grid section7 section">
                <div class="wrapper">
                    <div class="inverted common-h2">
                        <h2><span>Ближайшие вебинары</span></h2>
                    </div>
                    <div class="no-margin grid">
                        <div class="x2 row clearfix">
                            @foreach($webinars as $webinar)
                                @include('webinars.gridItem')
                            @endforeach
                        </div>
                    </div>
                    <div class="more-grid-items">
                        <a href="{{ route('webinars') }}" class="white big empty buttons">Все вебинары</a>
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