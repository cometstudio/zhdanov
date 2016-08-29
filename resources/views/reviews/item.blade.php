@extends('master')

@section('content')
    <div class="reviews-page fc page-bg">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="section1 section">
            <div class="wrapper">
                <div class="fc common-h2">
                    <h2><span>Отчёт о мероприятии</span></h2>
                </div>
            </div>
        </div>

        <div class="section2 section">
            <div class="wrapper">
                <h1>{{ $review->schedule->course->name }}</h1>
                <div class="details"><a href="{{ route('courses', ['aid'=>$review->schedule->course->author_id], false) }}" class="{{ $review->schedule->course->author->sex == 1 ? 'red' : ' gold' }} labels">{{ $review->schedule->course->author->name }}</a> <span class="labels">{{ $review->schedule->course->length }} {{ \Dictionary::get('time.days', $review->schedule->course->length) }}</span> <a href="{{ route('courses', ['tid'=>$review->schedule->course->theme_id], false) }}" class="labels">{{ $review->schedule->course->theme->name }}</a></div>
            </div>
        </div>

        <div class="section3 section">
            <div class="wrapper">
                @if(!empty($review->schedule->course->author))
                    <div class="info clearfix">
                        <div class="lc">
                            <div class="person">
                                <a href="{{ route('schedule', ['aid'=>$review->schedule->course->author_id], false) }}"><img src="{{ $imagesPath }}/small/{{ $review->schedule->course->author->getThumbnail() }}.jpg" /></a>
                                <div class="control">
                                    <a href="{{ route('schedule', ['aid'=>$review->schedule->course->author_id], false) }}" class="empty buttons">Расписание</a>
                                </div>
                                <!-- <div class="teaser"></div> -->
                            </div>
                        </div>
                        <div class="rc">
                            {!! $review->schedule->course->text_right !!}

                            <div class="controls">
                                <h3>Поделитесь этой страницей</h3>
                                <div class="ltr social-icons">
                                    <a class="vk" href=""></a><a class="tw" href=""></a><a class="ig" href=""></a><a class="fb" href=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="gallery section">
            @include('common.galleryGrid', ['gallery'=>$review->getGallery()])
        </div>

        <div class="section5 section">
            <div class="wrapper">
                <div class="filter clearfix">
                    <form action="{{ route('courses', [], false) }}" method="get">
                        @if(!empty($options['authors']))
                            <select name="aid">
                                <option value="">все авторы</option>
                                @foreach($options['authors'] as $user)
                                    <option value="{{ $user->id }}"{{ $user->id == request('aid') ? ' selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        @endif
                        @if(!empty($options['themes']))
                            <select name="tid">
                                <option value="">все тематики</option>
                                @foreach($options['themes'] as $theme)
                                    <option value="{{ $theme->id }}"{{ $theme->id == request('tid') ? ' selected' : '' }}>{{ $theme->name }}</option>
                                @endforeach
                            </select>
                        @endif
                        <select name="length">
                            <option value="">любая длительность</option>
                            @for($i=1;$i<8;$i++)
                                <option value="{{ $i }}"{{ request('length', 0) == $i ? ' selected' : '' }}>{{ $i }} {{ \Dictionary::get('time.days', $i) }}</option>
                            @endfor
                        </select>

                        <button class="empty buttons">Показать</button>
                    </form>
                </div>
            </div>
        </div>

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