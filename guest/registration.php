
<?php 
if(isset($_POST['name'])){
    if(!empty($_POST['name'])){
      if(!empty($_POST['password'])){
        if(!empty($_POST['login'])){
          if(!empty($_POST['sname'])){
            if (filter_var($_POST['login'],FILTER_VALIDATE_EMAIL)) {
              if (!$connect->query("SELECT login FROM users WHERE login=".$_POST['login']."")) {
                if (!$connect->query("SELECT password FROM users WHERE password=".$_POST['password']."")) {
                  $connect->query("INSERT INTO users  
                    VALUES ('','".$_POST['name']."','".$_POST['sname']."','".$_POST['login']."','".$_POST['password']."')");

                  session_start();
                  
                  header( 'Location: /main');
              }else $er3 = "пароль занят";
            }else $er2 ="email занят";
          }else $er4 = "не корректный email";
        }else $er1 = "поле не заполнено";
      }else $er1 = "поле не заполнено";
    }else $er1 = "поле не заполнено";
  }else $er1 = "поле не заполнено";
}


 ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TAPPET</title>
    <?php 
    if (isset($er1)||isset($er2)||isset($er3)||isset($er4)){
      echo '    <style>
       input { 
          color: #f44763;
          
       }
       input::-webkit-input-placeholder {
          color: #f44763;
       } 
       input::-moz-placeholder {
          color: #f44763;
       }
    </style>';
    }
     ?>
    
    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/reg.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <a href="/"><img src="img/backbtn.png" class="backbtn" alt=""></a>
  
  <div class="container">
    <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-2">
        <h2 id="logo"><span id="orange">tap</span>pet</h2>
      </div>
      <div class="col-md-5"></div>
    </div>

    <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-2">
        <h2 id="title">регистрация</h2>
      </div>
      <div class="col-md-5"></div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form action="/registration" method="post">

        <span id="lab" >ИМЯ</span><input type="text" name="name" 
            placeholder="<?php if (isset($er1)) echo $er1; else echo "Введите имя" ?>"> <br>

        <img id="stick" src="img/stickreg.jpg" alt=""> <br>

        <span id="lab" >ФАМИЛИЯ</span><input type="text" name="sname" 
            placeholder="<?php if (isset($er1)) echo $er1; else echo "Введите фамилию" ?>"><br>

        <img id="stick" src="img/stickreg.jpg" alt=""> <br>

        <span id="lab" >ЭЛ.ПОЧТА</span><input type="text" name="login" 
            placeholder="<?php if (isset($er1)) echo $er1; elseif (isset($er2)) echo $er2; else echo "Введите почту" ?>"><br>

        <img id="stick" src="img/stickreg.jpg" alt=""> <br>

        <span id="lab" >ПАРОЛЬ</span><input type="password" name="password" 
            placeholder="<?php if (isset($er1)) echo $er1; elseif (isset($er3)) echo $er3; else echo "Введите пароль" ?>"><br>

        <img id="stick" src="img/stickreg.jpg" alt=""> <br>
        <img class="gagarin" src="img/gagarin.png" alt=""> <br>
        <input  class="submit" type="submit" value="поехали !!!">
        
        
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>

  
  </body>
</html>







