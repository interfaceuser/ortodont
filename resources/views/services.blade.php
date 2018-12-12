<div class="service-wrapper row">
    <div class="module">
        <div class="moduletitle">
            Услуги
        </div>
        <div class="modulebody">
            <div class="service-block-out_is-not-a-slider">
                @foreach ($services as $service)
                    <div class="service-lock">
                        <a href="{{$service->link}}">
                            <span class="service-img">
                                <img alt="{{$service->img_alt}}" title="{{$service->img_title}}" class="img-responsive center-block" src="/img{{$service->img}}" /> 
                                <img alt="{{$service->img_alt}}" title="{{$service->img_title}}" class="img-responsive center-block" src="/img{{$service->img_cover}}" />
                            </span> 
                            <span class="service-text"> {{$service->value}} </span> 
                        </a>
                    </div>   
                @endforeach
                

            </div>
            <script>
                $('.service-block-out').owlCarousel({
                    loop: true,
                    items: 6,
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
                            items: 4
                        },
                        992: {
                            items: 5
                        },
                        1200: {
                            items: 6
                        }
                    }
                })

            </script>
        </div>

    </div>
</div>