<div class="items">
    @if(!empty($webinar->theme_id))
        <span class="l labels">{{ $options['themes']->filter(function($theme) use ($webinar){ return $theme->id ==  $webinar->theme_id ? true : false; })->first()->name  }}</span>
    @endif
    @if(empty($webinar->price))
        <span class="r red labels">Free</span>
    @else
        <span class="r labels">{{ number_format($webinar->price, 0, '', ' ') }}.-</span>
    @endif
    <a href="{{ route('webinar', ['id'=>$webinar->id], false) }}"><img src="{{ $imagesPath }}/small1/{{ $webinar->getThumbnail() }}.jpg" /></a>
    <ul class="date clearfix">
        <li>{{ \Date::getDateFromTime($webinar->start_time) }}, 18:00</li>
        @if($webinar->length_hr || $webinar->length_min)
            <li><span class="fa fa-clock-o"></span> {{ $webinar->length_hr }} {{ \Dictionary::get('time.hours', $webinar->length_hr ) }} {{ $webinar->length_min }} {{ \Dictionary::get('time.min', $webinar->length_min) }}</li>
        @endif
    </ul>
    <div class="title"><a href="{{ route('webinar', ['id'=>$webinar->id], false) }}">{{ $webinar->name }}</a></div>
    @if($webinar->vacancies - $webinar->participants)
        <div class="controls clearfix">
            <a href="{{ route('webinar', ['id'=>$webinar->id], false) }}" class="empty red buttons">Записаться</a><span>{{ $webinar->vacancies - $webinar->participants }} из {{ $webinar->vacancies }} мест свободны</span>
        </div>
    @endif
</div>