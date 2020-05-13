<?php
if (!defined('DATALIFEENGINE') || !defined('LOGGED_IN')) {
    die('Hacking attempt!');
}
?>


<div class="panel-body">
    <h2>Бесплатный Instagram виджет для сайта:</h2>
	<h4>Транслируйте ваши фотографии из Instagram.com прямо на вашем сайте.</h4>
	<p>
		Оригинал модуля на сайте разработчика <a href="http://inwidget.ru/" target="_blank">http://inwidget.ru/ <i class="fa fa-external-link"></i></a>. <br>
	</p>

<h3>Примеры виджетов</h3>

<div class="alert">
	<iframe src='/engine/modules/mod_tcse/inwidget/index.php?skin=modern-red' data-inwidget scrolling='no' frameborder='no' style='border:none;width:260px;height:315px;overflow:hidden;'></iframe>	

	<iframe src='/engine/modules/mod_tcse/inwidget/index.php?width=100&inline=1&view=3&toolbar=false' data-inwidget scrolling='no' frameborder='no' style='border:none;width:100px;height:320px;overflow:hidden;'></iframe>

	<iframe src='/engine/modules/mod_tcse/inwidget/index.php?skin=modern-blue' data-inwidget scrolling='no' frameborder='no' style='border:none;width:260px;height:315px;overflow:hidden;'></iframe>	
</div>
<div class="">
	<div class="box-left">
		<h2>Особености:</h2>
		<ul class="left">
			<li>Множество настроек<i>&nbsp;</i></li>
			<li>Прямые ссылки на фотографии<i>&nbsp;</i></li>
			<li>Кнопка перехода к странице профиля<i>&nbsp;</i></li>
			<li>Фотография профиля<i>&nbsp;</i></li>
			<li>Статистика профиля<i>&nbsp;</i></li>
			<li>Вывод фотографий по нескольким хэш-тегам<i>&nbsp;</i></li>
			<li>Вставка виджета одной строкой в HTML<i>&nbsp;</i></li>
		</ul>
		<ul class="right">
			<li>Адаптивность<i>&nbsp;</i></li>
			<li>Множество скинов<i>&nbsp;</i></li>
			<li>Автоопределение языка<i>&nbsp;</i></li>
			<li>Работает без ACCESS_TOKEN<i>&nbsp;</i></li>
			<li>Без рекламы<i>&nbsp;</i></li>
			<li>Для любого использования<i>&nbsp;</i></li>
			<li>Открытый исходный код<i>&nbsp;</i></li>
			<li>Подробная инструкция<i>&nbsp;</i></li>
		</ul>
		<div class="clear">&nbsp;</div>
	</div>
	<div class="box-right">
		<h2>Потребуется:</h2>
		<div style="padding:6px 0 5px 0;">
			
			<div style="padding:10px 0 0 0;font-size:13px;font-weight:bold;">PHP &gt;= 5.4.0<br>с библиотекой cURL</div>
		</div>
	</div>
	<div class="clear">&nbsp;</div>
	<div class="notice">
		<div style="color:red;">
			Последняя версия 1.3.3. от 15 марта 2020 г.
		</div>
		<div class="github">
			<!--<img src='/i/github.gif' alt='' />-->
			<a href="https://github.com/aik27/inwidget" target="_blank">Исходный код на GitHub &gt;</a>
			<div class="clear">&nbsp;</div>
		</div>
	</div>
	<div class="clear">&nbsp;</div>

	<h3>Видеоинструкция по получению ACCESS TOKEN:</h3>
	<p>
		Виджет может работать с двумя видами API (недокументированное и endpoints). По умолчанию используется недокументированное. Для его работы токен не требуется. Указание ACCESS TOKEN в настройках виджета переводит его на режим работы с Endpoints API (https://www.instagram.com/developer/). Если вы хотите создать собственное приложение в Instagram, то воспользуйтесь видеоинструкцией ниже. Имейте ввиду, что ваше приложение сначала попадёт в «песочницу» со следующими лимитами: 20 – максимальное количество фотографий, которое можно получить в запросе. 500 – максимальное количество запросов в час. И самое главное - фотографии можно получить только из своего аккаунта. Тоже самое касается выборки по тегам.
	</p>
	<iframe width="400" height="225" src="https://www.youtube.com/embed/_O669Dx3djw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<div style="padding:20px;background:#f6f6f6;width:760px;border-radius:5px 5px 5px 5px;margin:20px 0 50px 0;overflow-x:scroll;">
		<p><b>Зарегистрировать собственное приложение можно здесь:</b></p>
		<p style="margin-bottom:5px;"><a href="https://www.instagram.com/developer/" target="_blank">https://www.instagram.com/developer/</a></p>
		<p><b>URL для генерации ACCESS TOKEN:</b></p>
		https://www.instagram.com/oauth/authorize/?client_id=<b class="red">ВАШ_CLIENT_ID</b>&amp;redirect_uri=<b class="red">ВАШ_URL_АВТОРИЗАЦИИ</b>&amp;response_type=token&amp;scope=basic
	</div>

</div>



</div>
