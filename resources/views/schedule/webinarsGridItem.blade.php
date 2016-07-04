<div class="items">
    <a href="{{ route('webinar', ['id'=>$event->id], false) }}"><img src="{{ $imagesPath }}/thumbs/{{ $event->getThumbnail() }}.jpg" /></a>
    <div class="date clearfix">
        <div class="l">{{ date('d', $event->start_time) }}/{{ date('m', $event->start_time) }}, {{ $daysOfWeek[date('N', $event->start_time)][1] }}</div>
        <div class="r">{{ date('H', $event->start_time) }}:{{ date('i', $event->start_time) }}</div>
    </div>
    <a href="{{ route('webinar', ['id'=>$event->id], false) }}" class="title">{{ str_limit($event->name, 45) }}</a>
    <div class="performer">
        <p>{{ $event->author_name }}</p>
    </div>
</div>