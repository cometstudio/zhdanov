@extends('panel.edit.form')

@section('input')
    @if(!empty($options['schedule']))
        <div class="row">
            <dl>Расписание</dl>
            <select name="schedule_id">
                <option value=""></option>
                @foreach($options['schedule'] as $scheduleItem)
                    <option value="{{ $scheduleItem->id }}"{{ ($item->schedule_id == $scheduleItem->id || ($scheduleItem->id == request('sid'))) ? ' selected' : '' }}>{{ $scheduleItem->course->name }}{{ !empty($scheduleItem->city_id) ? ', '.$scheduleItem->city->name : '' }}{{ !empty($scheduleItem->start_time) ? ', '.\Date::getDateFromTime($scheduleItem->start_time).' в '.date('H', $scheduleItem->start_time).':'.date('i', $scheduleItem->start_time) : '' }}</option>
                @endforeach
            </select>
        </div>
    @endif
    <!--
    <div class="row">
        <dl>Текст</dl>
        <textarea name="text" class="ck">{{ $item->text }}</textarea>
    </div>
    -->
@endsection