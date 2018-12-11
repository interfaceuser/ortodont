<head>

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <base href="https://ortodont-yug.ru" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="a108643cfb785c0b" />
	<meta name="google-site-verification" content="7mXQh99EmrJGMC_arOhwPviAOpfG9CLF_h0nZT0cLGc" />
	
	<link href="/css/concat.css" rel="stylesheet" type="text/css" />
	
	<script src="/assets/template/ortodont/js/jquery.js"></script>
	<script src="/assets/template/ortodont/js/owl.carousel.js"></script>


	<title>Стоматологическая клиника «ОРТОДОНТиЯ» | Платная стоматология в Краснодаре</title>
	<meta name="keywords" content="стоматология краснодар клиника платная сайт стоматологическая зубная ортодонтия" />
	<meta name="description" content="Стоматологическая клиника «ОРТОДОНТиЯ» предлагает лучшие методы лечения и зубной ортодонтии в Краснодаре. Платная стоматология в нашей клинике – это индивидуальный подход, доступные цены и высокое качество. Подробности на сайте и по телефону 8 (800) 250-57-74." />
	
	<script>
		var TEMPLATE = "_default_";

	</script>
	<script type="text/javascript">
		var LANG_CBOX_IMAGE = 'Фото';
		var LANG_CBOX_FROM = 'из';
		var LANG_CBOX_PREVIOUS = 'Предыдущее';
		var LANG_CBOX_NEXT = 'Следующее';
		var LANG_CBOX_CLOSE = 'Закрыть';
		var LANG_CBOX_XHR_ERROR = 'Не удалось загрузить контент.';
		var LANG_CBOX_IMG_ERROR = 'Не удалось загрузить фото.';
		var LANG_CBOX_SLIDESHOWSTOP = 'Остановить слайдшоу';
		var LANG_CBOX_SLIDESHOWSTART = 'Запустить слайдшоу';
		var LANG_SEND = 'Отправить';
		var LANG_CONTINUE = 'Продолжить';
		var LANG_CLOSE = 'Закрыть';
		var LANG_SAVE = 'Сохранить';
		var LANG_CANCEL = 'Отмена';
		var LANG_ATTENTION = 'Внимание';
		var LANG_CONFIRM = 'Подтверждение действия';
		var LANG_LOADING = 'Загрузка';
		var LANG_ERROR = 'Ошибка';
		var LANG_ADD = 'Добавить';
		var LANG_SELECT_CITY = 'Выберите город';
		var LANG_SELECT = 'Выбрать';

	</script>
	<meta name="yandex-verification" content="605e564096eba8ef" />
	<script>
		(window.Image ? (new Image()) : document.createElement('img')).src = '//vk.com/rtrg?p=VK-RTRG-172189-fQJ1Q';

	</script>
	

	<meta name="yandex-verification" content="efdb5e87c51b83d2" />
	<meta name="google-site-verification" content="Ysl5ytEC48lh4NI04kYHaW5rY47AEL_R0ThyIHANB8I" />


	<!--||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||<script src="ds-comf/ds-form/js/dsforms.js"></script>
        <script>

            $(document).ready(function(){
              $('.zapis-priem-button').dsform({
                  formID : 'dspriem',
              });
              $('div.buttonzap').dsform({
                  formID : 'dspriem',
              });
              $('.callback__dsform,.slider-text').dsform({
                 formID: 'dscallme'
             });
          });


        </script>-->

	<script type="text/javascript">
		$(document).ready(function() {
			$(".modalbox").fancybox();
			$("#f_contact").submit(function() {
				return false;
			});
			$("#f_send").on("click", function() {

				// тут дальнейшие действия по обработке формы
				// закрываем окно, как правило делать это нужно после обработки данных
				$("#f_contact").fadeOut("fast", function() {
					$(this).before("<p><strong>Ваше сообщение отправлено!</strong></p>");
					setTimeout("$.fancybox.close()", 1000);
				});
			});
		});

	</script>


<link rel="stylesheet" href="/assets/components/ajaxform/css/default.css" type="text/css" />
</head>
@include('header')
@include('slider')
@include('services')
@include('crew')
@include('certs')
@include('tour')
@include('feedback')
@include('gallery')
@include('about')
@include('news')
@include('form')
@include('contacts')
@include('footer')
