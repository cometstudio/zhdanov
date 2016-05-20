@extends('master')

@section('content')
    <div class="shop-page fc page-bg">
        <div class="fixed menu-container">
            @include('common.menu')
        </div>

        <div class="section1 section">
            <div class="wrapper">
                <div class="fc common-h2">
                    <h2><span>Магазин</span></h2>
                </div>
            </div>
        </div>

        <div class="section2 section">
            <div class="wrapper clearfix">
                <div class="shop-teaser grid">
                    <div class="x4 row">
                        <div class="items">
                            <h3><a href="/shop">Для салонов</a></h3>
                        </div>
                        <div class="items">
                            <h3><a href="/shop">Для мужчин</a></h3>
                        </div>
                        <div class="items">
                            <h3><a href="/shop">Для женщин</a></h3>
                        </div>
                        <div class="items">
                            <h3><a href="/cart">Корзина<sup>2</sup></a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section5 section">
            <div class="wrapper">
                <div class="grid">
                    <div class="x2 row clearfix">
                        <div class="items">
                            <ul class="gallery">
                                <li><a href=""><img src="/img/shampoo.jpg" /></a></li>
                            </ul>
                        </div>
                        <div class="items">
                            <h1>Увлажняющий кератиновый шампунь с маслом арганы, pH Laboratories</h1>
                            <div class="vendor-code">Артикул: 596466</div>
                            <div class="controls grid clearfix">
                                <div class="x2 row">
                                    <div class="items">
                                        <ul>
                                            <li class="quantity">
                                                <i class="fa fa-minus" onclick="return modifyShopItemQuantity(0);"></i>
                                                <span>1</span>
                                                <i class="fa fa-plus" onclick="return modifyShopItemQuantity(1);"></i>
                                            </li>
                                            <li class="stock">В наличии!</li>
                                        </ul>
                                    </div>
                                    <div class="items">
                                        <ul>
                                            <li class="price">1 290.-</li>
                                            <li><a href="" class="big buttons">Купить</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            Набор препаратов для защиты, восстановления, укрепления волос и придания им восхитительного здорового блеска. Шампунь, маска и эликсир на основе кератина и масла арганы обеспечивают великолепное увлажнение, питание и непревзойденную защиту волос от повреждения.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section6 section">
            <div class="wrapper">
                <div class="clearfix">
                    <div class="info">
                        <nav class="real-controls clearfix">
                            <span class="active" onclick="return showHiddenSection('.real', 0);">Описание</span>
                            <span onclick="return showHiddenSection('.real', 1);">Рекомендации по использованию</span>
                            <span onclick="return showHiddenSection('.real', 2);">Отзывы</span>
                        </nav>
                    </div>
                    <div class="aside"></div>
                </div>
                <div class="clearfix">
                    <div class="real info">
                        <div id="s0">
                            <p>Препараты набора, усиливая и дополняя действие друг друга, восстанавливают внешнюю и внутреннюю структуру волоса, обеспечивая защиту от повреждения. Сочетание активных компонентов арганового масла и кератина: витаминов, жирных кислот, микроэлементов, аминокислот великолепно восстанавливает поврежденную структуру волос до самых кончиков. Набор обеспечивает великолепное увлажнение и питание, волосы становятся блестящими, гладкими и шелковистыми.</p>
                            <p>&nbsp;</p>
                            <p><strong>Состав набора:</strong></p>
                            <p>&nbsp;</p>
                            <p>Увлажняющий кератиновый шампунь с маслом арганы, 250 мл Восстанавливающая кератиновая маска с маслом арганы, 250 мл Укрепляющий кератиновый эликсир с маслом арганы, 250 мл.</p>
                            <p>&nbsp;</p>
                            <p><strong>Действие активных компонентов:</strong></p>
                            <p>&nbsp;</p>
                            <p>Масло арганового дерева признано одним из эффективных средств для восстановления и защиты волос, поддержания их здоровья. Масло арганы превосходно защищает волосы от внешних воздействий, великолепно увлажняет и оказывает питательное действие на волосы и кожу головы, укрепляет и восстанавливает структуру волос.</p>
                            <p>&nbsp;</p>
                            <p>Кератин полностью восстанавливает как внешнюю, так и внутреннюю структуру волос, укрепляет сцепление между чешуйками кутикулы, устраняет отслаивание клеток на волосяном стержне. Защищают волосы по всей длине от корней до кончиков.</p>
                            <p>&nbsp;</p>
                            <p>Масло макадамии оказывает восстанавливающее и увлажняющее действие на волосы, устраняет сухость и ломкость волос, разглаживает секущиеся кончики, насыщает необходимыми веществами по всей длине, возвращает гладкость и блеск.</p>
                            <p>&nbsp;</p>
                            <p>Пантенол (провитамин В5). Восстанавливает структуру волоса, стимулирует синтез кератина, обладает смягчающими и себорегулирующими свойствами.</p>
                            <p>&nbsp;</p>
                            <p>Витамин Е оказывает антиоксидантное действие, укрепляет здоровье волос, стимулирует их защитные природные свойства.</p>
                        </div>
                        <div id="s1">
                            Рекомендации
                        </div>
                        <div id="s2">
                            Отзывы
                        </div>
                    </div>
                    <div class="aside">
                        <nav>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                        </nav>
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
                    <a href="contacts.html">Контакты</a>
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