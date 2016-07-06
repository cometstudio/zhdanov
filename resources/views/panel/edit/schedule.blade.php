@extends('panel.edit.form')

@section('input')
    @if(!empty($options['courses']))
        <div class="row">
            <dl>
                @if(!empty($item->course_id)) <a href="{{ route('admin::act', ['action'=>'edit', 'modelName'=>'course', 'id'=>$item->id], false) }}"> @endif
                Курс обучения
                @if(!empty($item->course_id)) </a> @endif
            </dl>
            <select name="course_id">
                <option value="0"></option>
                @foreach($options['courses'] as $course)
                    <option value="{{ $course->id }}"{{ $item->course_id == $course->id ? ' selected' : '' }}>{{ $course->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
    @if(!empty($options['cities']))
        <div class="row">
            <dl>Город</dl>
            <select name="city_id">
                <option value="0"></option>
                @foreach($options['cities'] as $city)
                    <option value="{{ $city->id }}"{{ $item->city_id == $city->id ? ' selected' : '' }}>{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
    <div class="row">
        <dl>Дата начала</dl>
        <input name="_start_date" value="{{ $item->getStartDate() }}" type="text" class="x4 datepicker" autocomplete="off" /> в
        <select name="_hrs">
            @for($i=0;$i<24;$i++)
                <option value="{{ $i }}"{{ date('G', $item->start_time) == $i ? ' selected' : '' }}>{{ $i  }}</option>
            @endfor
        </select> :
        <select name="_mins">
            @for($i=0;$i<60;$i=$i+5)
                <option value="{{ $i }}"{{ date('i', $item->start_time) == $i ? ' selected' : '' }}>{{ ($i < 10) ? 0 : '' }}{{ $i  }}</option>
            @endfor
        </select>
    </div>
@endsection