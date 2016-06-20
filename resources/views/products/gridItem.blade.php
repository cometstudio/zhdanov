<div class="items">
    <div class="title">
        <a href="{{ route('product', ['id'=>$product->id]) }}">{{ $product->name }}</a>
    </div>
    <a href="{{ route('product', ['id'=>$product->id]) }}" class="image">
        @if(!empty($product->teaser ))
            <div class="overlay">
                <i></i>
                <div>{{ $product->teaser }}</div>
            </div>
        @endif
        <img src="{{ $imagesPath }}/small/{{ $product->thumbnail() }}.jpg" />
    </a>
    @if(!empty($product->price))
        <ul class="info clearfix">
            <li>{{ number_format($product->price, 0, '', ' ') }}.-</li>
            <li><a href="" class="red empty buttons">Купить</a></li>
        </ul>
    @endif
</div>