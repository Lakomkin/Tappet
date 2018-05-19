<?php echo session_id(); ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TAPPET</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <section id="img">
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-2"> <img src="img/logo.png" alt=""> </div>
        <div class="col-md-5"></div>
        <div class="col-md-5"> 
          <h4 id="nav">
            <a href="">ФУНКЦИИ</a>
            <a href="#">КУРСЫ</a>
            <a href="#">ДЛЯ ОУ</a>
          </h4> 
        </div>
      </div>
    </div>
  </header>

  <section id="main">
    <div class="container">
      <div class="row blockk">
        <div class="col-md-4"> <h2 class="upper">tappet - Для тех кто <br> богат не только <br> деньгами</h2> </div>
        <div class="col-md-4"></div>
        <div class="col-md-4 SN">
        <a href="#" id="vk"><img src="img/vk.png" class="vk" alt=""></a><br>
        <a href="#" id="fb"><img src="img/fb.png" class="fb" alt=""></a></div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">

          <form action="" id="login" class="center-block" method="post">

            <input type="text" name="login" id="one" placeholder="Адрес электронной почты"> <br>
            <img src="img/line.jpg" class="line" alt=""><br>
            <input type="password" name="password" id="two" placeholder="Пароль"><br>
            <img src="img/line.jpg" class="line" alt=""><br>
            <input type="checkbox" id="three">
            <label for="three"><span></span> <img src="img/remeber.png" alt=""> </label>
            <img src="img/reg.png" class="arrow" alt="">
            <a href="/registration" id="three">
            <img src="img/arrow.png" alt="">
            </a><br>
            <input type="submit" id="four" value=""> 

          </form>

        </div>
      </div>
    </div>
  </section>
</section>
  <section id="info">
    <div class="container">
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2"><img src="img/01.png" alt="" class="zeroone"></div>
        <div class="col-md-5"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><h3 class="zag">функции системы</h3><br><img class="stick" src="img/stick.png" alt=""></div>
        <div class="col-md-4"></div>
      </div>
    </div>

  </section>


  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>