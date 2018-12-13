<div class="tour-wrapper row">
    <div class="module">
        <div class="moduletitle">
            3D тур по стоматологии
        </div>
        <div class="modulebody">
            <div class="tour-list">
                
                @for ($i = 0; $i < 2; $i++)
                <?php
                    $item=$tour->shift();
                ?>
                    <div class="col-xs-6">
                    <a class="ifr fancybox fancybox.iframe" href="{{$item->link}}" title="{{$item->name}}">
                        <span class="editContent"><span>{{$item->name}}</span></span>
                        <img alt="{{$item->img_alt}}" title="{{$item->img_title}}" class="img-responsive center-block" src="/img{{$item->img}}" />
                    </a>
                    </div>
                @endfor
                
                

                <div class="tour-hidden">
                    @foreach ($tour as $item)
                        <div class="col-xs-6">
                            <a class="ifr fancybox fancybox.iframe" href="{{$item->link}}" title="{{$item->name}}">
                                <span class="editContent">
                                    <span>{{$item->name}}</span>
                                </span>
                                <img alt="{{$item->img_alt}}" title="{{$item->img_title}}" class="img-responsive center-block" src="/img{{$item->img}}" />
                            </a>
                        </div>
  
                    @endforeach
                    
                </div>

                <div class="clearfix">&nbsp;</div>

                <div class="tour-btn text-center"><a href="javascript:void(0)">Загузить еще</a></div>
            </div>
            <script>
                $(".tour-btn a").click(function() {
                    $(".tour-hidden").slideToggle("fast", function() {});
                    $(".tour-btn a").addClass('link-none');
                });

            </script>
        </div>

    </div>
</div>