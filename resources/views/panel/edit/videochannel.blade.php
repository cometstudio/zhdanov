@extends('panel.edit.form')

@section('input')
    <div class="row">
        <dl>Тег</dl>
        <input name="name" value="{{ $item->name }}" type="text" class="x2" />
    </div>
    <div class="row">
        <dl>Ссылка</dl>
        <input name="url" value="{{ $item->url }}" type="text" />
    </div>
    <div class="row">
        <dl>Краткое описание</dl>
        <textarea name="teaser" class="input-teaser">{{ $item->teaser }}</textarea>
    </div>
    <div class="row">
        @include('panel.edit.gallery')
    </div>
@endsection