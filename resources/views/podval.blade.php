
<!--Модальные окна -->
<div id="feedback">
   <form class="ajax_form" id="callback" method="post" enctype="multipart/form-data" novalidate="" >
      {{ csrf_field() }}
      <div class="form-head">Заказать звонок</div>
      <div class="field-1">
         <label for="field-id203412">Ваше имя</label>
         <input id="field-id203412" name="name" placeholder="Как к Вам обращаться?" value="" pattern="" type="text">
      </div>
      <div class="field-2">
         <label for="field-id238580">Ваш телефон <span class="required">*</span></label>
         <input id="field-id238580" name="phone" placeholder="+ 7 (___) ___-__-__" value="" required="" pattern="^\+?[\d,\-,(,),\s]+$" data-dsform-mask="+7 (999) 999-99-99" type="text">
      </div>
      <div class="policy" style="text-align:center;font-size:12px;">Нажимая на кнопку "Отправить", Вы соглашаетесь с<br> <a href="/soglasie-na-obrabotku-personalnih-dannyh.html">правилами обработки персональных данных</a>.</div>
      <div class="field-4 buttonform">
         <input value="Отправить" type="button" id="callback_submit">
      </div>
      <div class="error_form"></div>
      <input type="hidden" name="af_action" value="6564df466cd7f5f5ad15383c544be5d5" />
   </form>
</div>


<div id="feedback_2">
      
   <form id="vizit" class="ajax_form" method="post" enctype="multipart/form-data" novalidate="" >
      {{ csrf_field() }}
      <div class="form-head">Записаться на прием</div>
      <div class="form__upper__text">Оставьте свои контактные данные и менеджер свяжется с вами для выбора специалиста и уточнения времени.</div>
      <div class="field-2">
         <label for="youname">Ваше имя</label>
         <input id="youname" name="name" placeholder="Ваше имя" value="" autofocus="" class="focusout" type="text">
      </div>
      <div class="field-3">
         <label for="field-id238580">Ваш телефон <span class="required">*</span></label>
         <input id="field-id238580" name="phone" placeholder="+ 7 (___) ___-__-__" value="" required="" pattern="^\+?[\d,\-,(,),\s]+$" data-dsform-mask="+7 (999) 999-99-99" type="text">
      </div>
      <div class="field-4">
         <label for="youemail">Ваш e-mail</label>
         <input id="youemail" name="email" placeholder="Ваш e-mail" value="" pattern="^([a-z,._,.\-,0-9])+@([a-z,._,.\-,0-9])+(\.([a-z])+)+$" type="text">
      </div>
      <div class="field-5">
         <label for="mydatepicker">Дата приема <span class="required">*</span></label>
         <input id="mydatepicker" required="" name="datapriema"  value="" placeholder="" type="text">
      </div>
      <div class="field-6">
         <label for="mytimepicker">Время приема <span class="required">*</span></label>
         <input id="mytimepicker" required="" name="time" placeholder=""  value="" data-dsform-mask="99-99" type="text">
      </div>
      <div class="field-7 fromcall inline">
         <label>Вид приема</label>
         <select name="vid-priema" value="">
            <option value="Лечебный" selected="">Лечебный</option>
            <option value="Хирургический">Хирургический</option>
            <option value="Ортодонтический">Ортодонтический</option>
         </select>
      </div>
      <div class="field-8 fromcall inline">
         <label>Вариант подтверждения заявки</label>
         <select name="validate-zayavka" value="">
            <option value="Звонок от менеджера" selected="">Звонок от менеджера</option>
            <option value="Электронная почта">Электронная почта</option>
            <option value="Смс-сообщение">Смс-сообщение</option>
         </select>
      </div>
      <div class="policy" style="text-align:center;font-size:12px;">Нажимая на кнопку "Отправить", Вы соглашаетесь с<br> <a href="/soglasie-na-obrabotku-personalnih-dannyh.html">правилами обработки персональных данных</a>.</div>
      <div class="field-11 buttonform">
         <input value="Отправить" type="button" id="vizit_submit">
      </div>
      <div class="error_form"></div>
      <input type="hidden" name="af_action" value="898aaadc883fb1a1f3cbc848162a2737" />
   </form>
</div>

<div id="mask"></div>

<script>
        $(document).ready(function() {   
            $('a.modal').click(function(e) {
            e.preventDefault();
            var id = $(this).attr('href');
            var maskHeight = $(document).height();
            var maskWidth = $(window).width();
            $('#mask').css({'width':maskWidth,'height':maskHeight});
            $('#mask').fadeIn(1000); 
            $('#mask').fadeTo("slow",0.8); 
            var winH = $(window).height();
            var winW = $(window).width();
            $(id).css('top',  winH/2-$(id).height()/2);
            $(id).css('left', winW/2-$(id).width()/2);
            $(id).fadeIn(2000); 
            });
            $('.window .close').click(function (e) { 
            e.preventDefault();
            $('#mask, .window').hide();
            }); 
            $('#mask').click(function () {
            $(this).hide();
            $('.window').hide();
            }); 
           }); 

         $( document ).ready(function() {
            $("#vizit_submit").click(
              function(){
                 sendAjaxForm('result_form', 'vizit', '/mail/vizit','#feedback_2');
                 return false; 
              }
           );
        });

        $( document ).ready(function() {
         $("#callback_submit").click(
           function(){
              sendAjaxForm('result_form', 'callback', '/mail/callback', '#feedback');
              return false; 
           }
        );
     });
         
        function sendAjaxForm(result_form, ajax_form, url, form_block) {
            $.ajax({
                url:     url, //url страницы (action_ajax_form.php)
                type:     "POST", //метод отправки
                dataType: "html", //формат данных
                data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
                success: function(response) { //Данные отправлены успешно
               $(form_block).hide(); 
               $('.fancybox-overlay').hide();
               },
               error: function(response) { // Данные не отправлены
                    
               }
            });
        }
    </script>


<script src="/js/common.js"></script>
<script src="/js/jquery.colorbox.js"></script>
<script src="/js/init_colorbox.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.event.move.js"></script>
<script src="/js/jquery.twentytwenty.js"></script>
<script src="/js/datepicker.min.js"></script>
<link rel="stylesheet" href="css/datepicker.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:500&amp;subset=cyrillic" rel="stylesheet">
<script src="/js/customscript.js"></script>
<script>
   $(document).ready(function() {
   	$(".various").fancybox({
   		fitToView: false,
   		width: 'auto',
   		height: 'auto',
   		autoSize: false,
   		closeClick: false,
   		openEffect: 'none',
   		closeEffect: 'none'
   	});
   });
   
</script>
</div>
<script>
   $(".menu-open-link").click(function() {
   	$(this).toggleClass("menu-open");
   });
   
</script>
<script>
   $(document).ready(function() {
   	$(".price-title").click(function() {
   		$(this).toggleClass("price-open");
   	});
   })
   
</script>
<!-- UpButton {literal} -->
<div id="upbutton"></div>
<script>
   $(document).ready(function() {
   	$(window).scroll(function() {
   		if ($(this).scrollTop() > 50) {
   			if ($('#upbutton').is(':hidden')) {
   				$('#upbutton').css({
   					opacity: 1
   				}).fadeIn('slow');
   			}
   		} else {
   			$('#upbutton').stop(true, false).fadeOut('fast');
   		}
   	});
   	$('#upbutton').click(function() {
   		$('html, body').stop().animate({
   			scrollTop: 0
   		}, 300);
   	});
   });
   
</script>
<link href="/css/tabs2.css" rel="stylesheet" />
<style type="text/css">
   #upbutton {
   display: none;
   position: fixed;
   left: 40px;
   bottom: 40px;
   width: 50px;
   height: 50px;
   overflow: hidden;
   text-align: center;
   color: #222121;
   font-size: 18px;
   cursor: pointer;
   text-decoration: underline;
   z-index: 9999;
   background: #0388A4;
   background-repeat: no-repeat;
   background-position: center;
   background-size: contain;
   text-decoration: none;
   }
   #upbutton:before {
   content: "↑";
   font-size: 38px;
   display: block;
   position: absolute;
   top: 14px;
   left: 9px;
   color: #fff;
   }
</style>
<!-- {/literal}/UpButton -->
<script src="/js/d-goals.js"></script>
<script>
   $('.cboxElement').fancybox();
   
</script>
<div itemscope itemtype="//schema.org/Organization" style="display:none">
   <span itemprop="name">Ортодонт и я</span> Контакты:
   <div itemprop="address" itemscope itemtype="//schema.org/PostalAddress">
      Адрес:
      <span itemprop="streetAddress">ул. Карасунская, 98</span>
      <span itemprop="addressLocality">г. Краснодар, </span>,
   </div>
   Телефон:<span itemprop="telephone">(800) 250-57-74,</span>, Электронная почта: <span itemprop="email">ortodontiya-yug@yandex.ru</span>
   <img src="/img/logo.png" itemprop="logo">
</div>
<link href="/css/twentytwenty.css" rel="stylesheet" type="text/css" />
<link href="/css/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="/css/colorbox.css" rel="stylesheet" type="text/css" />
<script>
   $(document).ready(function() {
   	$('a.fancybox').attr('rel', 'group1');
   })
   
</script>
<script>
   $('.one').parent('li').click(function () {
       $('.two').parent('li').removeClass('ui-tabs-active');
       $('.one').parent('li').addClass('ui-tabs-active');
   	$('#one-link').show();
   	$('#two-link').hide();
   });
   $('.two').parent('li').click(function () {
       $('.one').parent('li').removeClass('ui-tabs-active');
       $('.two').parent('li').addClass('ui-tabs-active');
   	$('#two-link').show();
   	$('#one-link').hide();		
   });
</script>