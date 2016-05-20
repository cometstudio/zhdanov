@if(!empty($currentUserPanelModels))
    <ul>
        @foreach($currentUserPanelModels as $model)
            <li{!! request()->segment(3) == $model->public_model_name ? ' class="active"' : '' !!}><a href="{{ route('admin::act', ['action'=>'show', 'modelName'=>$model->public_model_name], false) }}">{{ $model->name }}</a></li>
        @endforeach
    </ul>
@endif
