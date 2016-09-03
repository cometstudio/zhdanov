@extends('master')

@section('content')
    <div class="courses-page fc page-bg">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="section1 section">
            <div class="wrapper">
                <div class="fc common-h2">
                    <h2><span>Программа обучения</span></h2>
                </div>
            </div>
        </div>

        <div class="section2 section">
            <div class="wrapper">
                <h1>{{ $course->name }}</h1>
                <div class="details"><a href="{{ route('courses', ['aid'=>$course->author_id], false) }}" class="{{ $course->author->sex == 1 ? 'red' : ' gold' }} labels">{{ $course->author->name }}</a> <span class="labels">{{ $course->length }} {{ \Dictionary::get('time.days', $course->length) }}</span> <a href="{{ route('courses', ['tid'=>$course->theme_id], false) }}" class="labels">{{ $course->theme->name }}</a></div>
            </div>
        </div>

        <div class="section4 section">
            <div class="wrapper clearfix">
                <div class="common-h2">
                    <h2><span>О программе</span></h2>
                </div>
                <div class="grid">
                    <div class="x2 row">
                        @if(!empty($course->text_left))
                            <div class="items">
                                {!! $course->text_left !!}
                            </div>
                        @endif
                        @if(!empty($course->text_right))
                            <div class="items">
                                {!! $course->text_right !!}
                                @if(!empty($interval))
                                    <div class="countdown">
                                        До окончания записи {{ $interval[0] }} {{ \Dictionary::get('time.days',  $interval[0]) }}, {{ $interval[1] }} {{ \Dictionary::get('time.hours',  $interval[1]) }} и {{ $interval[2] }} {{ \Dictionary::get('time.min',  $interval[2]) }}
                                    </div>
                                @endif
                                <div class="controls">
                                    @if(!Auth::check())
                                        <p><a href="/login" class="red empty big buttons">Записаться</a></p>
                                        <p>&nbsp;</p>
                                        <p><a href="/login" class="red empty big buttons">Добавить в портфель</a></p>
                                    @else
                                        @if(!empty($scheduleItem))
                                            <p>
                                                <a style="{{ !empty($userScheduleItem) ? '' : 'display:none;' }}" href="{{ route('scheduleAddUser', ['action'=>'del', 'id'=>$scheduleItem->id], false) }}" onclick="return scheduleAddUser(this);" opt="Записаться на {{ \Date::getDateFromTime($scheduleItem->start_time, 3) }}" class="schedule-user-del red empty big buttons">Вы записаны на {{ \Date::getDateFromTime($scheduleItem->start_time, 3) }}</a>
                                                <a style="{{ empty($userScheduleItem) ? '' : 'display:none;' }}" href="{{ route('scheduleAddUser', ['action'=>'add', 'id'=>$scheduleItem->id], false) }}" onclick="return scheduleAddUser(this);" opt="Вы записаны на {{ \Date::getDateFromTime($scheduleItem->start_time, 3) }}" class="schedule-user-add red empty big buttons">Записаться на {{ \Date::getDateFromTime($scheduleItem->start_time, 3) }}</a>
                                            </p>
                                        @else
                                            <p><a href="{{ route('schedule', ['aid'=>$course->author_id], false) }}" class="red empty big buttons">Записаться</a></p>
                                        @endif
                                        @if(Auth::user()->type == 2)
                                            <p>&nbsp;</p>
                                            <p><a href="{{ route('packAction', ['action'=>'add', 'courseId'=>$course->id], false) }}" onclick="return pack(this);" class="red empty big buttons">Добавить в портфель</a></p>
                                        @endif
                                    @endif
                                </div>
                                <div class="controls">
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
                                    <div class="ltr social-icons">
                                        <a class="vk" href=""></a><a class="tw" href=""></a><a class="ig" href=""></a><a class="fb" href=""></a>
                                    </div>
                                    -->
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @if(!empty($course->video))
            <div class="section3 section">
                <div class="wrapper">
                    <div class="player">
                        {!! $course->video !!}
                        <!--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/5JTxy7DL2hw" frameborder="0" allowfullscreen></iframe>-->
                    </div>
                </div>
            </div>
        @endif

        @if($course->getGallery(false, true))
            <div class="gallery section">
                    @if(!empty($galleryTitle))
                        <div class="common-h2">
                            <h2><span>{{ $galleryTitle->name }}</span></h2>
                        </div>
                    @endif
                    @include('common.galleryGrid', ['gallery'=>$course->getGallery(false, true)])
                </div>
            </div>
        @endif

        @if(!empty($course->day_1))
            <div class="section5 section">
                <div class="wrapper clearfix">
                    <div class="common-h2">
                        <h2><span>Расписание занятий</span></h2>
                    </div>

                    <div class="timeline grid">
                        @for($i=1;$i<=7;$i++)
                            @if(!empty($course->getAttribute('day_'.$i)))
                            <div class="{{ $i > 3 ? 'hidden ' : '' }}day">
                                @if(!($i%2))
                                    <div class="x2 inverted row clearfix">
                                        <div class="items">
                                            {!! $course->getAttribute('day_'.$i) !!}
                                        </div>
                                        <div class="items"><h3>День {{ $i }}</h3></div>
                                    </div>
                                @else
                                    <div class="x2 row clearfix">
                                        <div class="items"><h3>День {{ $i }}</h3></div>
                                        <div class="items">
                                            {!! $course->getAttribute('day_'.$i) !!}
                                        </div>
                                    </div>
                                @endif
                            </div>
                            @endif
                        @endfor
                    </div>
                    @if($i > 1)
                        <div class="control">
                            <a onclick="$(this).parent().parent().find('.hidden').show(); $(this).hide();" href="javascript:void(0);" class="empty buttons" style="margin-left: 112px;">Ещё дни</a>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        @if($course->getGallery(false, true))
            <div class="gallery section">
                <div class="wrapper clearfix">
                    <div class="common-h2">
                        <h2><span>Отчёты с прошлых курсов</span></h2>
                    </div>
                </div>

                @include('common.galleryGrid', ['gallery'=>$course->getGallery(false, true)])
            </div>
        @endif

        @if(!Auth::check() || (Auth::user()->type == 1))
            <div id="section7-1" class="section7 section">
                <div class="wrapper">
                    <div class="common-h2">
                        <h2><span>НЕ ЗАБУДЬ ЗАПИСАТЬСЯ, МЕСТА В ГРУППЕ ОГРАНИЧЕНЫ</span></h2>
                    </div>
                    <div class="grid">
                        <div class="x2 row clearfix">
                            <div class="items">
                                <div class="calendar">
                                    <div class="calendar-picker">
                                        <div class="calendar-picker-grid">
                                            <div class="title">
                                                <a href="" class="fa fa-arrow-left l"></a>
                                                <a href="" class="fa fa-arrow-right r"></a>
                                                Июль
                                            </div>
                                            <div class="picker">
                                                <ul class="clearfix">
                                                    @for($i=1;$i<=7;$i++)
                                                        <li>{{ config('dictionary.daysOfWeek')[$i][1] }}</li>
                                                    @endfor
                                                </ul>
                                                <nav class="clearfix">
                                                    @for($i=(2 - $activeMonthStartDay);$i<=$activeMonthLength;$i++)
                                                        @if(($i > 0) && ($event = $webinarModel->getByDate($webinars, \Date::constructDate([$i, $activeMonth , $activeYear]))->first()))
                                                            <a href="">{{ $i }}</a>
                                                        @elseif(($i > 0) && ($event = $courseModel->getByDate($courses, \Date::constructDate([$i, $activeMonth , $activeYear]))->first()))
                                                            <a href="">{{ $i }}</a>
                                                        @elseif($i > 0)
                                                            <span>&nbsp;</span>
                                                        @else
                                                            <span>&nbsp;</span>
                                                        @endif
                                                    @endfor
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                <div class="centered controls">
                                    <a href="{{ route('schedule', [], false) }}" class="big buttons">Записаться</a>
                                </div>
                                -->
                            </div>
                            <div class="items">
                                <h3>Следите за новостями в соцсетях</h3>
                                <p>ВКонтакте: <a href="{{ config('social.vk', '') }}" target="_blank">{{ config('social.vk', '') }}</a></p>
                                <p>Facebook: <a href="{{ config('social.fb', '') }}" target="_blank">{{ config('social.fb', '') }}</a></p>
                                <p>Одноклассники: <a href="{{ config('social.ok', '') }}" target="_blank">{{ config('social.ok', '') }}</a></p>
                                <p>Instagram: <a href="{{ config('social.ig', '') }}" target="_blank">{{ config('social.ig', '') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if(!empty($course->tools))
            <div class="section8 section">
                <div class="wrapper clearfix">
                    <div class="common-h2">
                        <h2><span>Необходимый инструмент</span></h2>
                    </div>
                    <div class="centered_">{!! $course->tools !!}</div>
                </div>
            </div>
        @endif

        @if(!empty($products) && $products->count())
            <div class="section6 section">
                <div class="wrapper">
                    @if(!empty($products) && $products->count())
                        <div class="inverted common-h2">
                            <h2><span>Рекомендуем</span></h2>
                        </div>
                        <div class="small shop-grid grid">
                            <div class="x5 row clearfix">
                                @foreach($products->slice(0, 5)->all() as $product)
                                    @include('products.gridItem', ['small'=>true])
                                @endforeach
                            </div>
                        </div>
                        @if($products->count() > 5)
                            <div class="centered"><a href="{{ route('courseProducts', ['id'=>$course->id], false) }}" class="empty white buttons">Посмотреть все рекомендации</a></div>
                        @endif
                    @endif
                </div>
            </div>
        @endif

        @if(!Auth::check() || (Auth::user()->type == 2))
            <div id="section7-2" class="section7 section">
                <div class="wrapper">
                    <div class="common-h2">
                        <h2><span>СФОРМИРУЙТЕ ОБУЧАЮЩИЙ КУРС</span></h2>
                    </div>
                    <div class="grid">
                        <div class="x2 row clearfix">
                            <div class="items">
                                <ul>
                                    <li>- Создайте портфель из одной или более программ</li>
                                    <li>- Подайте заявку на проведение цикла занятий</li>
                                    <li>- Ожидайте, с вами свяжется координатор</li>
                                </ul>
                            </div>
                            <div class="items">
                                <!--<div class="price">10.000 руб.</div>-->
                                <a href="{{ route('packAction', ['action'=>'add', 'courseId'=>$course->id], false) }}" onclick="return pack(this);" class="big buttons">Добавить в портфель</a>
                                <p>&nbsp;</p>
                                Дополните свой портфель другими программами:
                                <p>&nbsp;</p>
                                <a href="{{ route('courses', [], false) }}" class="empty black buttons">Все программы</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="section4 section">
            <div class="wrapper clearfix">
                <div class="common-h2">
                    <h2><span>НЕ ЗАБУДЬ ЗАПИСАТЬСЯ, МЕСТА В ГРУППЕ ОГРАНИЧЕНЫ</span></h2>
                </div>
                <div class="grid">
                    <div class="x2 row">
                        @if(!empty($course->text_down_left))
                            <div class="items">
                                {!! $course->text_down_left !!}
                            </div>
                        @endif
                        @if(!empty($course->text_right))
                            <div class="items">
                                {!! $course->text_right !!}
                                @if(!empty($interval))
                                    <div class="countdown">
                                        До окончания записи {{ $interval[0] }} {{ \Dictionary::get('time.days',  $interval[0]) }}, {{ $interval[1] }} {{ \Dictionary::get('time.hours',  $interval[1]) }} и {{ $interval[2] }} {{ \Dictionary::get('time.min',  $interval[2]) }}
                                    </div>
                                @endif
                                <div class="controls">
                                    @if(!Auth::check())
                                        <p><a href="/login" class="red empty big buttons">Записаться</a></p>
                                        <p>&nbsp;</p>
                                        <p><a href="/login" class="red empty big buttons">Добавить в портфель</a></p>
                                    @else
                                        @if(!empty($scheduleItem))
                                            <p>
                                                <a style="{{ !empty($userScheduleItem) ? '' : 'display:none;' }}" href="{{ route('scheduleAddUser', ['action'=>'del', 'id'=>$scheduleItem->id], false) }}" onclick="return scheduleAddUser(this);" opt="Записаться на {{ \Date::getDateFromTime($scheduleItem->start_time, 3) }}" class="schedule-user-del red empty big buttons">Вы записаны на {{ \Date::getDateFromTime($scheduleItem->start_time, 3) }}</a>
                                                <a style="{{ empty($userScheduleItem) ? '' : 'display:none;' }}" href="{{ route('scheduleAddUser', ['action'=>'add', 'id'=>$scheduleItem->id], false) }}" onclick="return scheduleAddUser(this);" opt="Вы записаны на {{ \Date::getDateFromTime($scheduleItem->start_time, 3) }}" class="schedule-user-add red empty big buttons">Записаться на {{ \Date::getDateFromTime($scheduleItem->start_time, 3) }}</a>
                                            </p>
                                        @else
                                            <p><a href="{{ route('schedule', ['aid'=>$course->author_id], false) }}" class="red empty big buttons">Записаться</a></p>
                                        @endif
                                        @if(Auth::user()->type == 2)
                                            <p>&nbsp;</p>
                                            <p><a href="{{ route('packAction', ['action'=>'add', 'courseId'=>$course->id], false) }}" onclick="return pack(this);" class="red empty big buttons">Добавить в портфель</a></p>
                                        @endif
                                    @endif
                                </div>
                                <div class="controls">
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
                                    <div class="ltr social-icons">
                                        <a class="vk" href=""></a><a class="tw" href=""></a><a class="ig" href=""></a><a class="fb" href=""></a>
                                    </div>
                                    -->
                                </div>
                            </div>
                        @endif
                    </div>
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
                            <span class="social-icons"><a href="{{ config('social.vk', '') }}" class="vk" target="_blank"></a><a href="{{ config('social.tw', '') }}" class="tw" target="_blank"></a><a href="{{ config('social.ig', '') }}" class="ig" target="_blank"></a><a href="{{ config('social.fb', '') }}" class="fb" target="_blank"></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection