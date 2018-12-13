<div class="rew-wrapper row">
    <div class="module">
        <div class="moduletitle">
            Отзывы о клинике
        </div>
        <div class="modulebody">

            <div class="rew-block-wrapper owl-carousel">
                @foreach ($feedback as $item)
                    <div class="rew-block">
                        <div class="clearfix wrapper-info-rew">
                            <div class="rew-images">
                                <img src="/img{{$item->img}}" class="img-responsive center-block" alt="{{$item->img_alt}}" />
                            </div>
                            <div class="rew-description">
                                <div class="rew-name">
                                    <a href="{{$item->link}}">{{$item->name}}</a>
                                </div>
                                <div class="mod_latest_desc">
                                    {{$item->value}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                

            </div>
            <a href="otzyvy" class="btn-link-photo btn-rew">Все отзывы</a>
            <script>
                $('.rew-block-wrapper').owlCarousel({
                    loop: true,
                    items: 3,
                    margin: 40,
                    nav: true,
                    dots: false,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        330: {
                            items: 1
                        },
                        992: {
                            items: 1
                        },
                        1200: {
                            items: 3
                        }
                    }
                })

            </script>
        </div>

    </div>
</div>