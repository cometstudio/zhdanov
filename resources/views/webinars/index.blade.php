@extends('master')

@section('content')
    <div class="lessons-page fc page-bg">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="section1 section">
            <div class="wrapper">
                <div class="fc common-h2">
                    <h2><span>Вебинары</span></h2>
                </div>
            </div>
        </div>

        <div class="lessons-grid section">
            <div class="wrapper">
                <div class="filter clearfix">
                    <form action="{{ route('webinars', [], false) }}" method="get">
                        @if(!empty($options['authors']))
                            <select name="author_id">
                                <option value="">все авторы</option>
                                @foreach($options['authors'] as $user)
                                    <option value="{{ $user->id }}"{{ $user->id == request('author_id') ? ' selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        @endif
                        <select name="">
                            <option value="">все тематики</option>
                            <option value="">hair-tatoo</option>
                            <option value="">вечерняя причёска</option>
                            <option value="">мода</option>
                            <option value="">свадебная причёска</option>
                            <option value="">техника</option>
                        </select>

                        <button class="empty buttons">Показать</button>
                    </form>
                </div>
                <div class="grid">
                    <div class="x2 row clearfix">
                        <div class="items">
                            <span class="l labels">вечерняя причёска</span>
                            <span class="r red labels">Free</span>
                            <a href="/webinars/1"><img src="img/webinarGridItem.jpg" /></a>
                            <ul class="date clearfix">
                                <li>14 сентября, 18:00</li>
                                <li><span class="fa fa-clock-o"></span> 2 часа 15 минут</li>
                            </ul>
                            <div class="title"><a href="/webinars/1">Двухчасовой вебинар "Основы химической завивки"</a></div>
                            <div class="controls clearfix">
                                <a href="" class="empty red buttons">Записаться</a><span>8 из 15 мест свободны</span>
                            </div>
                        </div>
                        <div class="items">
                            <span class="l labels">свадебная причёска</span>
                            <span class="r gold labels">1 500.-</span>
                            <a href="/webinars/1"><img src="img/webinarGridItem.jpg" /></a>
                            <ul class="date clearfix">
                                <li>14 сентября, 18:00</li>
                                <li><span class="fa fa-clock-o"></span> 2 часа 15 минут</li>
                            </ul>
                            <div class="title"><a href="/webinars/1">Двухчасовой вебинар "Основы химической завивки"</a></div>
                            <div class="controls clearfix">
                                <span>Все 15 мест заняты</span>
                            </div>
                        </div>
                        <div class="items">
                            <span class="l labels">мода</span>
                            <span class="r gold labels">3 000.-</span>
                            <a href="/webinars/1"><img src="img/webinarGridItem.jpg" /></a>
                            <ul class="date clearfix">
                                <li>14 сентября, 18:00</li>
                                <li><span class="fa fa-clock-o"></span> 2 часа 15 минут</li>
                            </ul>
                            <div class="title"><a href="/webinars/1">Двухчасовой вебинар "Основы химической завивки"</a></div>
                            <div class="controls clearfix">
                                <a href="" class="empty red buttons">Записаться</a><span>8 из 15 мест свободны</span>
                            </div>
                        </div>
                        <div class="items">
                            <span class="l labels">hair-tatoo</span>
                            <span class="r gold labels">3 000.-</span>
                            <a href="/webinars/1"><img src="img/webinarGridItem.jpg" /></a>
                            <ul class="date clearfix">
                                <li>14 сентября, 18:00</li>
                                <li><span class="fa fa-clock-o"></span> 2 часа 15 минут</li>
                            </ul>
                            <div class="title"><a href="/webinars/1">Двухчасовой вебинар "Основы химической завивки"</a></div>
                            <div class="controls clearfix">
                                <a href="/webinars/1" class="empty red buttons">Смотреть</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-grid-items">
                    <a href="" class="black big empty buttons">Показать больше</a>
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
                    <a href="contacts.html">Контакты</a>
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