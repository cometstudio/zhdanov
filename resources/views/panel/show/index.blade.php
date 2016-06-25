@extends('panel.fullLayout')

@section('content')
    <h4><a href="{{  route('admin::act', ['action'=>'create', 'modelName'=>$currentPanelModel->public_model_name], false) }}">Создать</a></h4>
    <h1>{{ $currentPanelModel->name }}</h1>
    @if(!empty($items))
        <div class="sortable common-grid">
            @foreach($items as $item)
                @include('panel.show.'.(!empty($currentPanelModel->grid_item_view) ? $currentPanelModel->grid_item_view : 'gridItem'))
            @endforeach
        </div>
    @endif
@endsection