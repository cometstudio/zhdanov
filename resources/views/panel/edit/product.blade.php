@extends('panel.edit.form')

@section('input')
    <div class="row">
        <dl>Название</dl>
        <input name="name" value="{{ $item->name }}" type="text" />
    </div>
    <div class="row">
        <dl>Артикул</dl>
        <input class="x4" name="vendor_code" value="{{ $item->vendor_code }}" type="text" />
    </div>
    <div class="row">
        <input name="active" value="0" type="hidden" />
        <input name="active" value="1" type="checkbox"{{ !empty($item->active) ? ' checked' : '' }} /> <label>в наличии</label>
    </div>
    <div class="row">
        <dl>Стоимость, рублей</dl>
        <input class="x4" name="price" value="{{ $item->price }}" type="text" />
    </div>
    @if(!empty($options['audiences']))
        <div class="row">
            <dl>Целевая аудитория</dl>
            <select name="audience_id">
                @foreach($options['audiences'] as $audience)
                    <option value="{{ $audience[0] or 0 }}"{{ (!empty($audience[0]) && $item->audience_id == $audience[0]) ? ' selected' : '' }}>{{ $audience[1] or '' }}</option>
                @endforeach
            </select>
        </div>
    @endif
    <div class="row">
        <dl>Краткое описание</dl>
        <textarea name="teaser" class="input-teaser">{{ $item->teaser }}</textarea>
    </div>
    <div class="row">
        <dl>Описание</dl>
        <textarea name="text" class="ck">{{ $item->text }}</textarea>
    </div>
    <div class="row">
        <dl>Рекомендации по использования</dl>
        <textarea name="recommendations" class="ck">{{ $item->recommendations }}</textarea>
    </div>
    <div class="row">
        @include('panel.edit.gallery')
    </div>
@endsection