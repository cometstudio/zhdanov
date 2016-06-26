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

                        <button class="empty buttons">Показать</button>
                    </form>
                </div>

                @if(!empty($webinars) && $webinars->count())
                    <div class="grid">
                        <div class="x2 row clearfix">
                            @foreach($webinars as $webinar)
                                @include('webinars.gridItem')
                            @endforeach
                        </div>
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