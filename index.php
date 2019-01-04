<html>

  <head>
    <meta charset="utf-8">    <title>Ratchet template page</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="blue">

    <!-- Include the compiled Ratchet CSS -->
    <link href="ratchet/css/ratchet.css" rel="stylesheet">

    <!-- Include the compiled Ratchet JS -->
    <script src="ratchet/js/ratchet.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/index.js"></script>
<!--      http://goratchet.com/components-->

  </head>
  <body>
  <?php
//  if(isset($_COOKIE["userid"])){
  //      header("Location: message.php");
//      die();
//  };
  ?>



    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
        <h1 class="title">FTL app</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
      <p class="content-padded"  style="padding: 5%">О, счастивый обладатель Android версии выше 5.0! Добро пожаловать в приложение ГОБУ Физтех-лицей,
      Здесть ты сможешь своевременно получать актуальную для тебя информацию о жизни школы, следить
      за идущими олипиадами, принимать участие в голосовании. Родители также смогут вести контроль посещаймости своих детей. Что бы войти
      введите ваш пригласительный код</p>
        <form id="regform"  style="padding: 5%">
            <input name="action" value="check" type="hidden">
            <input name="code" type="text" placeholder="Ваш пригласительный код">
            <button class="btn btn-positive btn-block">Enter</button>
        </form>

    </div>


  </body>
</html>