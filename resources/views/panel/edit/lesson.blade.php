@extends('panel.edit.form')

@section('input')
    <div class="row">
        <dl>Название</dl>
        <input name="name" value="{{ $item->name }}" type="text" />
    </div>
    <div class="row">
        <dl>Стоимость просмотра</dl>
        <input name="price" value="{{ $item->price }}" type="text" />
    </div>
    <div class="row">
        <dl>Краткое описание</dl>
        <textarea name="teaser">{{ $item->teaser }}</textarea>
    </div>
    <div class="row">
        <dl>Описание</dl>
        <textarea name="text" class="ck">{{ $item->text }}</textarea>
    </div>
    <div class="row">
        @include('panel.edit.gallery')
    </div>
@endsection