@extends('panel.edit.form')

@section('input')
        <div class="row">
            <dl>Имя</dl>
            <input name="name" value="{{ $item->name }}" type="text" />
        </div>
        <div class="row">
            <dl>E-mail</dl>
            <input class="x3" name="email" value="{{ $item->email }}" type="text" />
        </div>
        <div class="row">
            <input name="is_author" value="0" type="hidden" />
            <input name="is_author" value="1" type="checkbox"{{ !empty($item->is_author) ? ' checked' : '' }} /> <label>является автором уроков</label>
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