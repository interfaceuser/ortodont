<div class="photos-wrapper row clearfix">
    <div class="col-xs-6">
        <div class="module">
            <div class="moduletitle">
                Фотогалерея
            </div>
            <div class="modulebody">
                <div class="photos-wrapper clearfix">
                    @foreach ($gallery as $item)
                        <div class="photos-bolock">
                            <a class="fancybox" href="/img{{$item->img_big}}" title="/img{{$item->img_title}}">
                                <img class="img-responsive center-block" src="/img{{$item->img}}" alt="{{$item->img_big_alt}}" />
                            </a>
                        </div>
                    @endforeach
                    
                    
                    <a href="/pacientam/photos/" class="btn-link-photo">Еще фото</a>
                </div>
            </div>

        </div>
    </div>
    <div class="col-xs-6 photo-after">
        <div class="module">
            <div class="moduletitle">
                Наши работы
            </div>
            <div class="modulebody">
                <div class="twentytwenty-container"><img alt="Наши работы - До" title="ДО" class="img-responsive center-block" src="/img/e0958ca3fa415d1180c5f5d885f77df4.jpg" /> <img alt="Наши работы - После" title="ПОСЛЕ" class="img-responsive center-block" src="/img/0aca66f88ea20b68fbf2976830c60d52.jpg" /></div>

                <p><a class="btn-link-photo" href="nashi-raboty">Еще работы</a>
                    <script>
                        $(window).load(function() {
                            $(".twentytwenty-container").twentytwenty({
                                default_offset_pct: 0.5
                            });
                        });

                    </script>
                </p>
            </div>

        </div>
    </div>
</div>

<div id="pathway">
    <div class="clearfix">
        <div class="col-xs-12"></div>
    </div>
</div>
<div id="mainbody">
    <div class="clearfix">
        <div id="main">



        </div>
    </div>
</div>