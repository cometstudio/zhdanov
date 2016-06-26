@extends('panel.edit.form')

@section('input')
    <div class="row">
        <dl>Название</dl>
        <input name="name" value="{{ $item->name }}" type="text" />
    </div>
    @if(!empty($options['authors']))
        <div class="row">
            <dl>Автор</dl>
            <select name="author_id">
                <option value="0"></option>
                @foreach($options['authors'] as $user)
                    <option value="{{ $user->id }}"{{ $item->author_id == $user->id ? ' selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
    @if(!empty($options['themes']))
        <div class="row">
            <dl>Тематика</dl>
            <select name="theme_id">
                <option value="0"></option>
                @foreach($options['themes'] as $theme)
                    <option value="{{ $theme->id }}"{{ $item->theme_id == $theme->id ? ' selected' : '' }}>{{ $theme->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
    <div class="row">
        <dl>Длительность, дней</dl>
        <input name="length" value="{{ $item->length }}" type="text" class="x4" />
    </div>
    <div class="row">
        <dl>Краткое описание</dl>
        <textarea name="teaser">{{ $item->teaser }}</textarea>
    </div>
    <div class="row">
        <dl>О программе, левая колонка</dl>
        <textarea name="text_left" class="ck">{{ $item->text_left }}</textarea>
    </div>
    <div class="row">
        <dl>О программе, правая колонка</dl>
        <textarea name="text_right" class="ck">{{ $item->text_right }}</textarea>
    </div>
    <div class="row">
        <dl>Необходимый инструмент</dl>
        <textarea name="tools" class="ck">{{ $item->tools }}</textarea>
    </div>
    <div class="row">
        @include('panel.edit.gallery')
    </div>
@endsection