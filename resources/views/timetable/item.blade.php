@extends('master')

@section('content')
<div class="timetable-page fc page-bg">
    <div class="fixed menu-container">
        @include('common.menu')
    </div>

    <div class="section1 section">
        <div class="wrapper fc common-h2">
            <h2><span>Расписание мероприятий</span></h2>
        </div>
        <div class="timeline-container">
            <div class="timeline">
                <nav>
                    <a href="">Январь</a>
                    <a href="">Февраль</a>
                    <a href="">Март</a>
                    <a href="" class="active">Апрель</a>
                    <a href="">Май</a>
                    <a href="">Июнь</a>
                    <a href="">Июль</a>
                    <a href="">Август</a>
                    <a href="">Сентябрь</a>
                    <a href="">Октябрь</a>
                    <a href="">Ноябрь</a>
                    <a href="">Декабрь</a>
                </nav>
                <div class="chosen">
                    <i></i>
                    <div>
                        <a href="" class="fa fa-angle-left"></a>
                        <span>Апрель 2016</span>
                        <a href="" class="fa fa-angle-right"></a>
                    </div>
                    <i></i>
                </div>
            </div>
        </div>
    </div>

    <div class="timetable section">
        <div class="wrapper">
            <div class="filter clearfix">
                <form action="/timetable" method="get">
                    <select name="">
                        <option value="">все события</option>
                        <option value="">мероприятия</option>
                        <option value="">вебинары</option>
                        <option value="">запись в салоне</option>
                        <option value="">семинары и мастер-классы</option>
                    </select>

                    <select name="">
                        <option value="">выберите мастера...</option>
                        <option value="">Юрий Жданов</option>
                        <option value="">Ирина Агрба</option>
                    </select>

                    <select name="">
                        <option value="">выберите город...</option>
                        <option value="">Москва</option>
                        <option value="">Сочи</option>
                    </select>

                    <button class="empty buttons">Показать</button>
                </form>
            </div>
        </div>
    </div>

    <div class="section2 section">
        <div class="grid wrapper">
            <div class="x2 row clearfix">
                <div class="items">
                    <div class="calendar-grid">
                        <div class="row">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span>1</span>
                            <span class="active">2</span>
                            <span>3</span>
                            <span>4</span>
                        </div>
                        <div class="row">
                            <span>5</span>
                            <span>6</span>
                            <span>7</span>
                            <span>8</span>
                            <span>9</span>
                            <span>10</span>
                            <span>11</span>
                        </div>
                        <div class="row">
                            <span>12</span>
                            <span>13</span>
                            <a href="" class="request">14</a>
                            <span>15</span>
                            <span>16</span>
                            <span>17</span>
                            <span>18</span>
                        </div>
                        <div class="row">
                            <span>19</span>
                            <span>20</span>
                            <span>21</span>
                            <span>22</span>
                            <span>23</span>
                            <span>24</span>
                            <span>25</span>
                        </div>
                        <div class="row">
                            <span>26</span>
                            <span>27</span>
                            <span>28</span>
                            <span>29</span>
                            <span>30</span>
                            <span>31</span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div>
                        <div class="date">2 апреля 2016, 11:00</div>
                        <div class="performer">Ирина Агрба</div>
                        <div class="title">Курс "Barber expert"</div>
                        <a href="" class="empty red big buttons">Записаться</a>
                        <div class="social-icons">
                            <span>Поделиться:</span><a href="" class="vk"></a><a href="" class="tw"></a><a href="" class="ig"></a><a href="" class="fb"></a>
                        </div>
                    </div>
                    <img src="/img/timetableItemInner.jpg" />
                </div>
            </div>
        </div>
    </div>

    <div class="section3 section">
        <div class="wrapper">
            <div class="player">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5JTxy7DL2hw" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="section4 section">
        <div class="wrapper clearfix">
            <div class="inverted common-h2">
                <h2><span>Курс "Barber expert"</span></h2>
            </div>
            <div class="grid">
                <div class="x2 row">
                    <div class="items">
                        <p><strong>Программа обучения "Защита ушей клиента при выполнении стрижки"</strong> направлена на подготовку мужских мастеров. Цикл занятий раскрывает тему классических стрижек и укладок, а также владение опасной бритвой.</p>
                        <p>&nbsp;</p>
                        <p>Интенсив позволит вам ознакомиться и отработать на практике бритьё опасным лезвием, 4 стрижки и 4 укладки в классическом стиле.</p>
                    </div>
                    <div class="items">
                        <span style="color: #d0b76c;">
                            <p><strong>Пройдя обучение вы научитесь:</strong></p>
                            <p>&nbsp;</p>
                            <ul>
                                <li>технике работы машинкой, ножницами и бритвой</li>
                                <li>филировке волос с использованием всех видов инструмента</li>
                                <li>создавать линии окантовок и нюансы в работе мужского мастера</li>
                                <li>правилам безопасности и гигиены</li>
                                <li>уходу за инструментом</li>
                            </ul>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery section">
        <div class="grid">
            <ul class="x6 clearfix">
                <li class="has-alternative">
                    <a href=""><img src="/img/gallery.jpg" /></a>
                    <a href=""><img src="/img/gallery.jpg" /></a>
                </li>
                <li class="double has-alternative">
                    <a href=""><img src="/img/gallery.jpg" /></a>
                </li>
                <li class="has-alternative">
                    <a href=""><img src="/img/gallery.jpg" /></a>
                    <a href=""><img src="/img/gallery.jpg" /></a>
                </li>
                <li class="double has-alternative">
                    <a href=""><img src="/img/gallery.jpg" /></a>
                </li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
                <li class="has-alternative"><a href=""><img src="/img/gallery.jpg" /></a></li>
            </ul>
        </div>
    </div>

    <div class="section5 section">
        <div class="wrapper clearfix">
            <div class="common-h2">
                <h2><span>Расписание занятий</span></h2>
            </div>

            <div class="grid">
                <div class="x3 row clearfix">
                    <div class="items">
                        <h3>День 1</h3>
                        <ul>
                            <li>10:30 - 11:00 Регистрация</li>
                            <li>11:00 - 11:10 Знакомство</li>
                            <li>11:10 - 12:00 Демонстрация</li>
                            <li>12:00 - 14:00 Отработка без лезвия</li>
                            <li>14:00 - 15:00 Обед</li>
                            <li>15:00 - 16:00 Отработка бритья</li>
                            <li>16:00 - 17:00 Отработка бритья</li>
                            <li>17:00 - 17:30 Вопросы по теме</li>
                        </ul>
                    </div>
                    <div class="items">
                        <h3>День 2</h3>
                        <ul>
                            <li>10:30 - 11:00 Регистрация</li>
                            <li>11:00 - 11:10 Знакомство</li>
                            <li>11:10 - 12:00 Демонстрация</li>
                            <li>12:00 - 14:00 Отработка без лезвия</li>
                            <li>14:00 - 15:00 Обед</li>
                            <li>15:00 - 16:00 Отработка бритья</li>
                            <li>16:00 - 17:00 Отработка бритья</li>
                            <li>17:00 - 17:30 Вопросы по теме</li>
                        </ul>
                    </div>
                    <div class="items">
                        <h3>День 3</h3>
                        <ul>
                            <li>10:30 - 11:00 Регистрация</li>
                            <li>11:00 - 11:10 Знакомство</li>
                            <li>11:10 - 12:00 Демонстрация</li>
                            <li>12:00 - 14:00 Отработка без лезвия</li>
                            <li>14:00 - 15:00 Обед</li>
                            <li>15:00 - 16:00 Отработка бритья</li>
                            <li>16:00 - 17:00 Отработка бритья</li>
                            <li>17:00 - 17:30 Вопросы по теме</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="apply grid">
                <div class="x2 row clearfix">
                    <div class="items">
                        Описание условий бронирования (предоплата и т.д.).
                    </div>
                    <div class="items"><a href="/timetable" class="big empty red buttons">Записаться</a></div>
                </div>
            </div>
            <div class="add">
               <a href="#section7-2" class="big empty red buttons">Добавить в портфель</a>
            </div>
        </div>
    </div>

    <div class="section6 section">
        <div class="wrapper">
            <div class="inverted common-h2">
                <h2><span>Необходимый инструмент</span></h2>
            </div>
            <div class="common-h2">Фен, прямые ножницы желательно 7.0, пульверизатор, расческа для стрижки, маленький брашниг.</div>
            <div class="inverted common-h2">
                <h2><span>Рекомендуем</span></h2>
            </div>
            <div class="small shop-grid grid">
                <div class="x5 row clearfix">
                    <div class="items">
                        <div class="title">
                            <a href="">Фен PARLUX 385</a>
                        </div>
                        <a href="shop-item.html" class="image">
                            <div class="overlay">
                                <i></i>
                                <div>Набор препаратов для защиты, восстановления, укрепления волос и придания им восхитительного здорового блеска. Шампунь, маска и эликсир на основе кератина и масла арганы обеспечивают великолепное увлажнение, питание и непревзойденную защиту волос от повреждения.</div>
                            </div>
                            <img src="/img/shopGridItem.jpg" />
                        </a>
                        <ul class="info clearfix">
                            <li>1 290 руб.</li>
                            <li><a href="" class="red empty buttons">Купить</a></li>
                        </ul>
                    </div>
                    <div class="items">
                        <div class="title">
                            <a href="">Фен PARLUX 385</a>
                        </div>
                        <a href="shop-item.html" class="image">
                            <div class="overlay">
                                <i></i>
                                <div>Набор препаратов для защиты, восстановления, укрепления волос и придания им восхитительного здорового блеска. Шампунь, маска и эликсир на основе кератина и масла арганы обеспечивают великолепное увлажнение, питание и непревзойденную защиту волос от повреждения.</div>
                            </div>
                            <img src="/img/shopGridItem.jpg" />
                        </a>
                        <ul class="info clearfix">
                            <li>1 290 руб.</li>
                            <li><a href="" class="red empty buttons">Купить</a></li>
                        </ul>
                    </div>
                    <div class="items">
                        <div class="title">
                            <a href="">Фен PARLUX 385</a>
                        </div>
                        <a href="shop-item.html" class="image">
                            <div class="overlay">
                                <i></i>
                                <div>Набор препаратов для защиты, восстановления, укрепления волос и придания им восхитительного здорового блеска. Шампунь, маска и эликсир на основе кератина и масла арганы обеспечивают великолепное увлажнение, питание и непревзойденную защиту волос от повреждения.</div>
                            </div>
                            <img src="/img/shopGridItem.jpg" />
                        </a>
                        <ul class="info clearfix">
                            <li>1 290 руб.</li>
                            <li><a href="" class="red empty buttons">Купить</a></li>
                        </ul>
                    </div>
                    <div class="items">
                        <div class="title">
                            <a href="">Фен PARLUX 385</a>
                        </div>
                        <a href="shop-item.html" class="image">
                            <div class="overlay">
                                <i></i>
                                <div>Набор препаратов для защиты, восстановления, укрепления волос и придания им восхитительного здорового блеска. Шампунь, маска и эликсир на основе кератина и масла арганы обеспечивают великолепное увлажнение, питание и непревзойденную защиту волос от повреждения.</div>
                            </div>
                            <img src="/img/shopGridItem.jpg" />
                        </a>
                        <ul class="info clearfix">
                            <li>1 290 руб.</li>
                            <li><a href="" class="red empty buttons">Купить</a></li>
                        </ul>
                    </div>
                    <div class="items">
                        <div class="title">
                            <a href="">Фен PARLUX 385</a>
                        </div>
                        <a href="shop-item.html" class="image">
                            <div class="overlay">
                                <i></i>
                                <div>Набор препаратов для защиты, восстановления, укрепления волос и придания им восхитительного здорового блеска. Шампунь, маска и эликсир на основе кератина и масла арганы обеспечивают великолепное увлажнение, питание и непревзойденную защиту волос от повреждения.</div>
                            </div>
                            <img src="/img/shopGridItem.jpg" />
                        </a>
                        <ul class="info clearfix">
                            <li>1 290 руб.</li>
                            <li><a href="" class="red empty buttons">Купить</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section8 section">
        <div class="wrapper">
            <div class="common-h2">
                <h2><span>Следите за новостями в соцсетях</span></h2>
            </div>
            <div class="grid">
                <div class="x2 row clearfix">
                    <div class="items">
                        <h3>Присоединяйтесь</h3>
                        <p>ВКонтакте: <a href="http://vk.com/id134876924" target="_blank">vk.com/id134876924</a></p>
                        <p>Facebook: <a href="http://facebook.com" target="_blank">facebook.com</a></p>
                        <p>Одноклассники: <a href="http://ok.ru" target="_blank">ok.ru</a></p>
                        <p>Instagram: <a href="http://instagram.com" target="_blank">instagram.com</a></p>
                    </div>
                    <div class="items">
                        <h3>Поделитесь этой страницей</h3>
                        <div class="ltr social-icons">
                            <a class="vk" href=""></a><a class="tw" href=""></a><a class="ig" href=""></a><a class="fb" href=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="section7-1" class="section7 section">
        <div class="wrapper">
            <div class="common-h2">
                <h2><span>НЕ ЗАБУДЬ ЗАПИСАТЬСЯ, МЕСТА В ГРУППЕ ОГРАНИЧЕНЫ</span></h2>
            </div>
            <div class="apply grid">
                <div class="x2 row clearfix">
                    <div class="items">
                        Описание условий бронирования (предоплата и т.д.).
                    </div>
                    <div class="items"><a href="/timetable" class="big buttons">Записаться</a></div>
                </div>
            </div>
        </div>
    </div>

    <div id="section7-2" class="section7 section">
        <div class="wrapper">
            <div class="common-h2">
                <h2><span>СФОРМИРУЙТЕ ОБУЧАЮЩИЙ КУРС</span></h2>
            </div>
            <div class="grid">
                <div class="x2 row clearfix">
                    <div class="items">
                        <ul>
                            <li>- Создайте портфель из одной или более программ</li>
                            <li>- Подайте заявку на проведение цикла занятий</li>
                            <li>- Ожидайте, с вами свяжется координатор</li>
                        </ul>
                    </div>
                    <div class="items">
                        <!--<div class="price">10.000 руб.</div>-->
                        <a href="" class="big buttons">Добавить в портфель</a>
                        <p>&nbsp;</p>
                        Дополните свой портфель другими программами:
                        <p>&nbsp;</p>
                        <a href="courses.html" class="empty black buttons">Все программы</a>
                    </div>
                </div>
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