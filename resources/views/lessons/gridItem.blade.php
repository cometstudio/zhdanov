<div class="items">
    @if(!empty($lesson->theme_id))
        <span class="l labels">{{ $options['themes']->filter(function($theme) use ($lesson){ return $theme->id ==  $lesson->theme_id ? true : false; })->first()->name  }}</span>
    @endif
    @if(!empty($lesson->price))
        <span class="r labels">{{ number_format($lesson->price, 0, '', ' ') }}.-</span>
    @else
        <span class="r red labels">Free</span>
    @endif
    <a href="{{ route('lesson', ['id'=>$lesson->id], false) }}"><img src="{{ $imagesPath }}/small1/{{ $lesson->getThumbnail() }}.jpg" /></a>
    <div class="title"><a href="{{ route('lesson', ['id'=>$lesson->id], false) }}">{{ $lesson->name }}</a></div>
    <div class="controls clearfix">
        <a href="{{ route('lesson', ['id'=>$lesson->id], false) }}" class="empty red buttons">Смотреть</a><span><span class="fa fa-clock-o"></span> {{ $lesson->length_hr }} {{ \Dictionary::get('time.hours', $lesson->length_hr ) }} {{ $lesson->length_min }} {{ \Dictionary::get('time.min', $lesson->length_min) }}</span>
    </div>
</div>