<div class="{{ $i >= 3 ? 'hidden ' : '' }}items">
    <div><a href="{{ route('course', ['id'=>$course->id]) }}"><img src="{{ $imagesPath }}/small/{{ $course->getThumbnail() }}.jpg" /></a></div>
    <div>
        <p class="title"><a href="{{ route('course', ['id'=>$course->id]) }}">{{ !empty($course->name_shorten) ? $course->name_shorten : $course->name }}</a></p>
        <p class="length"><a href="{{ route('courses', ['aid'=>$course->author->id], false) }}" class="{{ $course->author->sex == 1 ? 'red' : ' gold' }} labels">{{ $course->author->name }}</a> <span class="labels">{{ $course->length }} {{ \Dictionary::get('time.days', $course->length) }}</span> <a href="{{ route('courses', ['tid'=>$course->theme_id], false) }}" class="labels">{{ $course->theme->name }}</a></p>
        <p>{{ $course->teaser }}</p>
        <p><a href="{{ route('course', ['id'=>$course->id], false) }}">Подробности</a></p>
    </div>
</div>