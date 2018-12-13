<div class="news-wrapper row">
    <div class="module">
        <div class="moduletitle">
            Новости стоматологии
        </div>
        <div class="modulebody">
            <div class="clearfix row">
                @foreach ($news as $item)
                    <div class="news-block clearfix col-xs-6">
                        <div class="news-img col-xs-4">
                            <img src="/img{{$item->img}}" class="img-responsive" alt="{{$item->img_alt}}" />
                        </div>
                        <div class="news-desc col-xs-8">

                            <div class="news-desc">
                                {{$item->desc}}
                            </div>
                            <a href="{{$item->link}}" class="btn-link-photo">Подробнее</a>
                        </div>
                    </div>
                @endforeach
                


            </div>
        </div>

    </div>
</div>
