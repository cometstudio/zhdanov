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
            <dl>Тег</dl>
            <select name="theme_id">
                <option value="0"></option>
                @foreach($options['themes'] as $theme)
                    <option value="{{ $theme->id }}"{{ $item->theme_id == $theme->id ? ' selected' : '' }}>{{ $theme->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
    <div class="row">
        <dl>Дата начала</dl>
        <input name="_start_date" value="{{ $item->getStartDate() }}" type="text" class="x4 datepicker" autocomplete="off" /> в
        <select name="_hrs">
            @for($i=0;$i<24;$i++)
                <option value="{{ $i }}"{{ date('G', $item->start_time) == $i ? ' selected' : '' }}>{{ $i }}</option>
            @endfor
        </select> :
        <select name="_mins">
            @for($i=0;$i<60;$i=$i+5)
                <option value="{{ $i }}"{{ date('i', $item->start_time) == $i ? ' selected' : '' }}>{{ ($i < 10) ? 0 : '' }}{{ $i  }}</option>
            @endfor
        </select>
    </div>
    <div class="row">
        <dl>Длительность, часов, минут</dl>
        <select name="length_hr">
            @for($i=0;$i<6;$i++)
                <option value="{{ $i }}"{{ $item->length_hr == $i ? ' selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
        <select name="length_min">
            @for($i=0;$i<60;$i=$i+5)
                <option value="{{ $i }}"{{ $item->length_min == $i ? ' selected' : '' }}>{{ ($i < 10) ? 0 : '' }}{{ $i }}</option>
            @endfor
        </select>
    </div>
    <div class="row">
        <dl>Стоимость участия, рублей</dl>
        <input class="x4" name="price" value="{{ $item->price }}" type="text" />
    </div>
    <div class="row">
        <dl>Количество мест и записавшихся участников</dl>
        <input class="x10" name="vacancies" value="{{ $item->vacancies }}" type="text" maxlength="4" /> <input class="x10" name="participants" value="{{ $item->participants }}" type="text" maxlength="4" />
    </div>
    <div class="row">
        <dl>Краткое описание</dl>
        <textarea name="teaser" class="input-teaser">{{ $item->teaser }}</textarea>
    </div>
    <div class="row">
        <dl>Описание</dl>
        <textarea name="text" class="ck">{{ $item->text }}</textarea>
    </div>
    <div class="row">
        <dl>Код видеоплеера (iframe-вариант, 100% ширина)</dl>
        <input name="video" value="{{ $item->video }}" type="text" />
    </div>
@endsection