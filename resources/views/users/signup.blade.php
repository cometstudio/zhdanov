@extends('master')

@section('content')
    <div class="signup-page fc page-bg">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="section1 section">
            <div class="wrapper">
                <div class="fc common-h2">
                    <h2><span>Регистрация нового организатора</span></h2>
                </div>
            </div>
        </div>

        <div class="section3 section">
            <div class="wrapper">
                <div class="grid">
                    <!--<h2><span>Просмотр без регистрации или как Слушатель</span></h2>-->
                    <div class="x2 row clearfix">
                        <div class="items">
                            <h3>Организаторам доступно:</h3>
                            <ul>
                                <li>Сформированные программы обучения</li>
                                <li>Подготовка к конкурсам</li>
                                <li>Составление индивидуальных программ обучения</li>
                                <li>Цены</li>
                                <li>Райдер (условия визита ведущих)</li>
                            </ul>
                        </div>
                        <div class="items">
                            <h3>Заполните и отправьте форму:</h3>
                            <div class="form">
                                <form method="post">
                                    <div class="row">
                                        <input name="" value="" type="text" placeholder="Ваше имя" />
                                    </div>
                                    <div class="x2 row clearfix">
                                        <div class="items"><input name="" value="" type="email" placeholder="Ваш e-mail" /></div>
                                        <div class="items"><input name="" value="" type="password" placeholder="Пароль" /></div>
                                    </div>
                                    <a href="/courses" class="buttons">Зарегистрироваться</a>
                                </form>
                            </div>
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