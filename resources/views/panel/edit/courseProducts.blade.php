@if(!empty($products))
    <ul style="margin-bottom: 10px;">
        @foreach($products as $product)
            <li><a href="{{ route('admin::act', ['action'=>'edit', 'modelName'=>'product', 'id'=>$product->id], false) }}">{{ $product->name }}</a> <a onclick="return courseProductDel(this);" href="{{ route('admin::act', ['action'=>'courseproductdel', 'modelName'=>$currentPanelModel->public_model_name, 'id'=>$product->pivot->course_id, 'bid'=>$product->pivot->id], false) }}">Удалить</a></li>
        @endforeach
    </ul>
@endif