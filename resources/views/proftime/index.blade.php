@extends('master')

@section('content')
<div class="ProfFashionTime-page fc page-bg">
    <div class="fixed menu-container">
        @include('common.menu')
    </div>

    <div class="section1 section">
        <div class="wrapper fc common-h2">
            <h2><span>{{ $misc->name }}</span></h2>
        </div>
    </div>

    <div class="section2 section">
        <div class="wrapper">
            <div class="grid">
                <div class="x2 row clearfix">
                    <div class="items">
                        {!! $misc->text !!}
                    </div>
                    <div class="items">
                        <a href="{{ config('social.youtube.yuri', '') }}" class="black buttons" target="_blank">Подписаться на канал Юрия Жданова</a>
                        <a href="{{ config('social.youtube.irina', '') }}" class="gold buttons" target="_blank">Подписаться на канал Ирины Агрба</a>
                        <a href="{{ config('social.youtube.proftime', '') }}" class="buttons" target="_blank">Подписаться на канал PROF fashion TIME</a>
                        <a href="mailto:{{ config('social.emails.proftime', '') }}" class="empty black buttons">Написать письмо</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(!empty($misc->raw))
        <div class="section3 section">
            <div class="wrapper">
                <div class="player">
                    {!! $misc->raw !!}
                </div>
            </div>
        </div>
    @endif

    @if(!empty($tags))
        <div class="section4 section">
            <div class="wrapper">
                <div class="grid">
                    <div class="x2 row clearfix">
                        @foreach($tags as $tag)
                            <div class="items clearfix">
                                <a href="{{ $tag->url }}" target="_blank"><img src="{{ $imagesPath }}/small1/{{ $tag->getThumbnail() }}.jpg" /></a>
                                <div>
                                    <h3><a href="{{ $tag->url }}" target="_blank">{{ $tag->name }}</a></h3>
                                    @if(!empty($tag->teaser))
                                        {{ $tag->teaser }}
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
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