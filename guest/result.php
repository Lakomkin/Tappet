<?php 


if ($_POST['name']=="") echo "erorr";
elseif ($_POST['sname']=="") echo "erorr";
elseif ($_POST['login']=="") echo "erorr";
elseif ($_POST['password']=="") echo "erorr";
elseif (!filter_var($_POST['login'],FILTER_VALIDATE_EMAIL)) echo "erorr";
elseif ($connect->query("SELECT login WHERE login=".$_POST['login'].""))echo "erorr";
elseif ($connect->query("SELECT password WHERE password=".$_POST['password'].""))echo "erorr";
else {

$connect->query("INSERT INTO users 
                            VALUES ('','$_POST['name']','$_POST['sname']','$_POST['login']','$_POST['password']') ");
  
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

    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/result.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <div class="container">  
    </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
          <img src="/img/gagarin2.png" class="gagarin" alt="">
        </div>
      </div>
    </div>
      
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
          <a class="btn" href="/">на главную</a>
          <a class="btn" href="/profile">к своему профилю</a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
        <h3 id="title">
        <?php echo "вы успешно зарегистрировались !"; ?>
        </h3>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>