<div class="items{{ (\Date::getTimeFromDate($i.'.'.$activeMonth.'.'.$activeYear) == \Date::getTimeFromDate(date('j').'.'.date('m').'.'.date('Y'))) ? ' active' : '' }}">
    <span class="date">{{ $i }}, {{ $daysOfWeek[date('N', \Date::getTimeFromDate($i.'.'.$activeMonth.'.'.$activeYear))][1] }}</span>
    <div class="info">
        <div class="location">{{ $event->city_name }}</div>
        <a href="{{ route('course', ['id'=>$event->id, 'schedule'=>$event->schedule_id], false) }}"><img src="{{ $imagesPath }}/thumbs/{{ $event->getThumbnail() }}.jpg" /></a>
        <div class="title"><a href="{{ route('course', ['id'=>$event->id, 'schedule'=>$event->schedule_id], false) }}">{{ str_limit((!empty($event->name_shorten) ? $event->name_shorten : $event->name), 30) }}</a></div>
    </div>
</div>