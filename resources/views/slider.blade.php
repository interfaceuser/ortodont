<div>
    <div class="slider-wrapper owl-carousel">
        @foreach ($top_slider as $slide)

            <div class="slider-block {{$slide->block_class}}">
                <div class="slider-info">
                    
                    @for ($i = 0; $i < 3; $i++)
                        <div class="clearfix">
                            <div class="{{$slide->Classlist[$i]}}">{{$slide->desc_list[$i]}}</div>
                        </div>
                    @endfor
                    
                    <div class="clearfix">
                        <div class="slider-text"><a href='#feedback' class="modalbox">Заказать бесплатную консультацию</a></div>
                    </div>
                    
                </div>
                <img alt="{{$slide->img_alt}}" class="img-responsive center-block" src="/img{{$slide->img}}" title="{{$slide->img_title}}" /></div>   

        @endforeach
        
    </div>
    <script>
        $('.slider-wrapper').owlCarousel({
            loop: false,
            items: 1,
            margin: 0,
            nav: false,
            autoplay: true,
            dots: true
        })

    </script>
</div>