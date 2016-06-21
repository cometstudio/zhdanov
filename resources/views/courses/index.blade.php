@extends('master')

@section('content')
    <div class="courses-page fc page-bg">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="section1 section">
            <div class="wrapper">
                <div class="fc common-h2">
                    <h2><span>Программы обучения</span></h2>
                </div>
            </div>
        </div>

        <div class="section9 section">
            <div class="wrapper">
                <div class="filter clearfix">
                    <form action="/courses" method="get">
                        <select name="">
                            <option value="">все ведущие</option>
                            <option value="">Юрий Жданов</option>
                            <option value="">Ирина Агрба</option>
                        </select>

                        <select name="">
                            <option value="">любая длительность</option>
                            <option value="">1 день</option>
                            <option value="">2 дня</option>
                            <option value="">3 дня</option>
                            <option value="">4 дня</option>
                            <option value="">5 дней</option>
                            <option value="">6 дней</option>
                            <option value="">7 дней</option>
                        </select>

                        <button class="empty buttons">Показать</button>
                    </form>
                </div>

                <div class="courses-grid clearfix">
                    <div class="items">
                        <div><a href="/courses/1"><img src="img/coursesGridItem.jpg" /></a></div>
                        <div>
                            <p class="title"><a href="/courses/1">Защита ушей клиента при выполнении стрижки</a></p>
                            <p class="length"><span class="red labels">Юрий Жданов</span> <span class="labels">3 дня</span></p>
                            <p>Программа направлена на подготовку мужских мастеров. Цикл занятий раскрывает тему классических стрижек и укладок, а также владение опасной бритвой. <a href="/courses/1">Подробности</a></p>
                        </div>
                        <div><a href="/timetable/1" class="buttons">Записаться</a></div>
                    </div>
                    <div class="items">
                        <div><a href="/courses/1"><img src="img/coursesGridItem.jpg" /></a></div>
                        <div>
                            <p class="title"><a href="/courses/1">Работа со сложными изгибами черепа</a></p>
                            <p class="length"><span class="gold labels">Ирина Агрба</span> <span class="labels">1 день</span></p>
                            <p>Программа направлена на подготовку мужских мастеров. Цикл занятий раскрывает тему классических стрижек и укладок, а также владение опасной бритвой. <a href="/courses/1">Подробности</a></p>
                        </div>
                        <div><a href="/timetable/1" class="buttons">Записаться</a></div>
                    </div>
                    <div class="items">
                        <div><a href="/courses/1"><img src="img/coursesGridItem.jpg" /></a></div>
                        <div>
                            <p class="title"><a href="/courses/1">Искусство не отрезать лишнего</a></p>
                            <p class="length"><span class="red labels">Юрий Жданов</span> <span class="labels">2 дня</span></p>
                            <p>Программа направлена на подготовку мужских мастеров. Цикл занятий раскрывает тему классических стрижек и укладок, а также владение опасной бритвой. <a href="/courses/1">Подробности</a></p>
                        </div>
                        <div><a href="/timetable/1" class="buttons">Записаться</a></div>
                    </div>
                </div>
                <div class="more-grid-items">
                    <a href="" class="black big empty buttons">Показать больше</a>
                </div>
            </div>
        </div>

        <div class="footer section">
            <div class="wrapper clearfix">
                <nav>
                    <a href="">Ирина Агрба</a>
                    <a href="">Юрий Жданов</a>
                    <a href="">Расписание</a>
                    <a href="">PROF fashion TIME</a>
                    <a href="">Магазин</a>
                    <a href="">Галерея</a>
                    <a href="/contacts">Контакты</a>
                </nav>
                <div class="contacts grid">
                    <div class="x3 row">
                        <div class="items">
                            ZHDANOV & AGRBA 2015
                        </div>
                        <div class="phones items">
                            <span>+ 7 (050) 555 77 75</span>
                            <span>+ 7 (050) 555 77 75</span>
                        </div>
                        <div class="items">
                            <span class="social-icons"><a href="" class="vk"></a><a href="" class="tw"></a><a href="" class="ig"></a><a href="" class="fb"></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection