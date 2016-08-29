@extends('master')

@section('content')
    <div class="courses-page fc page-bg">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="section1 section">
            <div class="wrapper">
                <div class="fc common-h2">
                    <h2><span>Портфель программ</span></h2>
                </div>
            </div>
        </div>

        <div class="section9 section">
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
                    <!--
                        @if(!empty($options['cities']))
                        <select name="cid">
                            <option value="">все города</option>
                            @foreach($options['cities'] as $city)
                            <option value="{{ $city->id }}"{{ $city->id == request('cid') ? ' selected' : '' }}>{{ $city->name }}</option>
                                @endforeach
                                </select>
                            @endif
                            -->
                        <select name="length">
                            <option value="">любая длительность</option>
                            @for($i=1;$i<8;$i++)
                                <option value="{{ $i }}"{{ request('length', 0) == $i ? ' selected' : '' }}>{{ $i }} {{ \Dictionary::get('time.days', $i) }}</option>
                            @endfor
                        </select>

                        <button class="empty buttons">Показать</button>
                    </form>
                </div>

                @if(!empty($options['authors']) && $courses->count())
                    @foreach($options['authors'] as $author)
                        @if($courses->filter(function($course) use ($author){ return $course->author_id == $author->id; })->count())
                            <div class="person-courses clearfix">
                                <h2>{{ $author->name }}</h2>
                                <div class="lc">
                                    <div class="person">
                                        <a href="{{ route('schedule', ['aid'=>$author->id], false) }}"><img src="{{ $imagesPath }}/small/{{ $author->getThumbnail() }}.jpg" /></a>
                                        <div class="control">
                                            <a href="{{ route('schedule', ['aid'=>$author->id], false) }}" class="empty buttons">Расписание</a>
                                        </div>
                                        <div class="teaser">
                                            {{ $author->teaser }}
                                        </div>
                                    </div>
                                </div>
                                <div class="rc">
                                    <div class="courses-grid clearfix">
                                        @foreach($courses->filter(function($course) use ($author){ return $course->author_id == $author->id; }) as $course)
                                            @include('pack.gridItem')
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                <!--
                    <div class="more-grid-items">
                        <a href="" class="black big empty buttons">Показать больше</a>
                    </div>
                    -->
                @endif
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