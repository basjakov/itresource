<!DOCTYPE html>
<html>
<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>itresources</title>
    <meta name="Description" content="Վեբ ծրագրավորման դասընթացեր։Դարձեք մրցունակ մասնագետ անցեք պրակտիկա և եղեք մեկ քայլ առաջ ">
    <meta name="Keywords" content="Այթի ռեսուրս,ծրագրավորման դասընթացներ,տտ դասընթացներ,պրակտիկա,ծրագրավորում">



    <!--recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <link rel="shortcut icon" href="img/favicon.ico" />

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <!--bootstrap-->

    <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap-grid.min.css"  crossorigin="anonymous">


    <!--css-->

    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/default.css"/>
    <link type="text/css" rel="stylesheet" href="css/overlay.css">

    <link type="text/css" rel="stylesheet" href="css/style.css">

    <script src="js/script.js"></script>
      <script src="js/modernizr.custom.js"></script>

</head>
<body onLoad="ChangeCaptcha()">
   

    
 <header>
     <h2 class="navbar-brand brand-name">
         <a href="index.php">
            <img class="img-responsive2"       
           src="img/logo/logo.png"  style="max-width:211px;margin-left:52px; position: fixed;"></a>
       </h2>

            <div class="toggle-button" id="toggle" style="z-index: 5000;">
                
                <span class="bar top"></span>
                <span class="bar middle"></span>
                <span class="bar bottom"></span>
            </div>
        </div>
 <nav  class="overlay menu" id="overlay" style="z-index: 1000;">

  <div class="container">

      <ul class="row" >
       <span class="col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
          <ul>
            <h1 class="page_title">itresources</h1>
            <li><a href="index.php#about" class="menu_item">About us</a></li>
            <li><a href="index.php#services" class="menu_item">Services</a></li>
            <li><a href="index.php#portfolio" class="menu_item">Portfolio</a></li>
            <li><a href="index.php#team" class="menu_item">team</a></li>
          </ul>
       </span>
        <span class="col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
          <ul>
            <li><a href="training.php" class="menu_item">training</a></li>
            <li><a href="index.php#contact" class="menu_item">contact</a></li>
          </ul>
       </span>
       
       <span class="col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
         <li class="text-right" style="font-size:25px;">info@itresources.am</li>
         <li class="text-right" style="font-size:25px;">+37495 88 33 66</li>
         <li class="text-right" style="font-size:25px;">Yerevan  st. Hakob hakobyan</li>
          <div class="text-right">
              <i class="fa fa-facebook" aria-hidden="true"><a href="https://www.facebook.com/ITResources.ru/"></a></i>
              <i class="fa fa-instagram" aria-hidden="true"><a href="#"></a></i>     
         </div>   
       </span>

  
      </ul>
     </div>

</nav>
 </header>
</div>
<h1 class="page_title">training</h1>
<div class="container" >
    <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                Subjects taught during the course include HTML5, CSS3, jQuery, Javascript, PHP , MSQL, AJAX, WORDPRESS, LARAVEL and their most popular frameworks. After completing the course you will be able to create any responsive website. We offer both group and individual classes. The classes are held by highly qualified instructors.
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8s col-lg-8">
                    <form action="" method="post">
                      <?php
                        include "sendrequest.php";
                      ?>
                            <input type="text" name="name" placeholder="name">
                            <input type="text" name="lastname" placeholder="Last name">
                            <input type="email" name="email" placeholder="Email">
                            <input type="tel" name="tel" placeholder="phone">
                            <input type="text" name="time" placeholder="timeline graphic">
                            <label>Individual</label>
                            <input type="checkbox" name="priv" placeholder="individual"></br>
                            <label>group training</label>
                            <input type="checkbox" name="grup" placeholder="group training"></br>
                            <textarea rows="4" cols="50" name="msg" class="input-xxlarge" style="margin: 18px 21.9844px 0px 0px; width: 300px; height: 199px;">
                                
                            </textarea></br>

                            <label>What do you want to learn you wont learning</label></br>
              
                            <input type="checkbox" name="first" >
                            <label>first lavel html(5),css(3)</label></br>

                            <input type="checkbox" name="second">
                            <label>second lavel JavaScript, JQuery, Bootstrap</label></br>
                            <input type="checkbox" name="thred">
                            <label>thred lavel PHP, MySQL, OOP,basic  knowlange framework</label></br>
                           
            <div class="g-recaptcha" data-sitekey="6Ld3ZUMUAAAAAMqpVec-OGtBG9qQO2zkWfEAmPom" style="margin:0.2em;"></div>
             
            <input type="submit" id="submit" name="click" value="Send request" style="margin-top:20px;" onclick="check()">  
            </form>
            </div>
    </div>
</div>
<!--libary js -->

<script src="js/jquery-3.1.1.min.js"  crossorigin="anonymous"></script>

<script src="js/tether.min.js" crossorigin="anonymous"></script>

<script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>

<script  src="js/overlay.js"></script>
  <!-- // -->
<script src="js/toucheffects.js"></script>

</body>