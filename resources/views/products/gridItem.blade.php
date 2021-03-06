<div class="items">
    <div class="title">
        <a href="{{ route('product', ['id'=>$product->id], false) }}">{{ str_limit($product->name, !empty($small) ? 45 : 1000) }}</a>
    </div>
    <a href="{{ route('product', ['id'=>$product->id], false) }}" class="image">
        @if(!empty($product->teaser ))
            <div class="overlay">
                <i></i>
                <div>{{ $product->teaser }}</div>
            </div>
        @endif
        <img src="{{ $imagesPath }}/small/{{ $product->getThumbnail() }}.jpg" />
    </a>
    @if(!empty($product->price))
        <ul class="info clearfix">
            <li>{{ number_format($product->price, 0, '', ' ') }} руб.</li>
            <li><a href="{{ route('product', ['id'=>$product->id], false) }}" class="red empty buttons">Купить</a></li>
        </ul>
    @endif
</div>