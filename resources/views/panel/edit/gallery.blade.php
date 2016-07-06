<input name="_imageadd" value="{{ route('admin::act', ['action'=>'imageadd', 'modelName'=>$currentPanelModel->public_model_name, 'id'=>(!empty($item->id) ? $item->id : 0)], false) }}" type="hidden" />
<input name="_imagedrop" value="{{ route('admin::act', ['action'=>'imagedrop', 'modelName'=>$currentPanelModel->public_model_name, 'id'=>(!empty($item->id) ? $item->id : 0)], false) }}" type="hidden" />
<input name="_image" type="file" />

<input name="gallery" value="{{ $item->gallery or '' }}" type="hidden" />

<div class="gallery-container">
    <a onclick="return imageadd(this);" rel="_image" class="empty button" href="javascript:void(0);">Добавить изображение</a>

    <div class="gallery clearfix">
        @include('panel.edit.galleryItems')
    </div>
</div>