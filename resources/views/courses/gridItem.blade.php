<div class="items">
    <div><a href="{{ route('course', ['id'=>$course->id]) }}"><img src="img/coursesGridItem.jpg" /></a></div>
    <div>
        <p class="title"><a href="{{ route('course', ['id'=>$course->id]) }}">{{ $course->name }}</a></p>
        <p class="length"><a href="{{ route('courses', ['aid'=>$course->author->id], false) }}" class="{{ $course->author->id == 2 ? 'red' : ' gold' }} labels">{{ $course->author->name }}</a> <span class="labels">{{ $course->length }} {{ \Dictionary::get('time.days', $course->length) }}</span> <a href="{{ route('courses', ['tid'=>$course->theme_id], false) }}" class="labels">{{ $course->theme->name }}</a></p>
        <p>{{ $course->teaser }} <a href="{{ route('course', ['id'=>$course->id], false) }}">Подробности</a></p>
    </div>
    <div><a href="/schedule/1" class="buttons">Записаться</a></div>
</div>