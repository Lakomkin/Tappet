
<?php $i=1; 
$connect = new mysqli('localhost','046676100_1','2091golf','j691714_lid');

 ?>
 <!DOCTYPE html>
<html lang="ru">
  <head>
  <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <meta name="yandex-verification" content="37b79d5840c58ff1" />
    <meta name="google-site-verification" content="4q9M39ooBJc9u6AxPlss7WYeIwHf2y2C-5umf6tDZBU" />
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
  <body>
  <header>
    <div class="container">
       <div class="row">
         <div class="col-md-10 hidden-xs">
           <h4 id="nav">
             <a href="#offers">товары</a>
             <a href="#consist">комплект</a>
             <a href="#FAQ">инструкция</a>
             <a href="#about">о нас</a>
             <a href="tracking.php">отследить заказ</a>
            </h4>
         </div>
         <div class="col-xs-12 visible-xs bar ">
           <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/bars.png" alt=""></a>

           <ul class="dropdown-menu" aria-labelledby="dLabel"">
             <li><a href="#offers">товары</a></li>
             <li><a href="#consist">комплект</a></li>
             <li><a href="#FAQ">инструкция</a></li>
             <li><a href="#about">о нас</a></li>
             <li><a href="tracking.php">отследить товар</a></li>
           </ul>
           <span id="networks">
           <a href=""><img src="img/twitter.png" class="soc" alt=""></a>
           <a href="https://www.instagram.com/star.soft/"><img src="img/insta.png" class="soc" alt=""></a>
           <a href="https://www.google.ru"><img src="img/vk.png" class="soc" alt=""></a>
           </span>
         </div>

         <div class="col-md-2 nets hidden-xs"> 
         <a href=""><img src="img/twitter.png" class="soc" alt=""></a>
         <a href="https://www.instagram.com/star.soft/"><img src="img/insta.png" class="soc" alt=""></a>
         <a href="https://vk.com/public146239806"><img src="img/vk.png" class="soc" alt=""></a>  </div>
       </div>
      <div class="row">
        <div class="col-md-6"><h1 id="force">чувстувую силу в тебе!</h1></div> 
      </div>
      <div class="row"><h2 id="path">переходи на сторону <br>джедаев с мощным пк</h2></div>
      <div class="row"><button id="rent" data-toggle="modal" data-target="#mypr">заказать</button> <h2 id="phone">т. 8-906-964-43-73</h2> </div>
     </div> 
  
  
  <section id="offers">
    
    <div class="container">
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2"><img src="img/01.png" class="img-responsive center-block" alt=""></div>
        <div class="col-md-5"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><a name="offers"></a><h1 id="offer">наши предложения</h1></div>
        <div class="col-md-4"></div>
      </div>
      <div class="col-md-5"></div>
      <div class="col-md-2"><img src="img/stick.png" class="center-block img-responsive" alt=""></div>
      <div class="col-md-5"></div>
    </div>
    
    <div class="container layer2 visible-xs">
    <!--_______________________DELETE IT ________________________-->
      <span id="first_row" >
      <div class="row ">
        <div class="col-xs-6"><img src="img/card1_m.png" class="img-responsive" alt=""></div>
        <div class="col-xs-6"><img src="img/card2_m.png" class="img-responsive" alt=""></div>
      </div>

      <div class="row">
        <div class="col-xs-6"><h3 id="title">штурмовик</h3></div>
        <div class="col-xs-6"><h3 id="title">чубака</h3></div>
      </div>

      <div class="row">
        <div class="col-xs-6"><h3 id="price">8 000р-20 000р</h3></div>
        <div class="col-xs-6"><h3 id="price">20 000р-40 000р</h3></div>
      </div>

      <div class="row">
        <div class="col-xs-6"><a data-toggle="modal" data-target="#8-20"><img src="img/btn.png" id="btn" class="center-block" alt=""></a></div>
        <div class="col-xs-6"><a data-toggle="modal" data-target="#20-40"><img src="img/btn.png" id="btn" class="center-block" alt=""></a></div>
      </div>
      </span>



      <span id="second_row" >
      <div class="row">
        <div class="col-xs-6"><img src="img/card3_m.png" id="card" class="img-responsive" alt=""></div>
        <div class="col-xs-6"><img src="img/card4_m.png" id="card" class="img-responsive" alt=""></div>
      </div>

      <div class="row">
        <div class="col-xs-6"><h3 id="title">дарт вейдер</h3></div>
        <div class="col-xs-6"><h3 id="title">мастер йода</h3></div>
      </div>

      <div class="row">
        <div class="col-xs-6"><h3 id="price">40 000р-60 000р</h3></div>
        <div class="col-xs-6"><h3 id="price">своя цена</h3></div>
      </div>

      <div class="row ">
        <div class="col-xs-6"><a data-toggle="modal" data-target="#40-60"><img src="img/btn.png" id="btn" class="center-block" alt=""></a></div>
        <div class="col-xs-6"><a data-toggle="modal" data-target="#mypr"><img src="img/btn.png" id="btn" class="center-block" alt=""></a></div>
      </div>
      </span>
   </div>
    <!--_______________________DELETE IT ________________________-->
    
    <div class="container layer hidden-xs ">

      <div class="row">
        <div class="col-md-3"><img src="img/card1.png" class="img-responsive" alt="card"></div>
        <div class="col-md-3"><img src="img/card2.png" class="img-responsive" alt="card"></div>
        <div class="col-md-3"><img src="img/card3.png" class="img-responsive" alt="card"></div>
        <div class="col-md-3"><img src="img/card4.png" class="img-responsive" alt="card"></div>
      </div>

      <div class="row OZ">
        <div class="col-md-3"><h3>штурмовик</h3></div>
        <div class="col-md-3"><h3>чубака</h3></div>
        <div class="col-md-3"><h3>дарт вейдер</h3></div>
        <div class="col-md-3"><h3>мастер йода</h3></div>
      </div>

      <div class="row OZ">
        <div class="col-md-3 pr"><h3>8 000р-20 000р</h3></div>
        <div class="col-md-3 pr"><h3>20 000р-40 000р</h3></div>
        <div class="col-md-3 pr"><h3>40 000р-60 000р</h3></div>
        <div class="col-md-3 pr"><h3>своя цена</h3></div>
      </div>

      <div class="row OZ ">
        <div class="col-md-3 btn"><a data-toggle="modal" data-target="#8-20" alt=""><img src="img/btn.png" alt=""></a></div>
        <div class="col-md-3 btn"><a data-toggle="modal" data-target="#20-40" alt=""><img src="img/btn.png" alt=""></a></div>
        <div class="col-md-3 btn"><a data-toggle="modal" data-target="#40-60" alt=""><img src="img/btn.png" alt=""></a></div>
        <div class="col-md-3 btn"><a data-toggle="modal" data-target="#mypr" alt=""><img src="img/btn.png" alt=""></a></div>
      </div>

    </div>
  </section>
  
  <section id="consist">
    <img src="img/saber.png" alt="" width="100%">
   <div class="container">
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2"><img src="img/02.png"  alt=""></div>
        <div class="col-md-5"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><a name="consist"></a><h1 id="cons">комплект</h1></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-12"></div>
      </div>
    </div>

    

    <div class="container">
      <div class="row">
        <div class="col-md-8"><h1 id="bonus">получи бонус при <br> покупке наших компьютеров</h1></div>
        <div class="col-md-4"></div>
      </div>

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><h1 id="get">вы получите!</h1></div>
        <div class="col-md-4"></div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <h3 id="list">1. Сборку вашего пк <br>
          <br>2. Видео тест компьютера при больших нагрузках <br>
          <br>3. Сертификат джедая и бонусы!
          </h3>
        </div>
        <div class="col-md-4"><img src="img/pc.png" class="center-block" alt=""></div>
      </div>

    </div>
  </section>

  <section id="FAQ">
    <div class="container">
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2"><img src="img/03.png" class="center-block" alt=""></div>
        <div class="col-md-5"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><a name="FAQ"></a><h1 id="fq">как купить?</h1></div>
        <div class="col-md-4"></div>
      </div>
      <div class="col-md-5"></div>
      <div class="col-md-2"><img src="img/stick.png" class="center-block" alt="pc"></div>
      <div class="col-md-5"></div>
    </div>
    <img src="img/bg1.jpg" alt="" width="100%">
    <!--__________pc____________-->
    <div class="container hidden-xs">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
          <h2 id="one"><img src="img/1.png" align="left" alt="">
          <span id="upcs">сделайте заказ</span><br>
          <br>Заказ должен быть сделан относительно 
          <br>вашего бюджета, нужные компонеты мы 
          <br>подберем сами!</h2>
          </div>
      </div>

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
          <h2 id="two"><img src="img/2.png" align="left" alt="">
          <span id="upcs">получите список деталей</span><br>
          <br>Вы сможите отказаться от определенного 
          <br>компонента если он вас не устраивает</h2>
          </div>
      </div>

      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
          <h2 id="three"><img src="img/3.png" align="left" alt="">
          <span id="upcs">видео тест</span><br>
          <br>Вам будет предоставлен 
          <br>видеотест вашего пк на  
          <br>высоких нагрузках</h2>
          </div>
      </div>

      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
          <h2 id="four"><img src="img/4.png" align="left" alt="">
          <span id="upcs">получите заказ</span><br>
          <br>Пк будет выслан нами по почте  
          <br>на ваш выбор, с фирменными
          <br>ПРИЗАМИ !</h2>
          </div>
      </div>
    </div>
    <!--__________pc____________-->
    <!--__________mobile____________-->
    <div class="container visible-xs">
      <div class="row">
        <div class="col-xs-2"><img src="img/1.png" alt="one"></div>
        <div class="col-xs-10"><h6 id="fst"><span id="upcs">получиет заказ</span>
          <br>Пк будет выслан нами по почте  
          <br>на ваш выбор, с фирменными
          ПРИЗАМИ !</h6></div>
      </div>
      <div class="row">
        <div class="col-xs-2"><img src="img/2.png" alt="two"></div>
        <div class="col-xs-10"><h6 id="scd"><span id="upcs">получите список деталей</span>
          <br>Вы сможите отказаться от определенного 
          <br>компонента если он вас не устраивает</h6>
          </div></div>
      
      <div class="row visible-xs">
        <div class="col-xs-2"><img src="img/3.png" alt="three"></div>
        <div class="col-xs-10"><h6 id="trd"><span id="upcs">видео тест</span>
          <br>Вам будет предоставлен 
          видеотест вашего <br>пк на  
          высоких нагрузках</h6></div>
      </div>
      <div class="row visible-xs">
        <div class="col-xs-2"><img src="img/4.png" alt="four"></div>
        <div class="col-xs-10"><h6 id="fth"><span id="upcs">получиет заказ</span>
          <br>Пк будет выслан нами по почте  
          на ваш <br>выбор, с фирменными
          ПРИЗАМИ !</h6></div>
      </div>
    </div>
    </div>
    <!--__________mobile____________-->
  </section>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2"><img src="img/04.png" class="center-block" alt=""></div>
        <div class="col-md-5"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><a name="about"></a><h1 class="ab" >о нас</h1></div>
        <div class="col-md-4"></div>
      </div>
      <div class="col-md-5"></div>
      <div class="col-md-2"><img alt="stick4" src="img/stick.png" class="center-block"></div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-9"><h2 id="guide">Что такое StarSoft? Ответ очень прост! <br> StarSoft - это команда квалифицированных 
            и <br> опытных специалистов ,которые готовы подобрать <br>идеальную сборку, 
              она подойдет именно вам.<br> </h2> </div>
        <div class="col-md-3"><img src="img/hp.png" id="hp" alt="hp"></div>
      </div>
      </div>
      <!--__________pc________-->
      <div class="container hidden-xs">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6"><h1>почему следует брать <br> у нас?</h1></div>
        <div class="col-md-3"></div>
      </div>
      <div class="row">
        <div class="col-md-4"><h2 align="center">быстрая доставка</h2></div>
        <div class="col-md-4"><h2 align="center">дешевые цены</h2></div>
        <div class="col-md-4"><h2 align="center">подойдет для всех</h2></div>
      </div>
    </div>
    <img src="img/jedis.jpg" class="hidden-xs" alt="" width="100%">
    <div class="container advantage hidden-xs">
      <div class="row">
        <div class="col-md-4"><h3>Доставка любым спосбом <br> почта России  и другие<br> транспортные компании </h3></div>
        <div class="col-md-4"><h3>Мы работаем с производителями  напрямую! Поэтому мы  можем <br>гарантировать лучшие цены  </h3></div>
        <div class="col-md-4"><h3>Клиент всегда прав! <br> Это важно для нас, поскольку мы стремимся обеспечить вас лучшим обслуживанием, проявить внимание к мелочам</h3></div>
      </div>
    </div>
    
    <!--__________pc________-->
    <!--__________mobile________-->
    <div class="container visible-xs why">
      <div class="row">
        <div class="col-md-12"><h1>Быстрая доставка</h1></div>
      </div>
      <img src="img/mobile_rey.jpg" alt="rey" width="100%">
      <div class="row">
        <div class="col-md-12">
          <h3>Доставка любым спосбом почта России  и другие транспортные компании </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"><h1>Дешевые цены</h1></div>
      </div>
      <img src="img/mobile_kylo.jpg" alt="kylo" width="100%">
      <div class="row">
        <div class="col-md-12">
          <h3>Мы работаем с производителями  напрямую! Поэтому мы  можем гарантировать лучшие цены</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"><h1>подойдет для всех</h1></div>
      </div>
      <img src="img/mobile_luke.jpg" alt="luke" width="100%">
      <div class="row">
        <div class="col-md-12">
          <h3>Клиент всегда прав! Это важно для нас, поскольку мы стремимся обеспечить вас лучшим обслуживанием, проявить внимание к мелочам</h3>
        </div>
      </div>
    </div>
    <!--__________mobile________-->
  </section>
<img src="img/bg2.jpg" alt="" id="bcg" width="100%">
  <footer>
    

    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <span id="networks">
        <img src="img/fb2.png" alt="">
        <img src="img/insta2.png" alt="">
        <img src="img/vk2.png" alt=""></div>
        </span>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><h3 id="post">cema.kuznetsov@mail.ru</h3></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><h3 id="tel">+7 906 964 43 73</h3></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><h3 id="voskl">заказыватйе у нас!!!</h3></div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </footer>
</header>



<!--__________MODALS_________-->
  <!--__________своя цена_________-->
    <div class="modal fade" id="mypr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title center-block" id="myModalLabel">ЗАКАЗ</h4>
          </div>
          <div class="modal-body">
            <form action="res.php" method="post">
              <input type="text" name="name" class="center-block" placeholder="Фамилия,Имя"><br>
              <input type="text" name="tel" class="center-block" placeholder="Телефон"><br>
              <input type="text" name="email" class="center-block" placeholder="E-mail"><br>
              <img src="img/MYPR.jpg" alt=""><br>
              <input type="text" name="bank" class="center-block" placeholder="Бюджет"><br>
              <input type="submit" value="Сделать заказ" class="btn btn-primary center-block">
            </form>
            <a href="guide.php" id="guide">Подробнее ></a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" class="center-block" data-dismiss="modal">Закрыть</button>
            
          </div>
        </div>
      </div>
    </div>
    <!--__________8-20_________-->
    <div class="modal fade" id="8-20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title center-block" id="myModalLabel">ЗАКАЗ</h4>
          </div>
          <div class="modal-body">
            <form action="res.php" method="post">
              <input type="text" name="name" class="center-block" placeholder="Фамилия,Имя"/><br>
              <input type="text" name="tel" class="center-block" placeholder="Телефон"/><br>
              <input type="text" name="email" class="center-block" placeholder="E-mail"/><br>
              <img src="img/8PC.jpg" alt=""><br>
              <label id="amount1" class="amount">14000</label><label>- рублей</label>
              <input type="range" name="bank" class="center-block" min="8000" step="500" max="20000" value="14000" 
              onchange="showAmount1(this.value)" 
              oninput="showAmount1(this.value)">
              <input type="submit" value="Сделать заказ" class="btn btn-primary center-block"/>
                  <script>
                  function showAmount1(newAmount1)
                  {
                    document.getElementById("amount1").innerHTML = newAmount1;
                  }
                </script>
            </form>
            <a href="guide.php" id="guide">Подробнее ></a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" class="center-block" data-dismiss="modal">Закрыть</button>
            
          </div>
        </div>
      </div>
    </div>
    <!--__________20-40_________-->
    <div class="modal fade" id="20-40" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title center-block" id="myModalLabel">ЗАКАЗ</h4>
          </div>
          <div class="modal-body">
            <form action="res.php" method="post">
              <input type="text" name="name" class="center-block" placeholder="Фамилия,Имя"/><br>
              <input type="text" name="tel" class="center-block" placeholder="Телефон"/><br>
              <input type="text" name="email" class="center-block" placeholder="E-mail"/><br>
              <img src="img/20PC.jpg" alt=""><br>
              <label id="amount2" class="amount">30000</label><label>- рублей</label>
              <input type="range" name="bank" class="center-block" min="20000" step="500" max="40000" value="30000" 
              onchange="showAmount2(this.value)" 
              oninput="showAmount2(this.value)">
              <input type="submit" value="Сделать заказ" class="btn btn-primary center-block"/>
                  <script>
                  function showAmount2(newAmount2)
                  {
                    document.getElementById("amount2").innerHTML = newAmount2;
                  }
                </script>
            </form>
            <a href="guide.php" id="guide">Подробнее ></a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" class="center-block" data-dismiss="modal">Закрыть</button>
            
          </div>
        </div>
      </div>
    </div>
    <!--__________40-60_________-->
    <div class="modal fade" id="40-60" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title center-block" id="myModalLabel">ЗАКАЗ</h4>
          </div>
          <div class="modal-body">
            <form action="res.php" method="post">
              <input type="text" name="name" class="center-block" placeholder="Фамилия,Имя"/><br>
              <input type="text" name="tel" class="center-block" placeholder="Телефон"/><br>
              <input type="text" name="email" class="center-block" placeholder="E-mail"/><br>
              <img src="img/40PC.jpg" alt=""><br>
              <label id="amount3" class="amount">50000</label><label>- рублей</label>
              <input type="range" name="bank" class="center-block" min="40000" step="500" max="60000" value="50000" 
              onchange="showAmount3(this.value)" 
              oninput="showAmount3(this.value)">
              <input type="submit" value="Сделать заказ" class="btn btn-primary center-block"/>
                  <script>
                  function showAmount3(newAmount3)
                  {
                    document.getElementById("amount3").innerHTML = newAmount3;
                  }
                </script>
            </form>
            <a href="guide.php" id="guide">Подробнее ></a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" class="center-block" data-dismiss="modal">Закрыть</button>
            
          </div>
        </div>
      </div>
    </div>
<!--__________MODALS_________-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>