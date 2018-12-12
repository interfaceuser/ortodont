<header>
        <div class="header__logo">
           <a href=""><img src="/img/logo.png" class="img-responsive"></a>
        </div>
        <div class="header__adress">
           <div class="header__adress__time__text">Время работы:</div>
           <div class="header__adress__time">{{$param['worktime']}}</div>
           <div class="header__adress__not__weekend">{{$param['workmode']}}</div>
           <div class="mobile__adress">
              <div>
                 <p><span class="name__city">{{$param['city']}}</span>{{$param['street']}}</p>
              </div>
           </div>
        </div>
        <div class="header__street">
           <div>
              <p><span class="name__city">{{$param['city']}}</span>{{$param['street']}}</p>
           </div>
        </div>
        <div class="header__phone">
           <div>
              <p class="header__phone__tel"><a href="tel: {{$param['phone']}}">&nbsp;&nbsp;{{$param['phone']}}</a></p>
              <p class="header__phone__tel"><a href="tel: {{$param['altphone']}}">{{$param['altphone']}}</a></p>
           </div>
           <p class="header__phone__callback"><a href='#feedback' rel="nofollow" class="callback__dsform modalbox">Заказать звонок</a></p>
        </div>
        <div class="header__btn">
           <div class="mobile__phone">
              <div>
                 <p class="header__phone__tel"><a href="tel: {{$param['phone']}}">{{$param['phone']}}</a></p>
                 <p class="header__phone__tel"><a href="tel: {{$param['altphone']}}">{{$param['altphone']}}</a></p>
              </div>
           </div>
           <p><a class="zapis-priem-button modalbox" href="#feedback_2">Запись на прием</a></p>
           <p class="header__btn__mail"><a class="emorcdbr" href="mailto: {{$param['email']}}">{{$param['email']}}</a></p>
           <div class="mobile__zakaz">
              <p class="header__phone__callback"><a href='#feedback' class="callback__dsform modalbox">Заказать звонок</a></p>
           </div>
        </div>
     </header>

     <div class="topmenu-wrapper">
        <div class="clearfix">
           <div class="col-xs-10 topmenu">
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

                          <li>
                             <a href="/uslugi/" title="Услуги"  target="_self" >
                             <span>Услуги</span>
                             </a>
                             <ul>
                                <li>
                                   <a href="/uslugi/ortodontija/" title="Ортодонтическая стоматология"  target="_self" >
                                   <span>Ортодонтическая стоматология</span>
                                   </a>
                                </li>
                               
                             </ul>
                          </li>

                          <li>
                             <a href="/pacientam/" title="Пациентам"  target="_self" >
                             <span>Пациентам</span>
                             </a>
                             <ul>
                                <li>
                                   <a href="/novosti/" title="Новости и акции"  target="_self" >
                                   <span>Новости и акции</span>
                                   </a>
                                </li>
                               
                             </ul>
                          </li>

                          <li>
                             <a href="/specialisty/" title="Врачи"  target="_self" >
                             <span>Врачи</span>
                             </a>
                             <ul>
                                <li>
                                   <a href="/specialisty/nikitina-yulija-ivanovna/" title="Никитина Юлия Ивановна"  target="_self" >
                                   <span>Никитина Юлия Ивановна</span>
                                   </a>
                                </li>
                               
                             </ul>
                          </li>

                          <li>
                             <a href="/kontakty/" title="Контакты"  target="_self" >
                             <span>Контакты</span>
                             </a>
                          </li>

                          <li>
                             <a href="/akcii-i-specpredlozhenija/" title="Акции"  target="_self" >
                             <span>Акции</span>
                             </a>
                          </li>

                          <li>
                             <a href="/prais-list/" title="Прайс-лист"  target="_self" >
                             <span>Прайс-лист</span>
                             </a>
                          </li>
                       </ul>
                    </div>
                 </nav>
              </div>
           </div>
           <div class="col-xs-2 soc-seti">
              <div>
                 <div>
                    <!--noindex-->
                    <a href="https://vk.com/ortodontya" target="_blank" rel="nofollow"></a>
                    <a href="https://www.facebook.com/ortodontya" target="_blank" rel="nofollow"></a>
                    <a href="https://odnoklassniki.ru/ortodontya" target="_blank" rel="nofollow"></a>
                    <a href="https://www.instagram.com/ortodontiya_krasnodar" target="_blank" rel="nofollow"></a>
                    <div id="finevision_banner" onclick="finevision.activate_navbar()">
                       <img width="30" src="/img/bvi.png">
                       <script src="https://finevision.ru/static/js/finevision_banner.js"></script>
                    </div>
                    <!--/noindex-->
                 </div>
              </div>
           </div>
        </div>
        <!--<div class="search" style="margin: 13px 0 -13px; text-align: right;">
           <form id="search_form" action="/search" method="GET" enctype="multipart/form-data" style="clear:both">
               <input type="hidden" name="view" value="search" />
               <input type="text" name="query" id="query" size="30" value="" class="text-input" placeholder="Поиск по сайту" /><input type="submit" placeholder="Введите запрос" class="submit" value="найти">
           </form>
           </div>-->
     </div>