<div class="items">
    <div class="date clearfix">
        <div class="l">{{ (!empty($i) ? $i : date('d', ($event->start_time))) }}/{{ date('m', $event->start_time) }},
            {{ $daysOfWeek[date('N', \Date::getTimeFromDate((!empty($i) ? $i : date('d', ($event->start_time))).'.'.(date('m.Y', $event->start_time))))][1] }}</div>
        <div class="r">{{ date('H', $event->start_time) }}:{{ date('i', $event->start_time) }}</div>
    </div>
    <a href="{{ route('course', ['id'=>$event->id], false) }}"><img src="{{ $imagesPath }}/thumbs/{{ $event->getThumbnail() }}.jpg" /></a>
    <a href="{{ route('course', ['id'=>$event->id], false) }}" class="title">{{ str_limit($event->name, 45) }}</a>
    <div class="performer">
        <p>{{ $event->city_name }}</p>
        <p>{{ $event->author_name }}</p>
    </div>
</div>