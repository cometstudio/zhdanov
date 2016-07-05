@extends('master')

@section('content')
<div class="schedule-page fc page-bg">
    <div class="fixed menu-container">
        @include('common.menu')
    </div>

    <div class="section1 section">
        <div class="wrapper fc common-h2">
            <h2><span>Расписание мероприятий</span></h2>
        </div>
        <div class="timeline-container">
            <div class="timeline">
                <nav>
                    @foreach(config('dictionary.months', []) as $index=>$month)
                        @if(!empty($month))
                            <a href="{{ route('schedule', ['m'=>$index, 'y'=>$activeYear]) }}"{!! ($activeMonth == $index) ? ' class="active"' : '' !!}>{{ $month[0] }}</a>
                        @endif
                    @endforeach
                </nav>
                <div class="chosen">
                    <i></i>
                    <div>
                        <a href="{{ route('schedule', ['m'=>$activeMonth, 'y'=>($activeYear - 1)]) }}" class="fa fa-angle-left"></a>
                        <span>{{ $activeYear }}</span>
                        <a href="{{ route('schedule', ['m'=>$activeMonth, 'y'=>($activeYear + 1)]) }}" class="fa fa-angle-right"></a>
                    </div>
                    <i></i>
                </div>
            </div>
        </div>
    </div>

    <div class="schedule section">
        <div class="wrapper">
            <div class="filter clearfix">
                <form action="{{ route('schedule', [], false) }}" method="get">

                    <input name="m" value="{{ request('m', 0) }}" type="hidden" />
                    <input name="y" value="{{ request('y', 0) }}" type="hidden" />

                    <select name="type">
                        <option value="0">все события</option>
                        <option value="1"{{ request('type', 0) == 1 ? ' selected' : '' }}>вебинары</option>
                        <option value="2"{{ request('type', 0) == 2 ? ' selected' : '' }}>семинары</option>
                    </select>

                    @if(!empty($options['authors']))
                        <select name="aid">
                            <option value="0">все авторы</option>
                            @foreach($options['authors'] as $user)
                                <option value="{{ $user->id }}"{{ $user->id == request('aid') ? ' selected' : '' }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    @endif

                    @if(!empty($options['themes']))
                        <select name="tid">
                            <option value="0">все тематики</option>
                            @foreach($options['themes'] as $theme)
                                <option value="{{ $theme->id }}"{{ $theme->id == request('tid') ? ' selected' : '' }}>{{ $theme->name }}</option>
                            @endforeach
                        </select>
                    @endif

                    @if(!empty($options['cities']))
                        <select name="cid">
                            <option value="0">все города</option>
                            @foreach($options['cities'] as $city)
                                <option value="{{ $city->id }}"{{ $city->id == request('cid') ? ' selected' : '' }}>{{ $city->name }}</option>
                            @endforeach
                        </select>
                    @endif

                    <button class="empty buttons">Показать</button>
                </form>
            </div>
            <div class="grid">
                    <div class="x7 row clearfix">
                        @for($i=(2 - $activeMonthStartDay);$i<=$activeMonthLength;$i++)
                            @if(($i > 0) && ($event = $webinarModel->getByDate($webinars, \Date::constructDate([$i, $activeMonth , $activeYear]))->first()))
                                @include('schedule.webinarsGridItem')
                            @elseif(($i > 0) && ($event = $courseModel->getByDate($courses, \Date::constructDate([$i, $activeMonth , $activeYear]))->first()))
                                @include('schedule.coursesGridItem')
                            @elseif($i > 0)
                                @include('schedule.emptyGridItem')
                            @else
                                <div class="hidden items"></div>
                            @endif
                        @endfor
                    </div>
            </div>
        </div>
    </div>

    <div class="map">
        <div class="container">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=bGMbhwYSFqyXLKqgXdTrPz5Awp8kCRzR&width=100%&height=450&lang=ru_RU&sourceType=constructor&scroll=false"></script>
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