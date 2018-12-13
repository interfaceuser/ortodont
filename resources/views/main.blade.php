<html>
<head>

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    {{--  <base href="https://ortodont-yug.ru" />  --}}
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/concat.css" rel="stylesheet" type="text/css" />
	
	<script src="/js/jquery.js"></script>
	<script src="/js/owl.carousel.js"></script>

	<title>Стоматологическая клиника «ОРТОДОНТиЯ» | Платная стоматология в Краснодаре</title>
	<meta name="keywords" content="стоматология краснодар клиника платная сайт стоматологическая зубная ортодонтия" />
	<meta name="description" content="Стоматологическая клиника «ОРТОДОНТиЯ» предлагает лучшие методы лечения и зубной ортодонтии в Краснодаре. Платная стоматология в нашей клинике – это индивидуальный подход, доступные цены и высокое качество. Подробности на сайте и по телефону 8 (800) 250-57-74." />
	

{{--  	<script type="text/javascript">
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

	</script>  --}}


<link rel="stylesheet" href="/css/default.css" type="text/css" />
<link rel="stylesheet" href="/css/owl.carousel.css" type="text/css" />
<link rel="stylesheet" href="/css/font-awesome.css" type="text/css" />
<link rel="stylesheet" href="/css/concat.css" type="text/css" />

<script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>

</head>

<body>
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
@include('podval')
</body>

</html>