@extends('panel.edit.form')

@section('input')
        <div class="row">
            <dl>Имя</dl>
            <input name="name" value="{{ $item->name }}" type="text" />
        </div>
        <div class="row">
            <dl>Тип аккаунта</dl>
            <select name="type">
                <option value="">выберите...</option>
                <option value="1"{{ $item->type == 1 ? ' selected' : '' }}>слушатель курсов</option>
                <option value="2"{{ $item->type == 2 ? ' selected' : '' }}>организатор курсов</option>
            </select>
        </div>
        <div class="row">
            <dl>E-mail</dl>
            <input class="x3" name="email" value="{{ $item->email }}" type="text" />
        </div>
        <div class="row">
            <dl>Пол</dl>
            <select name="sex">
                <option value="">выберите...</option>
                <option value="1"{{ $item->sex == 1 ? ' selected' : '' }}>мужчина</option>
                <option value="2"{{ $item->sex == 2 ? ' selected' : '' }}>женщина</option>
            </select>
        </div>
        <div class="row">
            <dl>Город</dl>
            <input class="x3" name="city" value="{{ $item->city }}" type="text" />
        </div>
        <div class="row">
            <input name="is_author" value="0" type="hidden" />
            <input name="is_author" value="1" type="checkbox"{{ !empty($item->is_author) ? ' checked' : '' }} /> <label>является автором уроков</label>
        </div>
        <div class="row">
            <dl>Текст "o себе"</dl>
            <textarea name="teaser">{{ $item->teaser }}</textarea>
        </div>

        @if(!empty($options))
            @if(!empty($panelModels))
                <div class="row">
                    <dl>Доступные разделы</dl>
                    <ul>
                        @foreach($panelModels as $panelModel)
                            <?php
                            $userPanelModel = $options['userPanelModels']->filter(function($userPanelModel) use ($panelModel){ return $userPanelModel->id == $panelModel->id; })->first();
                            $pivot = !empty($userPanelModel->pivot) ? $userPanelModel->pivot : null;
                            ?>
                            <li><input name="_panel_model_ids[]" value="{{ $panelModel->id }}" type="checkbox"{{ $options['userPanelModels']->contains('id', $panelModel->id) ? ' checked' : '' }} /> Allow: <input name="_panel_model_crud[{{ $panelModel->id }}][c]" value="1" type="checkbox" {{ !empty($pivot->c) ? ' checked' : '' }} /> c <input name="_panel_model_crud[{{ $panelModel->id }}][r]" value="1" type="checkbox" {{ !empty($pivot->r) ? ' checked' : '' }} /> r <input name="_panel_model_crud[{{ $panelModel->id }}][u]" value="1" type="checkbox" {{ !empty($pivot->u) ? ' checked' : '' }} /> u <input name="_panel_model_crud[{{ $panelModel->id }}][d]" value="1" type="checkbox" {{ !empty($pivot->d) ? ' checked' : '' }} /> d of {{ $panelModel->name }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endif

@endsection