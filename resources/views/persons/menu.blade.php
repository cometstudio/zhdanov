<ul>
    <li><a href="{{ route($authorAlias, [], false) }}#schedule">Ближайшие <span>мероприятия</span></a></li>
    <li><a href="{{ route($authorAlias, [], false) }}#section3"><span>Online-</span>обучение</a></li>
    <li><a href="{{ route($authorAlias, [], false) }}#gallery">Галерея</a></li>
    <li><a href="{{ route('courses', ['aid'=>config('persons.'.$authorAlias, 0)], false) }}"><span>Программы</span> обучения</a></li>
    <!--<li><a href="/irina#section4">Пресса</a></li>-->
</ul>