<footer class="row">
        <div class="container">
            <div class="footer__top">
                <div class="footer__logo">
                    <a href="">
                    <img src="/img/logo.png" class="img-responsive">
                    </a>
                </div>
                <div class="topmenu-wrapper footer__menu">
                    <div>
                        <nav class="navbar mainmenu" role="navigation">
                            <div class="navbar-header">
                                <div class="hidden visible-xs menu-xs">Меню</div>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exmainmenu-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse navbar-exmainmenu-collapse">
                                <ul class="nav navbar-nav">
                                        @php
                                       
                                        
                                        //Получаем HTML разметку
                                        $cat_menu = showCat($menutree);
                                        
                                        //Выводим на экран
                                        echo  $cat_menu ;
                                           
                                        @endphp
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="footer__phone">
                    <div>
                        <p class="header__phone__tel"><a href="tel: {{$param['phone']}}">{{$param['phone']}}</a></p>
                        <p class="header__phone__tel"><a href="tel: {{$param['altphone']}}">{{$param['altphone']}}</a></p>
                    </div>
                </div>
            </div>
            <div class="footer__middle">
                <div class="footer__soc">
                    <ul>
                        <li><a href="https://vk.com/ortodontya" target="_blank"><img src="/img/vk.svg" alt=""></a></li>
                        <li><a href="https://www.facebook.com/ortodontya" target="_blank"><img src="/img/fcb.svg" alt=""></a></li>
                        <li><a href="https://odnoklassniki.ru/ortodontya" target="_blank"><img src="/img/odn.svg" alt=""></a></li>
                        <li><a href="https://www.instagram.com/ortodontiya_krasnodar" target="_blank"><img src="/img/inst.svg" alt=""></a></li>
                    </ul>
                </div>
                <div class="footer__addres">
                    <div class="header__adress__time__text">Время работы:</div>
                    <div class="header__adress__time">{{$param['worktime']}}</div>
                    <div class="header__adress__not__weekend">{{$param['workmode']}}</div>
                </div>
                <div class="footer__street">
                    <div>
                        <p><span class="name__city">{{$param['city']}}</span>{{$param['street']}}</p>
                    </div>
                </div>
                <div class="footer__btns">
                    <a href='#feedback_2' class="zapis-priem-button modalbox">Запись на прием</a>
                    <a href='#feedback' class="callback__dsform modalbox">Заказать звонок</a>
                </div>
            </div>
            <div class="footer__bottom">
                <p>© 2018 "ОРТОДОНТ&Я" - первая специализированная ортодонтическая клиника на Юге России с 2008 г. ООО "Ортодонт". Лицензия № ЛО-23-01-011399</p>
                <a href="sitemap">Карта сайта</a>
            </div>
            <div class="footer__per__data">
                <a href="soglasie-na-obrabotku-personalnih-dannyh.html">Согласие на обработку персональных данных</a>
            </div>
            <div class="footer__logo__mobile">
                <a href="">
                <img src="/img/logo.png" class="img-responsive">
                </a>
            </div>
        </div>
    </footer>