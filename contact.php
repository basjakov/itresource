<!DOCTYPE html>
<html>
<head>
	<title>Itresource</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">


 
<style type="text/css">
  
  #randomfield { 
-webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; 
  width: 200px;
  color: black;
  border-color: black;
  text-align: center;
  font-size: 40px;
  background-image: url('http://4.bp.blogspot.com/-EEMSa_GTgIo/UpAgBQaE6-I/AAAAAAAACUE/jdcxZVXelzA/s1600/ca.png');
}

</style>

 <link rel="shortcut icon" href="img/favicon.ico" />


  <!-- Fonts -->

 

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
   <link rel="stylesheet" href="css/font-awesome.min.css">


</head>
<body onLoad="ChangeCaptcha()">

<div id="home">
	<script src="js/three.min.js"></script>
	<script src="js/Projector.js"></script>
	<script src="js/CanvasRenderer.js"></script>
	<script src="js/script.js"></script>
  <script src="js/modernizr.custom.js"></script>
   <header>

  
     <h2 class="navbar-brand brand-name">
         <a href="index.php">
            <img class="img-responsive2"       
           src="img/logo/logo.png"  style="max-width:211px;margin-left:52px; position: fixed;"></a>
       </h2>

            <div class="toggle-button" id="toggle">
                
                <span class="bar top"></span>
                <span class="bar middle"></span>
                <span class="bar bottom"></span>
            </div>
        </div>
 <nav  class="overlay menu" id="overlay">

  <div class="container-fluid">

      <ul class="row">
       <span class="col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
          <ul>
            <li><a href="aboutus.php" class="menu_item">About us</a></li>
            <li><a href="services.php" class="menu_item">Services</a></li>
            <li><a href="portfolio.php" class="menu_item">Portfolio</a></li>
            <li><a href="team.php" class="menu_item">team</a></li>
          </ul>
       </span>
        <span class="col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
          <ul>
            <li><a href="#" class="menu_item">training</a></li>
            <li><a href="contact.php" class="menu_item">contact</a></li>
          </ul>
       </span>
       
       <span class="col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
         <li class="text-right" style="font-size:25px;">info@itresource.am</li>
         <li class="text-right" style="font-size:25px;">+37495 88 33 66</li>
         <li class="text-right" style="font-size:25px;">Yerevan  st. Hakob hakobyan</li>
         <i class="fa fa-facebook" aria-hidden="true"><a href="https://www.facebook.com/ITResources.ru/"></a></i>
         <i class="fa fa-instagram" aria-hidden="true"><a href="#"></a></i>     
       </span>

  
      </ul>
     </div>

</nav>
 </header>
</div>
</div>

<div id="contact">
	<h1 class="page_title">Contact</h1>
	<div class="container-fluid">
		<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
					<iframe class="contact_form" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380.92741777213473!2d44.491209831248064!3d40.1997340373027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd6bbf260be5%3A0xfcd60dca516cdb29!2sMergelyan+Institute!5e0!3m2!1sen!2s!4v1516914980238" style="width:130%;height:490px;" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
          <ul style="color: #FFFFFF;">
    				 <li class="text-right" style="font-size:15px;list-style-type: none;">info@itresource.ru</li>
             <li class="text-right" style="font-size:15px;list-style-type: none;">+37495 88 33 66</li>
             <li class="text-right" style="font-size:15px;list-style-type: none;">Yerevan  st. Hakob hakobyan</li>
          </ul>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <?php
            include "sendmail.php";
          ?>
					<form action="" method="POST">
	

						<input type="text" name="name" placeholder="your name">
						<input type="text" name="lastname" placeholder="last name">
						<input type="email" name="email" placeholder="your email">
						<input type="text" name="subject" placeholder="subject">
						<input type="tel" name="phone" placeholder="phone">
						<textarea rows="4" cols="50" name="msg" class="input-xxlarge" style="margin: 18px 21.9844px 0px 0px; width: 300px; height: 199px;">     </textarea>
					
            <input type="text" id="randomfield" disabled>
            <br><br>
            <input   id="CaptchaEnter" size="20" maxlength="6" />
            <br><br>  
            <input type="submit"  name="sendmail" value="Send message" style="margin-top:20px;" onclick="check()">    
					</form>
				</div>
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
</html>