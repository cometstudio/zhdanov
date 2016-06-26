@extends('master')

@section('content')
    <div class="cart-page fc page-bg">
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
                            <h3><a href="/products">Для салонов</a></h3>
                        </div>
                        <div class="items">
                            <h3><a href="/products">Для мужчин</a></h3>
                        </div>
                        <div class="items">
                            <h3><a href="/products">Для женщин</a></h3>
                        </div>
                        <div class="items">
                            <h3><span class="active">Корзина<sup>2</sup></span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section4 section">
            <div class="wrapper">
                <div class="cart-grid">
                    <div id="i0" class="items clearfix">
                        <div><a href="/products/1"><img src="/img/shopGridItem.jpg" /></a></div>
                        <div>
                            <a href="/products/1">Увлажняющий кератиновый шампунь с маслом арганы, PH LABORATORIES</a>
                        </div>
                        <div>
                            <div class="quantity">
                                <i class="fa fa-minus" onclick="return modifyCart(0, 0);"></i>
                                <span>1</span>
                                <i class="fa fa-plus" onclick="return modifyCart(0, 1);"></i>
                            </div>
                        </div>
                        <div><span class="cost">1 290</span>.-</div>
                        <div><span class="summary">1 290</span>.-</div>
                    </div>
                    <div id="i1" class="items clearfix">
                        <div><a href="/products/1"><img src="/img/shopGridItem.jpg" /></a></div>
                        <div>
                            <a href="/products/1">Увлажняющий кератиновый шампунь с маслом арганы, PH LABORATORIES</a>
                        </div>
                        <div>
                            <div class="quantity">
                                <i class="fa fa-minus" onclick="return modifyCart(1, 0);"></i>
                                <span>1</span>
                                <i class="fa fa-plus" onclick="return modifyCart(1, 1);"></i>
                            </div>
                        </div>
                        <div><span class="cost">1 290</span>.-</div>
                        <div><span class="summary">1 290</span>.-</div>
                    </div>
                </div>
                <div class="calculation">
                    <div class="grid">
                        <div class="x2 row clearfix">
                            <div class="items">
                                <ul>
                                    <li>Всего:  <span id="summary">2 580</span>.-</li>
                                    <li>Доставка:  <span id="delivery">300</span>.-</li>
                                </ul>
                            </div>
                            <div class="items">
                                <ul>
                                    <li>Итого: <span id="total">2 880</span>.-</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="controls">
                    <a href="/products" class="red empty big buttons">В магазин</a><a href="" class="big buttons">Заказать</a>
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
                            <span class="social-icons"><a href="" class="vk"></a><a href="" class="tw"></a><a href="" class="ig"></a><a href="" class="fb"></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection