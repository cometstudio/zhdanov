@extends('master')

@section('content')
    <div class="courses-page fc page-bg">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="section1 section">
            <div class="wrapper">
                <div class="fc common-h2">
                    <h2><span>Программы обучения</span></h2>
                </div>
            </div>
        </div>

        <div class="section9 section">
            <div class="wrapper">
                <div class="filter clearfix">
                    <form action="{{ route('courses', [], false) }}" method="get">
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
                        <select name="length">
                            <option value="0">любая длительность</option>
                            @for($i=1;$i<8;$i++)
                                <option value="{{ $i }}">{{ $i }} {{ \Dictionary::get('time.days', $i) }}</option>
                            @endfor

                        </select>

                        <button class="empty buttons">Показать</button>
                    </form>
                </div>

                @if(!empty($courses))
                    <div class="courses-grid clearfix">
                        @foreach($courses as $course)
                            @include('courses.gridItem')
                        @endforeach
                    </div>
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