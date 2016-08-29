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
                    <div class="details">{{ \Date::getDateFromTime(strtotime($lesson->created_at)) }}, {{ $lesson->author->name }} <a href="{{ route('lessons', ['tid'=>$lesson->theme_id], false) }}" class="labels">{{ $lesson->theme->name }}</a></div>
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

        @if(!empty($lesson->video))
            <div class="section4 section">
                <div class="wrapper">
                    <div class="player">
                    {!! $lesson->video !!}
                    <!--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/5JTxy7DL2hw" frameborder="0" allowfullscreen></iframe>-->
                    </div>
                </div>
            </div>
        @endif

        <!--
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
        -->

        <div class="section9 section">
            <div class="wrapper">
                @if(!empty($lesson->text))
                    {!! $lesson->text !!}
                @endif
                <div class="social-icons">
                    <h3>Поделитесь этой страницей:</h3>

                    <script type="text/javascript">(function(w,doc) {
                            if (!w.__utlWdgt ) {
                                w.__utlWdgt = true;
                                var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
                                s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                                s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
                                var h=d[g]('body')[0];
                                h.appendChild(s);
                            }})(window,document);
                    </script>
                    <div data-background-alpha="0.0" data-buttons-color="#ffffff" data-counter-background-color="#ffffff" data-share-counter-size="12" data-top-button="false" data-share-counter-type="disable" data-share-style="6" data-mode="share" data-like-text-enable="false" data-mobile-view="false" data-icon-color="#ffffff" data-orientation="horizontal" data-text-color="#000000" data-share-shape="round-rectangle" data-sn-ids="fb.vk.tw.ok." data-share-size="30" data-background-color="#ffffff" data-preview-mobile="false" data-mobile-sn-ids="fb.vk.tw.wh.ok.vb." data-pid="1560094" data-counter-background-alpha="1.0" data-following-enable="false" data-exclude-show-more="true" data-selection-enable="false" class="uptolike-buttons" ></div>

                    <!--
                    <span>Поделиться:</span><a class="vk" href=""></a><a class="tw" href=""></a><a class="ig" href=""></a><a class="fb" href=""></a>
                    -->
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