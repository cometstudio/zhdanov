@extends('master')

@section('content')
<div class="timetable-page fc page-bg">
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
                    <a href="">Январь</a>
                    <a href="">Февраль</a>
                    <a href="">Март</a>
                    <a href="" class="active">Апрель</a>
                    <a href="">Май</a>
                    <a href="">Июнь</a>
                    <a href="">Июль</a>
                    <a href="">Август</a>
                    <a href="">Сентябрь</a>
                    <a href="">Октябрь</a>
                    <a href="">Ноябрь</a>
                    <a href="">Декабрь</a>
                </nav>
                <div class="chosen">
                    <i></i>
                    <div>
                        <a href="" class="fa fa-angle-left"></a>
                        <span>2016</span>
                        <a href="" class="fa fa-angle-right"></a>
                    </div>
                    <i></i>
                </div>
            </div>
        </div>
    </div>

    <div class="timetable section">
        <div class="wrapper">
            <div class="filter clearfix">
                <form action="/timetable" method="get">
                    <select name="">
                        <option value="">все события</option>
                        <option value="">мероприятия</option>
                        <option value="">вебинары</option>
                        <option value="">запись в салоне</option>
                        <option value="">семинары и мастер-классы</option>
                    </select>

                    <select name="">
                        <option value="">выберите мастера...</option>
                        <option value="">Юрий Жданов</option>
                        <option value="">Ирина Агрба</option>
                    </select>

                    <select name="">
                        <option value="">выберите город...</option>
                        <option value="">Москва</option>
                        <option value="">Сочи</option>
                    </select>

                    <button class="empty buttons">Показать</button>
                </form>
            </div>
            <div class="grid">
                    <div class="x7 row clearfix">
                        @for($i=1;$i<=31;$i++)
                            @if($i==5)
                                <div class="items">
                                    <a href="/timetable/1"><img src="/img/timatableItem1.jpg" /></a>
                                    <div class="date clearfix">
                                        <div class="l">{{ $i }}/06, Пт</div>
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
                            @else
                                <div class="empty items">
                                    <div class="empty-date">
                                        <span>{{ $i }}</span>
                                        июня
                                    </div>
                                    <div class="title">В этот день событий нет</div>
                                </div>
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