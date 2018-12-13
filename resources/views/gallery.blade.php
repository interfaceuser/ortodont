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
                <div class="">
                    <img alt="Наши работы - До" title="ДО" class="img-responsive center-block" src="/img/works.jpg" /> 

                <p><a class="btn-link-photo" href="nashi-raboty">Еще работы</a>
                   
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