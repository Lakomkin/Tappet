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
    <body id="tracking">
    
    <img src="img/tracking_bg.jpg" alt="" width="100%">
    <div class="container par">
      <div class="row">
        <div class="col-md-7">    
        <form action="tracking.php" method="POST">
          <a href="index.php"><img src="img/back2.png" id="back2" width="35px"></a><input type="text" name="ID" class="num" placeholder="Введите номер заказа" >
          <input type="submit" value="ОТСЛЕДИТЬ" class="btn btn-primary ">
        </form>
        </div>
        <div class="col-md-5"></div>
      </div>
    


    <?php 

      $connect = new mysqli('localhost','046676100_1','2091golf','j691714_lid');
      if(isset($_POST['ID'])){
        if(!empty($_POST['ID'])){
          $result =  $connect->query("SELECT * FROM tracking where ID = '".$_POST['ID']."'");
          $row= $result->fetch_assoc();


           if(!empty($row['three'])){
          echo '    
    <div class="row">
      <div class="col-md-8 frame">
        <h2>номер :# <span id="red">'.$row["ID"].'</span> </h2>
        <h3>Статус: <span id="red">'.$row["three"].'</span></h3>
        
      </div>  
      <div class="col-md-4"></div>
    </div>';}

          if(!empty($row['two'])){
          echo '    
    <div class="row">
      <div class="col-md-8 frame">
        <h2>номер :# <span id="red">'.$row["ID"].'</span> </h2>
        <h3>Статус: <span id="red">'.$row["two"].'</span></h3>
        
      </div>  
      <div class="col-md-4"></div>
    </div>';}

          if(!empty($row['one'])){
          echo '    
    <div class="row">
      <div class="col-md-8 frame">
        <h2>номер :# <span id="red">'.$row["ID"].'</span> </h2>
        <h3>Статус: <span id="red">'.$row["one"].'</span></h3>
        
      </div>  
      <div class="col-md-4"></div>
    </div>';}
        }else echo "не заполнено поле";
      }
     ?>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>
