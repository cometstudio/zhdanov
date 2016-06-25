<div class="items">
    <a href="{{ route('course', ['id'=>$event->id], false) }}"><img src="{{ $imagesPath }}/thumbs/{{ $event->getThumbnail() }}.jpg" /></a>
    <div class="date clearfix">
        <div class="l">{{ (!empty($i) ? $i : date('d', ($event->start_time))) }}/{{ date('m', $event->start_time) }}, {{ $daysOfWeek[date('N', $event->start_time)][1] }}</div>
        <div class="r">{{ date('H', $event->start_time) }}:{{ date('i', $event->start_time) }}</div>
    </div>
    <a href="{{ route('course', ['id'=>$event->id], false) }}" class="title">{{ $event->name }}</a>
    <div class="performer">
        <p>{{ $event->city_name }}</p>
        <p>{{ $event->author_name }}</p>
    </div>
</div>