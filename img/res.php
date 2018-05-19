<!DOCTYPE html>
<html lang="ru">
  <head>
  <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>STARSOFT</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body id="resultation">
      
      <img src="img/resbg.jpg" alt="" width="100%">
      
      
    <?php 
    
    $connect = new mysqli('localhost','046676100_1','2091golf','j691714_lid');
      if(isset($_POST['name'])){
      if(!empty($_POST['name'])){
      if(!empty($_POST['bank'])){
      if(!empty($_POST['tel'])){
      if(!empty($_POST['email'])){
        $connect->query("INSERT INTO lids  
        VALUES ('','".$_POST['name']."','".$_POST['tel']."','".$_POST['email']."','".$_POST['bank']."')");


        $result =  $connect->query("SELECT * FROM lids where phone = '".$_POST['tel']."'");
        $row= $result->fetch_assoc();
        $connect->query("INSERT INTO tracking VALUES ('','обработка','','')");
        echo '        
          <div class="container">
          <div class="row">
            <div class="col-md-7"><a href="index.php"><img src="img/back.png" id="back"></a></div>
            <div class="col-md-5 infos">
              <h3 class="info">номер заказа :'.$row["ID"].'</h3>
              <h3 class="info">почта : '.$row["email"].'</h3>
              <h3 class="info">сумма : '.$row["bank"].' р.</h3>
              <h3 class="remeber">Запомните номер заказа для его отcлежки у нас на сайте !!!</h3>
              <a href="pay.php" class="pay" id="rent">оплатить сейчас</a>
            </div>
          </div>
        </div>';


                }else echo "string1";
              }else echo "string2";
            }else echo "string3";
          }else echo "string4";
        }else echo "string5";
     ?>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>
