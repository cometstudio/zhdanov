@if(Route::current()->getName() == 'index')
    <span class="logo"></span>
@else
    <a class="logo" href="/"></a>
@endif

<div class="menu">
    <ul>
        <li>
            <a href="/irina">Ирина Агрба</a>
            <ul>
                <li><a href="/irina#section2">Расписание мероприятий</a></li>
                <li><a href="/irina#section3">Online-обучение</a></li>
                <li><a href="/irina#gallery">Галерея</a></li>
                <li><a href="/login">Программы обучения</a></li>
                <!--<li><a href="/irina#section4">Пресса</a></li>-->
            </ul>
        </li>
        <li>
            <a href="/yuri">Юрий Жданов</a>
            <ul>
                <li><a href="/yuri#section2">Расписание мероприятий</a></li>
                <li><a href="/yuri#section3">Online-обучение</a></li>
                <li><a href="/yuri#gallery">Галерея</a></li>
                <li><a href="/login">Программы обучения</a></li>
                <!--<li><a href="/yuri#section4">Пресса</a></li>-->
            </ul>
        </li>
        <li><a href="{{ route('schedule', [], false) }}">Расписание</a></li>
        <li class="index-logo"><span></span></li>
        <li class="second-col"><a href="{{ route('videochannel', [], false) }}">PROF fashion TIME</a></li>
        <li><a href="{{ route('products', [], false) }}">Магазин</a></li>
        <li><a href="{{ route('gallery', [], false) }}">Галерея</a></li>
        <li><a href="{{ route('contacts', [], false) }}">Контакты</a></li>
    </ul>
</div>