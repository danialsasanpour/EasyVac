<!DOCTYPE html>     
<!-- Felipe, Triana
     Description: Project
	 Date: Feb 2022        -->
<html lang="en"> 
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
   <title>Home</title>
 
   <style>
   header{
	background-color: black;  background-repeat: no-repeat; height:100%; background-size: cover; background-image: linear-gradient(black,black,#003d4d, white)}
   h1 { text-shadow: 1px 1px 2px white, 0 0 20px white, 0 0 5px darkblue; text-align:center ; color:white}
      h2 { text-shadow: 1px 1px 2px white, 0 0 20px white, 0 0 5px darkblue; text-align:center ; color:white}
    .php::first-letter{ font-size: 150%;   color: red; }
   label {color:white}
   .logo {box-shadow: 1px 1px 2px black, 0 0 20px blue, 0 0 5px darkblue}
 .box{	
	float:left;	width:33.3%;padding:10px;text-align:center;box-sizing:border-box;}

.box img{
	height:110px;}
	
	.box6{	
	float:left;	width:16.0%;text-align:center;box-sizing:border-box;}

	.box6 img{
	height:140px;}


.container{ 
	width:100%;margin:auto;overflow:hidden;}
.options{float:left}
#nav ul{
	float:right;
	padding:1px 0;
	list-style:none;
}

#nav ul li{
	display:inline; 
}

#nav ul li a{
	
	text-decoration:none;
	font-size:25px;
	
	padding-right:35px;padding-left:30px;
	text-shadow: 1px 1px 2px black, 0px 0 20px black, 0 0 5px darkblue; text-align:center ; 
	
}
		a:link { color: white}
		a:visited {color: white;background-color: transparent; text-decoration: none;}
		a:hover {color: darkblue; background-color: transparent; text-decoration: underline;}
        a:active {color: blue; background-color: transparent; text-decoration: underline;}
#boxes{	
	margin-top:20px;}

.box{	
	float:left;	width:50%;padding:5px;text-align:center;box-sizing:border-box;}

.box img{
	height:110px;}		
.date{font-size:18px}
.buttonsearch{margin-left:100px; 
background-color: #009999; color: white; padding: 15px 32px; text-align: center;
  font-size: 20px }
  .buttonsearch:hover {
  background-color: white;
  color: #009999;
}
.footlinks { 
	color:white; text-shadow: 1px 1px 2px black, 0 0 20px blue, 0 0 5px darkblue;font-family:serif}
#aside{
	float:center;
	width: 25%;
	padding:10px;
	box-sizing:border-box;
	margin:50px;
	
	background-image: linear-gradient(black,  #003d4d , white); opacity:0.7;
	color:white;
	margin-top:20px;
}
.halfleft{
	float:left;
	width: 40%;
	padding:5px;
	box-sizing:border-box;
	margin-left:150px;
	
	background-image: linear-gradient(white,   #ccffff , white); opacity:0.8;
	color:black;
	margin-top:1px;
}
#halfright{
	float:left;
	width: 30%;
	padding:5px;
	box-sizing:border-box;
	margin:50px;
	
	background-image: linear-gradient(white,  #ccffff , white); opacity:0.4;
	color:white;
	margin-top:1px;
}
#footer{	
	background-color:black; color:white; border-bottom:1px solid #00001a; background-image: linear-gradient(black, black, #003d4d ,black, black,black);
	text-align:center;padding:20px;}
   </style>
   
 </head>
 <body style="background-image: url(../img/a.jpg);  background-repeat: no-repeat; background-size: cover">
			<br>
			<header>
			
			<div class="container" id="top" style="opacity:0.9">
				<img src="../img/logoev.png" alt="logo" style="height:140px; float:left; opacity:0.9">
				<br><br>
				<h1> Best price, Best plan...   BEST EXPERIENCE</h1>
				
				
			</div>
			
			</header>
			
			
			
			<br>
			<label id="demo" class="date"></label><br>
			<label id="demo1" class="date"></label>
			
			   
			<br><br><br>
			<div id="nav">
				<ul>
						
						<li><a href="./Home.php" target="Content_Frame">Home </a></li>
						<li><a href="./Destinations.php" target="Content_Frame">Destinations </a></li>
						<li><a href="./Activities.php" target="Content_Frame">Activities </a></li>
						<li><a href="./Form.php" target="Content_Frame">Make Your Plan</a></li>
						<li><a href="./AboutUs.php" target="Content_Frame">About Us </a></li>
						
						
				</ul>
			</div>
			<div id="aside">
				
				<h2 style="text-align:left">  Ready to... </h2>
				<h2>
				<span style="color:#009999; font-size: 40px;">P</span>
				<span style="color:white">lan a</span>
				<span style="color:#009999; font-size: 40px;">H</span>
				<span style="color:white">oliday</span>
				<span style="color:#009999; font-size: 40px;">P</span>
				<span style="color:white">ackage</span>
				</h2>
			
			
			
			
			<br>
			
				 
			   <input type="button" class="buttonsearch" onclick="location.href='./Form.php'" value="MAKE YOUR PLAN">
			   
				<h3>Follow us on:</h3>
				<div >
					<a href="https://www.facebook.com/" target="blank" >
					<img src="../img/facebook1.ico" class="social" alt="facebook"/>
					</a>
					<a href="https://www.instagram.com/chehrehofficial/?hl=en" target="blank">
					<img src="../img/instagram1.ico" class="social" alt="instagram"/>
					</a>
					<a href="https://twitter.com/home" target="blank">
					<img src="../img/twitter1.ico" class="social" alt="twitter"/>
					</a>
				</div>
			</div>
			
			<div>
				<div class="halfleft">
					<h1 style="color:#009999;">Offers</h1>
					<ul style="color:#009999;font-size:25px">
						<li>Discount according to the number of activities/nights</li>
						<li>Discount gift card for your flights</li>
						<li>Discount gift card when you book hotels</li>
						<li>Transport to all the activities available</li>
						<li>Accident insurance</li>
					</ul>
				</div>
				<div id="halfright">
					<h1 style="color:#00141a;font-size: 300%;">$349</h1>
					<h2 style="color:#00141a;">Skydiving Montreal</h2>
					<h2 style="color:darkblue;">more information</h2>
				</div>
				<div class="halfleft">
					<h1 style="color:#009999;">Our top Five</h1>
					<ul style="color:#009999;font-size:25px">
						<li>Dog Sled Tour</li>
						<li>Boat Tour Niagara</li>
						<li>Skydiving Montreal</li>
						<li>Whale tour Victoria</li>
						<li>Wonderland Toronto</li>
					</ul>
						
					
				</div>
				<div id="halfright">
					<h1 style="color:#00141a;font-size: 300%;">$119</h1>
					<h2 style="color:#00141a;">Helicopter Tour Over Toronto </h2>
					<h2 style="color:darkblue;">more information</h2>
				</div>
				<div class="halfleft">
					<h1 style="color:#009999;">Destinations</h1>
					<ul style="color:#009999;font-size:25px">
					
					
					
						<?php 
						
						//Displaying the list of Destinations on the Home Page when first loaded
						
						
						  require_once '../classes/dbConfig.php';
						  require_once '../classes/City.cls.php';
						  
						  $connection=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
						  
						  $city=new City();
						  $listOfCities=unserialize($city->getAllCities($connection));
						  foreach($listOfCities as $oneCity){
						      echo "<a href='Destinations.php#".$oneCity->getCityName()."'><li>".$oneCity->getCityName()."</li></a>";
						  }
						  
						?>
					<!--  
						<li>Toronto</li>
						<li>Niagara</li>
						<li>Montreal</li>
						<li>Victoria</li>
						<li>Banff</li>
					</ul>
					-->
					
				</div>
				<div id="halfright">
					<h1 style="color:#00141a;font-size: 300%;">$79</h1>
					<h2 style="color:#00141a;">Canyon Icewalk  </h2>
					<h2 style="color:darkblue;">more information</h2>
				</div>
				
			</div>
			
			<br><br><br><br><br>
			<div class="container">
				<div class="box6">
					<img src="../img/niagara1.gif" alt="niagara">
				</div>
				<div class="box6">
				<img src="../img/dogs.gif" alt="dogs">
					
				</div>
				<div class="box6">
					<img src="../img/banff.gif" alt="banff">
				</div>
				<div class="box6">
					
					<img src="../img/churchill.gif" alt="churchill">
				</div>
				<div class="box6">
					<img src="../img/montreal1.gif" alt="montreal">
				</div>
				<div class="box6">
					<img src="../img/toronto1.gif" alt="toronto">
				</div>
  
  
  
			</div>
			<!-- services -->
		<section id="boxes">
			<div>
				<div class="box">
					
					<h2 class="footlinks" >2000, Sainte-Catherine Street West</br>Montréal, Québec H3H 2T1</h2>
					
				</div>
				<div class="box">
					
					<h2 class="footlinks" >Call us:</br>+1(514) 939-2006</h2>
					
				</div>
				
			</div>
		</section>
		<div id="footer">
			<p>Copyright &copy; 2022- Designed by EasyVac Inc.</p>
		</div>
	  <script>
		const d = new Date();
		document.getElementById("demo").innerHTML = d.toDateString();
		document.getElementById("demo1").innerHTML = d.toLocaleTimeString();
	  </script>
			
 
		
 </body>
</html>