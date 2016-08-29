@extends('master')

@section('content')
    <div class="login-page fc page-bg">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="section1 section">
            <div class="wrapper">
                <div class="fc common-h2">
                    <h2><span>Авторизация</span></h2>
                </div>
                <div class="login form grid">
                    <h3>Войдите, если уже регистрировались:</h3>
                    <form action="{{ route('postLogin', [], false) }}" method="post">
                        <div class="x3 row clearfix">
                            <div class="items"><input name="email" value="" type="email" placeholder="Ваш e-mail" /></div>
                            <div class="items"><input name="password" value="" type="password" placeholder="Пароль" /></div>
                            <div class="items"><a onclick="return login();" href="javascript:void(0);" class="buttons">Войти</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="section2 inverted section">
            <div class="wrapper">
                <div class="inverted common-h2">
                    <h2><span>Зарегистрируйтесь, если не делали этого ранее:</span></h2>
                </div>
                <div class="grid">
                    <!--<h2><span>Просмотр без регистрации или как Слушатель</span></h2>-->
                    <div class="x2 row clearfix">
                        <div class="items">
                            <h3>... как слушатель</h3>
                            <p><strong>Слушателям доступно:</strong></p>
                            <p>&nbsp;</p>
                            <ul>
                                <li>Сформированные программы обучения</li>
                                <li>Подготовка к конкурсам</li>
                            </ul>
                        </div>
                        <div class="items">
                            <h3>... как организатор</h3>
                            <p><strong>Организаторам доступно:</strong></p>
                            <p>&nbsp;</p>
                            <ul>
                                <li>Сформированные программы обучения</li>
                                <li>Подготовка к конкурсам</li>
                                <li>Составление индивидуальных программ обучения</li>
                                <li>Цены</li>
                                <li>Райдер (условия визита ведущих)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section3 inverted section">
            <div class="wrapper">
                <div class="signup form">
                    <form action="{{ route('postSignup', [], false) }}" method="post">
                        <div class="row">
                            <select name="type">
                                <option value="">выберите...</option>
                                <option value="1">я слушатель курсов</option>
                                <option value="2">я организатор курсов</option>
                            </select>
                        </div>
                        <div class="row"><input name="name" value="" type="text" placeholder="Имя" /></div>
                        <div class="row"><input name="city" value="" type="text" placeholder="Город" /></div>
                        <div class="row"><input name="email" value="" type="email" placeholder="Ваш e-mail" /></div>
                        <div class="row"><input name="password" value="" type="password" placeholder="Пароль" /></div>
                        <a onclick="return signup();" href="javascript:void(0);" class="buttons">Зарегистрироваться</a>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer section">
            <div class="wrapper clearfix">

                @include('common.footerMenu')

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