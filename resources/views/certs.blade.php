<div class="lic-wrapper row">
    <div class="module">
        <div class="moduletitle">
            Свидетельства и сертификаты
        </div>
        <div class="modulebody">
            <div class="lic-out owl-carousel">
                
                    @foreach ($cert as $item)
                        <div class="lic-in">
                            <a class="fancybox" href="/img{{$item->link}}">
                                <img alt="{{$item->img_alt}}" class="img-responsive center-block" src="/img{{$item->img}}" title="{{$item->img_title}}" /> 
                            </a> 
                        </div>
                    @endforeach
                    
                
            </div>
            <script>
                $('.lic-out').owlCarousel({
                    loop: true,
                    items: 5,
                    margin: 0,
                    nav: true,
                    dots: false,
                    responsiveClass: true,
                    responsive: {


                        0: {
                            items: 1
                        },
                        480: {
                            items: 2
                        },
                        640: {
                            items: 3
                        },
                        740: {
                            items: 3
                        },
                        992: {
                            items: 4
                        },
                        1200: {
                            items: 5
                        }
                    }
                })

            </script>
        </div>

    </div>
    <div class="module">
        <div class="moduletitle">
            Ровно так, как я хочу!
        </div>
        <div class="modulebody">
            <p><img alt="Стоматологическая клиника ОРТОДОНТиЯ" title="ОРТОДОНТиЯ" src="/img/123.jpg" style="width: 1030px; height: 421px;" /></p>
        </div>

    </div>
</div>