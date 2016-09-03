@extends('master')

@section('content')
<div class="shop-page fc page-bg">
    <div class="fixed menu-container">
        @include('common.menu')
    </div>

    <div class="section1 section">
        <div class="wrapper">
            <div class="fc common-h2">
                <h2><span>Рекомендуемые товары</span></h2>
                <h3>Курс обучения "{{ $course->name }}"</h3>
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