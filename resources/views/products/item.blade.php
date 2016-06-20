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
                        <div class="items">
                            <h3><a href="/products?aid=1"{!! ($product->audience_id == 1) ? ' class="active"' : '' !!}>Для салонов</a></h3>
                        </div>
                        <div class="items">
                            <h3><a href="/products?aid=2"{!! ($product->audience_id == 2) ? ' class="active"' : '' !!}>Для женщин</a></h3>
                        </div>
                        <div class="items">
                            <h3><a href="/products?aid=3"{!! ($product->audience_id == 3) ? ' class="active"' : '' !!}>Для мужчин</a></h3>
                        </div>
                        <div class="items">
                            <h3><a href="/cart">Корзина<sup>2</sup></a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section5 section">
            <div class="wrapper">
                <div class="grid">
                    <div class="x2 row clearfix">
                        <div class="items">
                            <ul class="gallery">
                                <li><img src="{{ $imagesPath }}/big/{{ $product->thumbnail() }}.jpg" /></li>
                            </ul>
                        </div>
                        <div class="items">
                            <h1>{{ $product->name }}</h1>
                            @if(!empty($product->vendor_code))
                                <div class="vendor-code">Артикул: {{ $product->vendor_code }}</div>
                            @endif
                            @if(!empty($product->price))
                                <div class="controls grid clearfix">
                                    <div class="x2 row">
                                        <div class="items">
                                            <ul>
                                                <li class="quantity">
                                                    <i class="fa fa-minus" onclick="return modifyShopItemQuantity(0);"></i>
                                                    <span>1</span>
                                                    <i class="fa fa-plus" onclick="return modifyShopItemQuantity(1);"></i>
                                                </li>
                                                @if(!empty($product->active))
                                                    <li class="stock">В наличии!</li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="items">
                                            <ul>
                                                <li class="price">{{ number_format($product->price, 0, '', ' ') }}.-</li>
                                                <li><a href="" class="big buttons">Купить</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if(!empty($product->teaser))
                                {{ $product->teaser }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section6 section">
            <div class="wrapper">
                <div class="clearfix">
                    <div class="info">
                        <nav class="real-controls clearfix">
                            <span class="active" onclick="return showHiddenSection('.real', 0);">Описание</span>
                            <span onclick="return showHiddenSection('.real', 1);">Рекомендации по использованию</span>
                            <span onclick="return showHiddenSection('.real', 2);">Отзывы</span>
                        </nav>
                    </div>
                    <div class="aside"></div>
                </div>
                <div class="clearfix">
                    <div class="real info">
                        <div id="s0">
                            {!! $product->text !!}
                        </div>
                        <div id="s1">
                            {!! $product->recommendations !!}
                        </div>
                        <div id="s2">
                            Отзывы
                        </div>
                    </div>
                    <div class="aside">
                        <nav>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                        </nav>
                    </div>
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