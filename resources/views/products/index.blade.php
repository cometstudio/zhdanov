@extends('master')

@section('content')
<div class="shop-page fc page-bg">
    <div class="fixed menu-container">
        @include('common.menu')
    </div>

    <div class="section1 section">
        <div class="wrapper">
            <div class="fc common-h2">
                <h2><span>Магазин</span></h2>
            </div>
        </div>
    </div>

    <div class="section2 section">
        <div class="wrapper clearfix">
            <div class="shop-teaser grid">
                <div class="x4 row">
                    @if(!empty($audiences))
                        @foreach($audiences as $audience)
                            @if(!empty($audience))
                                <div class="items">
                                    <h3><a href="{{ route('products', ['aid'=>$audience[0]]) }}"{!! (request('aid', null) == $audience[0]) ? ' class="active"' : '' !!}>{{ $audience[2] }}</a></h3>
                                </div>
                            @endif
                        @endforeach
                    @endif
                    <div class="items">
                        <h3><a href="/cart">Корзина<sup>2</sup></a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section3 section">
        <div class="wrapper">
            @if(!empty($products) && $products->count())
                <div class="shop-grid grid">
                    <div class="x3 row clearfix">
                        @foreach($products as $product)
                            @include('products.gridItem', ['product'=>$product])
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