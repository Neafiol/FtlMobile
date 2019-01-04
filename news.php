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
    <script src="js/transition.js"></script>


</head>

<body>
<?php
    $page_name = 'News';
    require('templates/header.php');
?>

<!-- Make sure all your bars are the first things in your <body> -->


<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<?
    $db = mysqli_connect('localhost', "host1728258", '74ab39c6', 'host1728258');
    $ex = "SELECT * FROM Users WHERE userid = " . $_COOKIE['userid'];
    $ex = str_replace("\r\n", "", $ex);

    $a = mysqli_query($db, $ex);

    while ($row = mysqli_fetch_assoc($a)) {
        $user = $row; // Inside while loop
    }

$messages=[];

    $res = mysqli_query($db, "SELECT * FROM News  ORDER BY id DESC LIMIT 20");
    while ($row = mysqli_fetch_assoc($res)) {
        $messages[] = $row; // Inside while loop
    }
    //print_r($messages);
    mysqli_close($db);
?>

<div class="content">
    <div class="content-padded">
        <h4> Новости для <? echo $user['class'] ?> класса</h4>
    </div>
    <ul class="table-view">
        <?php foreach ($messages as $m): ?>
            <li class="table-view-cell media">
                <a class="navigate-right" href="<? echo $m['url'] ?>">
                    <img height="10%" class="media-object pull-left" src="<? echo $m['img'] ?>">
                    <div class="media-body">
                        <? echo $m['title'] ?>
                        <p><? echo $m['text'] ?></p>
                    </div>
                </a>
            </li>
        <?php endforeach; ?>

    </ul>
</div>

<?php require('templates/footer.html'); ?>
</body>
</html>