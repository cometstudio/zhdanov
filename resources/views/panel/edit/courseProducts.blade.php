@if(!empty($products))
    <ul style="margin-bottom: 10px;">
        @foreach($products as $product)
            <li><a href="{{ route('admin::act', ['action'=>'edit', 'modelName'=>'product', 'id'=>$product->id], false) }}">{{ $product->name }}</a> <a onclick="return false;" href="{{ route('admin::act', ['action'=>'courseproductdel', 'modelName'=>'product', 'id'=>$product->id], false) }}">Удалить</a></li>
        @endforeach
    </ul>
@endif