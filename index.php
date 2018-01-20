<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:200" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:300" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">

	<link rel="stylesheet" href="css/bootstrap-grid.min.css"  crossorigin="anonymous">

	<script src="js/jquery-3.1.1.min.js"  crossorigin="anonymous"></script>

	<script src="js/tether.min.js" crossorigin="anonymous"></script>

	<script src="js/bootstrap.min.js"  crossorigin="anonymous"></script>
	-->
</head>
<body>

<div id="home">
	<script src="js/three.min.js"></script>
	<script src="js/Projector.js"></script>
	<script src="js/CanvasRenderer.js"></script>
	<script src="js/script.js"></script>
  <header>
	<div class="menu">

		<nav class="menu_logo">
						
		</nav>
		<nav class="menu_r">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#team">team</a></li>
					<li><a href="#contact">Contact</a></li>
					
				</ul>	
		</nav>
	   </div>	
   </header>
</div>
<div id="about" style="margin-top:20%;">
	<h3 class="page_title">About</h3>
	<div class="row">
			<div class="right_logo" >
				
			</div>
			<div class="left_about">
			  <p style="color:#FFFFFF;">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like ldus PageMaker including versions of Lorem Ipsum
			</p>
			 <div class="row">
				<button class="button">Web design</button>
				<button class="button">Web development</button>
				<button class="button">Software development</button>
				<button class="button">seo</button>
				<button class="button">Trainings</button>
			</div>
		<br>
		<br>
		<br>
		<br>
			</div>
	</div>
</div>
<div id="portfolio" style="margin-top:20%;">
		<h3 class="page_title">Portfolio</h3>
		<div class="projects">
			<img src="img/portfolio/nla.png" class="project" >
			<img src="img/portfolio/ustudy.png" class="project" >
			<img src="img/portfolio/nla.png" class="project" >
			<img src="img/portfolio/ustudy.png" class="project" >		
		</div>
		<div class="portfolio_right">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like ldus PageMaker including versions of Lorem Ipsum
		</div>
</div>

<div id="team" style="margin-top:20%;">
	<h3 class="page_title">Team</h3>
  <div class="team_r">
	 <div class="memeber">
	 	<img src="img/team/avatar.png">
	 </div>
     <div class="memeber">
     	<img src="img/team/avatar.png">
     </div>
     <div class="memeber">
     	<img src="img/team/avatar.png">
     </div>
  </div>  


<div>
<div id="contact" style="margin-top:20%;">
	<h3 class="page_title">Contact</h3>
	<div class="container">
	  <form action="" method="post">
	     <label for="fname">Name</label>
	     <input type="text" id="fname" name="firstname" placeholder="Your name..">
	     <label for="lname">Last Name</label>
	     <input type="text" id="lname" name="lastname" placeholder="Your last name..">
	     <label for="subject">Subject</label>
	     <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"> 	
	     </textarea>

	      <input type="submit" value="Send Message">
	   </form>
	 </div>
</div>
</body>
</html>