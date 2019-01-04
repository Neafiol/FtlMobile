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

    <script src="js/setting.js"></script>
    <script src="js/transition.js"></script>
</head>
<body>

<!-- Make sure all your bars are the first things in your <body> -->


<?
    $db = mysqli_connect('localhost', "host1728258", '74ab39c6', 'host1728258');
    $ex = "SELECT * FROM Users WHERE userid = " . $_COOKIE['userid'];
    $ex = str_replace("\r\n", "", $ex);

    $a = mysqli_query($db, $ex);

    while ($row = mysqli_fetch_assoc($a)) {
        $user = $row; // Inside while loop
    }
?>
<div class="content">
    <form id="aform">
        <ul class="table-view">

            <li class="table-view-cell">
                Сообщать о прогулах
                <div id="set1" class="toggle">
                    <div class="toggle-handle"></div>
                </div>
            </li>
            <li class="table-view-cell">
                Напоминать об олимпиадах

                <div id="set2" class="toggle">
                    <div class="toggle-handle"></div>
                </div>

            </li>
        </ul>
        <div style="padding: 5%">

            <input type="hidden" name="userid" value="<?echo  $_COOKIE['userid'];?>">
            <input type="text" name="name" value="<? echo $user['name']?>" placeholder="Full name">
            <input type="email" name="email" value="<? echo $user['email']?>" placeholder="Email">

            <select class="table-view-cell" value="<? echo $user['class']?>" name="class" class="table-view">
                <option class="table-view-cell" value="11">11 кл</option>
                <option class="table-view-cell" value="10">10 кл</option>
                <option class="table-view-cell" value="9">9 кл</option>
                <option class="table-view-cell" value="8">8 кл</option>
                <option class="table-view-cell" value="7">7 кл</option>
                <option class="table-view-cell" value="6">6 кл</option>
                <option class="table-view-cell" value="5">5 кл</option>

            </select>
            <select class="table-view-cell" value="<? echo $user['letter']?>" name="letter" class="table-view">
                <option class="table-view-cell" value="1">А</option>
                <option class="table-view-cell" value="2">Б</option>
                <option class="table-view-cell" value="3">С</option>
            </select>
            <select class="table-view-cell" value="<? echo $user['profil']?>" name="profil" class="table-view">
                <option class="table-view-cell" value="1">Информат</option>
                <option class="table-view-cell" value="2">Биохим</option>
                <option class="table-view-cell" value="3">Физтех</option>
                <option class="table-view-cell" value="4">Физмат</option>
            </select>

<!--            <textarea name="text" rows="5"></textarea>-->
            <input type="hidden" name="action" value="adduser">
            <button class="btn btn-positive btn-block">Save</button>
        </div>
    </form>


</div>

<div class="bar bar-standard bar-footer">
    <a href="message.php" class="icon icon-home pull-left"></a>
</div>


</body>
</html>