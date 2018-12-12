<div class="pers-wrapper">
    <div class="module">
        <div class="modulebody">
            <h1>Стоматология &laquo;ОРТОДОНТиЯ&raquo; &mdash; здоровье и красота вашей улыбки!</h1>

            <div class="pers-wrapper-main clearfix">
                <div class="col-xs-4"><img alt="Главный врач стоматологической клиники Никитина Юлия Ивановна" class="img-responsive" src="/img/pers/1.png" title="Никитина Юлия Ивановна" /></div>

                <div class="col-xs-8">
                    <div class="pers-title-main">Мы были первыми и остаемся лидерами в ортодонтии</div>

                    <p style="text-align: justify;">Стоматологическая&nbsp;клиника &laquo;ОРТОДОНТиЯ&raquo; работает в Краснодаре с 2008 года. Качественное и безболезненное восстановление и лечение патологий прикуса происходит с использованием современных мировых технологий и методик. Специалисты&nbsp;нашей стоматологии&nbsp;систематически повышают свою квалификацию и обмениваются опытом и знаниями с лучшими врачами США, Европы и Южной Кореи. Для достижения высоких результатов мы практикуем использование комплексного подхода. Врачи разных профилей разрабатывают пациенту индивидуальный план лечения и в 100 % случаев успешно разрешают его проблему.</p>

                    <p style="text-align: justify;">Высокие эстетические показатели, надежность и полное выздоровление полости рта &mdash; основные цели нашей работы. За годы своего существования&nbsp;наша клиника стоматологии,&nbsp;специализирующаяся на зубной ортодонтии, помогла более чем 150 000 пациентам. Наши&nbsp;специалисты&nbsp;дают возможность реализовать пациенту заветную мечту о красивой и здоровой улыбке с правильным прикусом.</p>

                    <p>Добро пожаловать на сайт стоматологической клиники &laquo;ОРТОДОНТиЯ&raquo;!</p>

                    <div class="clearfix row">
                        <div class="col-xs-6">
                            <div class="pers-main-who">Главный врач стоматологической клиники,<br /> врач-ортодонт
                            </div>

                            <div class="pers-main-name">Никитина Юлия Ивановна</div>
                        </div>

                        <div class="col-xs-6"><img alt="Подпись" class="img-responsive pull-right" src="/img/pers/1p.png" title="Подпись" /></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div>
        <div class="pers-block-all">
            <div class="pers-block-out owl-carousel">
                @foreach ($crew as $crew_item)
                    
                    <div class="pers-block">
                        <a href="{{$crew_item->link}}">
                            <img alt="{{$crew_item->img_alt}}" title="{{$crew_item->img_title}}" class="img-responsive center-block" src="/img{{$crew_item->img}}" />
                            <span class="pers-title">{{$crew_item->man_name}}</span> 
                            <span class="pers-work">{{$crew_item->desc}}</span> 
                        </a>
                    </div>
  
                @endforeach
                
            </div>
        </div>
        <script>
            $('.pers-block-out').owlCarousel({
                loop: true,
                items: 4,
                margin: 0,
                nav: true,
                dots: false,
                responsiveClass: true,
                responsive: {



                    0: {
                        items: 1,
                    },
                    480: {
                        items: 2,
                    },
                    640: {
                        items: 2,
                    },
                    740: {
                        items: 2,
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            })

        </script>
    </div>
</div>