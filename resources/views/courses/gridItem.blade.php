<div class="items">
    <div><a href="{{ route('course', ['id'=>$course->id]) }}"><img src="img/coursesGridItem.jpg" /></a></div>
    <div>
        <p class="title"><a href="{{ route('course', ['id'=>$course->id]) }}">{{ $course->name }}</a></p>
        <p class="length"><span class="{{ $course->author->id == 2 ? 'red' : ' gold' }} labels">{{ $course->author->name }}</span> <span class="labels">{{ $course->length }} {{ \Dictionary::get('time.days', $course->length) }}</span></p>
        <p>Программа направлена на подготовку мужских мастеров. Цикл занятий раскрывает тему классических стрижек и укладок, а также владение опасной бритвой. <a href="/courses/1">Подробности</a></p>
    </div>
    <div><a href="/timetable/1" class="buttons">Записаться</a></div>
</div>