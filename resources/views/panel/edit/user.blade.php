@extends('panel.edit.form')

@section('input')
        <div class="row">
            <dl>Имя</dl>
            <input name="name" value="{{ $item->name }}" type="text" />
        </div>

        @if(!empty($options))
            @if(!empty($panelModels))
                <div class="row">
                    <dl>Доступные разделы</dl>
                    <ul>
                        @foreach($panelModels as $panelModel)
                            <li><input name="_panel_model_ids[]" value="{{ $panelModel->id }}" type="checkbox"{{ $options['userPanelModels']->contains('id', $panelModel->id) ? ' checked' : '' }} /> {{ $panelModel->name }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endif
@endsection