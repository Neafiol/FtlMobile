<html>
<head>
    <meta charset="utf-8">
    <title>Ratchet template page</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Include the compiled Ratchet CSS -->
    <link href="ratchet/css/ratchet.css" rel="stylesheet">

    <!-- Include the compiled Ratchet JS -->
    <script src="ratchet/js/ratchet.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.cookie.js"></script>

    <script src="js/transition.js"></script>
</head>
<body  >



<header class="bar bar-nav">
    <h1 class="title">Super Func</h1>
</header>

<?
    $db = mysqli_connect('localhost', "host1728258", '74ab39c6', 'host1728258');
    $ex = "SELECT * FROM Users WHERE userid = " . $_COOKIE['userid'];
    $ex = str_replace("\r\n", "", $ex);

    $a = mysqli_query($db, $ex);

    while ($row = mysqli_fetch_assoc($a)) {
        $user = $row; // Inside while loop
    }

    $fanc[]=['title'=>'Актуальный вопрос','url'=>'#inwork','ico'=>'icon-gear'];
    $fanc[]=['title'=>'Время до звонка','url'=>'#inwork','ico'=>'icon-star-filled'];
    $fanc[]=['title'=>'Написать в техподдержку','url'=>'#inwork','ico'=>'icon-compose'];
    $fanc[]=['title'=>'BOM','url'=>'#inwork','ico'=>'icon-person'];
    $fanc[]=['title'=>'О разработчике','url'=>'#aboutme','ico'=>'icon-info'];
?>
<div class="content" >
    <ul class="table-view">
        <? foreach ($fanc as $f): ?>
        <li class="table-view-cell media">
            <a href="<? echo $f['url'];?>" class="navigate-right">
                <span class="media-object pull-left icon <? echo $f['ico'];?>"></span>
                <div class="media-body">
                    <? echo $f['title'];?>
                </div>
            </a>
        </li>
        <? endforeach; ?>

    </ul>
    <?
        //require('templates/timer.html');
    ?>
</div>

<div id="aboutme" class="modal">
    <header class="bar bar-nav">
        <a class="icon icon-close pull-right" href="#aboutme"></a>
        <h1 class="title">About Autor</h1>
    </header>

    <div class="content">
        <div  style="padding: 5%">
        <p class="content-padded">Приложение разработал Вольнов Петр для Евгения А.,ГОБУ ФИЗТЕХ_ЛИЦЕЙ им П.Л.Капицы 2019<br>
        <a href="https://vk.com/p.volnov">Vkontakte</a>, <a href="https://t.me/necebo">Telegram</a>
        <a href="https://www.facebook.com/p.volnov">Facebook</a></p></div>
    </div>
</div>

<div id="inwork" class="modal">
    <header class="bar bar-nav">
        <a class="icon icon-close pull-right" href="#inwork"></a>
        <h1 class="title">Раздел недоступен</h1>
    </header>

    <div class="content" >
        <div  style="padding: 5%">
        <p class="content-padded">К сожалению, к этому разделу имеют доступ только пользо
        ватели с правами суперюзера, что бы их получить обратитесь в администрацию школы или напишите <a href="#aboutme">разработчику</a></p>
        </div>
    </div>
</div>


<div class="bar bar-standard bar-footer">
    <a href="message.php" class="icon icon-home pull-left"></a>
</div>


</body>
</html>