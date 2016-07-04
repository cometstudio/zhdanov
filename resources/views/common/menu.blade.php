@if(Route::current()->getName() == 'index')
    <span class="logo"></span>
@else
    <a class="logo" href="/"></a>
@endif

<div class="menu">
    <ul>
        <li>
            <a href="/irina">Ирина Агрба</a>
            @include('persons.menu', ['authorAlias'=>'irina'])
        </li>
        <li>
            <a href="/yuri">Юрий Жданов</a>
            @include('persons.menu', ['authorAlias'=>'yuri'])
        </li>
        <li><a href="{{ route('schedule', [], false) }}">Расписание</a></li>
        <li class="index-logo"><span></span></li>
        <li class="second-col"><a href="{{ route('videochannel', [], false) }}">PROF fashion TIME</a></li>
        <li><a href="{{ route('products', [], false) }}">Магазин</a></li>
        <li><a href="{{ route('gallery', [], false) }}">Галерея</a></li>
        <li><a href="{{ route('contacts', [], false) }}">Контакты</a></li>
    </ul>
</div>