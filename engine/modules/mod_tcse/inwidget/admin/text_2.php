<?php
if (!defined('DATALIFEENGINE') || !defined('LOGGED_IN')) {
    die('Hacking attempt!');
}
?>


<div class="panel-body">
    <p>
    	Установка виджета:
    </p>
    <div class="alert alert-warning">
	    <p>
	    	Установите права на запись для папки <b>/engine/modules/mod_tcse/inwidget/cache</b>: 777
	    </p>
	    <p>
		    В папке <b>/engine/modules/mod_tcse/inwidget/cache</b> виджет будет хранить кэшированные данные.<br>
			Если для директории будут отсутствовать права на запись, вы увидите ошибку ERROR #101.
	    </p>
    </div>
    <p>
    	Отредактируйте файл <b>/engine/modules/mod_tcse/inwidget/config.php</b><br>
		Вам потребуется указать логин в Instgram и другие параметры.<br>
		<br>
		Список параметров:<br>
    </p>

<div class="alert alert-info">
<ul>
<li><b>LOGIN</b> – логин аккаунта в инстаграм из которого будут транслироваться фотографии.</li>
<li><b>HASHTAG</b> – хэш-теги через запятую (например: girl, man). Если вы хотите транслировать фотографии других пользователей, либо вывести фотографии с очень специфичным тегом, используйте эту опцию. Выборка фотографий будет производиться со всего мира в порядке того, как фотографии были отмечены искомым тегом. Обратите внимание, что тулбар с аватаркой и статистикой будет автоматически скрыт.</li>
<li><b>ACCESS_TOKEN</b> – хэш-ключ выданный приложением, которому вы разрешили доступ к своему профилю.<br><span class="red">Поле НЕ является обязательным.</span> Если вы заполните его, то запросы начнут отправляться через endpoints API (https://www.instagram.com/developer/). При этом, виджет будет обладать только теми правами и лимитами на выборку данных, которыми обладает само приложение. О том, как самостоятельно получить токен <a href="#token">смотрите здесь</a>.</li>
<li><b>authLogin и authPassword</b> – логин и пароль от любого аккаунта для авторизации. <span class="red">Поля НЕ являются обязательными.</span> Авторизация необходима для альтернативных способов получения данных в случае выхода из строя основных. Советую завести для этого отдельный аккаунт с отключенной двухшаговой аутентификацией. Данные авторизации не передаются третьим лицам, в том числе автору виджета.</li>
<li><b>loginAvailable</b> - если вы хотите выводить разные логины на разных страницах сайта, добавьте в этот массив список логинов, которые разрешенны к показу. Затем вы сможете передавать необходимый логин в виджет с помощью GET переменной. Например: /inwidget/index.php?login=fotokto_ru</li>
<li><b>tagsAvailable</b> - если вы хотите выводить разные теги на разных страницах сайта, добавьте в этот массив список тегов, которые разрешены к показу. Затем вы сможете передавать необходимый тег в виджет с помощью GET переменной. Например: /inwidget/index.php?tag=photography. Данную настройку можно комбинировать с "loginAvailable" и "tagsFromAccountOnly".</li>
<li><b>tagsBannedLogins</b> – логины заблокированных пользователей через запятую (например: mark18, kitty45). Фотографии перечисленных пользователей не будут выводиться в виджете при использовании поиска по хештегам.</li>
<li><b>tagsFromAccountOnly</b> – искать фотографии с тегами только в аккаунте пользователя [ true / false ]. Виджету придётся сначала получить фотографии из вашего профиля, а затем перебором искать снимки с тегами, перечисленными в опции HASHTAG. Чтобы поиск был более результативным рекомендуется увеличить значение опции imgCount.</li>
<li><b>imgRandom</b> – выводить фотографии в случайном порядке [ true / false ]</li>
<li><b>imgCount</b> – сколько фотографий запрашивать из Instagram. Влияет на размер кэша.</li>
<li><b>cacheExpiration</b> – через сколько часов обновлять кэш.</li>
<li><b>cacheSkip</b> – не использовать кэш [ true / false ]. Если присвоить true, то кэш будет проигнорирован и запросы к API будут отправляться при каждой загрузке виджета. Используйте эту опцию только для отладки.</li>
<li><b>cachePath</b> – путь к директории с кэш файлами</li>
<li><b>skinDefault</b> – скин виджета по умолчанию [default / modern-blue / modern-green / modern-red / modern-orange / modern-grey / modern-black / modern-violet / modern-yellow]</li>
<li><b>skinPath</b> – путь к деректории со скинами</li>
<li><b>langDefault</b> – язык виджета по умолчанию [ ru / en / ua ]</li>
<li><b>langAuto</b> – автоматически определять язык пользователя [ true / false ]</li>
<li><b>langPath</b> – путь к деректории с локализациями</li>
</ul>
</div>

<div class="alert alert-warning">
    <p>
    	<b>Внимание!</b> Если после первичной настройки вы решите изменить LOGIN, HASHTAG или tagsBannedLogins,
изменения вступят в силу только после удаления файла с кэшем или после того, как кэш устареет.
    </p>
</div>


<p>
  Вывод виджета на сайте
</p>    
<code><pre>

&lt;!-- По умолчанию --&gt;<br>
&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php' data-inwidget scrolling='no' frameborder='no' style='border:none;width:260px;height:330px;overflow:hidden;'&gt;&lt;/iframe&gt;<br><br>
&lt;!-- Без профиля --&gt;<br>
&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php?toolbar=false' data-inwidget scrolling='no' frameborder='no' style='border:none;width:260px;height:320px;overflow:hidden;'&gt;&lt;/iframe&gt;<br><br>
&lt;!-- Мини 1 --&gt;<br>
&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php?width=100&amp;inline=2&amp;view=12&amp;toolbar=false' data-inwidget scrolling='no' frameborder='no' style='border:none;width:100px;height:320px;overflow:hidden;'&gt;&lt;/iframe&gt;<br><br>
&lt;!-- Мини 2 --&gt;<br>
&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php?width=100&amp;inline=1&amp;view=3&amp;toolbar=false' data-inwidget scrolling='no' frameborder='no' style='border:none;width:100px;height:320px;overflow:hidden;'&gt;&lt;/iframe&gt;
</pre></code>

<h3>Разные цветовые схемы:</h3>
<pre>
&lt;!-- Синий --&gt;<br>
&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php?skin=modern-blue' data-inwidget scrolling='no' frameborder='no' style='border:none;width:260px;height:315px;overflow:hidden;'&gt;&lt;/iframe&gt;<br><br>
&lt;!-- Зелёный --&gt;<br>
&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php?skin=modern-green' data-inwidget scrolling='no' frameborder='no' style='border:none;width:260px;height:315px;overflow:hidden;'&gt;&lt;/iframe&gt;<br><br>
&lt;!-- Красный --&gt;<br>
&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php?skin=modern-red' data-inwidget scrolling='no' frameborder='no' style='border:none;width:260px;height:315px;overflow:hidden;'&gt;&lt;/iframe&gt;<br><br>
&lt;!-- Оранжевый --&gt;<br>
&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php?skin=modern-orange' data-inwidget scrolling='no' frameborder='no' style='border:none;width:260px;height:315px;;overflow:hidden;'&gt;&lt;/iframe&gt;<br><br>
&lt;!-- Фиолетовый --&gt;<br>
&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php?skin=modern-violet' data-inwidget scrolling='no' frameborder='no' style='border:none;width:260px;height:315px;overflow:hidden;'&gt;&lt;/iframe&gt;<br><br>
&lt;!-- Чёрный --&gt;<br>
&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php?skin=modern-black' data-inwidget scrolling='no' frameborder='no' style='border:none;width:260px;height:315px;overflow:hidden;'&gt;&lt;/iframe&gt;<br><br>
&lt;!-- Жёлтый --&gt;<br>
&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php?skin=modern-yellow' data-inwidget scrolling='no' frameborder='no' style='border:none;width:260px;height:315px;overflow:hidden;'&gt;&lt;/iframe&gt;<br><br>
&lt;!-- Серый --&gt;<br>
&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php?skin=modern-grey' data-inwidget scrolling='no' frameborder='no' style='border:none;width:260px;height:315px;overflow:hidden;'&gt;&lt;/iframe&gt;
</pre>

<h3>Вывод только фото, без рамок и бейджей</h3>
<p>
    <b>adaptive=true</b> - активация адаптивного режима для виджета<br>
    <b>inline=3</b> - количество фото в одной строке<br>
    <b>view=6</b> - количество фото в виджете<br><br>
    сама строка переменных:<br>
    index.php?adaptive=true&inline=3&view=6
</p>
<code>&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php?adaptive=true&inline=3&view=6' data-inwidget scrolling='no' frameborder='no'>&lt;/iframe>
</code>

<h5>Результат </h5>
<iframe src='/engine/modules/mod_tcse/inwidget/index.php?adaptive=true&inline=3&view=6' data-inwidget scrolling='no' frameborder='no'></iframe>

<p>
    для вывода 4 фото в ряд и 3 рядов нам необходимо написать
    в самой строке переменных:<br>
    index.php?adaptive=true&inline=4&view=12
</p>
<code>&lt;iframe src='/engine/modules/mod_tcse/inwidget/index.php?adaptive=true&inline=4&view=12' data-inwidget scrolling='no' frameborder='no'>&lt;/iframe>
</code>

	
</div>
