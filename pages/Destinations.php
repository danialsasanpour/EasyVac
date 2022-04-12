<!DOCTYPE html>     
<!-- Felipe, Triana
     Description: Project
	 Date: Feb 2022        -->
<html lang="en"> 
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
   <title>Destinations</title>
 
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
				<h1> Best prices, Best destinations...   EASY VAC</h1>
				
				
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
				<h1>DESTINATIONS</h1>
			</div>
			
			
			
			<div style=" padding:50px; text-align:center; margin:auto; align-items:center;opactity:0.7">
			<h1 style="text-align:center; margin:auto; font-weight:bold; margin-bottom:35px;">Search For A Destination</h2>
			<input type="text" id="searchBar" placeholder="Destination ..." style="padding:9px; width:45%; border:1px solid lightgray;">
			<input type="button" id="go" value="Go" onclick="search()" style="padding:9px; width:9%; background-color:#009999; color:white; border:1px solid black;">
			</div>
			
			
			
			<div>
				<div class="halfleft">
					<h1 style="color:#009999;">TORONTO</h1>
					<ul style="color:#009999;font-size:25px">
						<li><a href="./ActivitiesToronto.html#t1" title="Helicopter Tour Over Toronto" style="color:#006080">Helicopter Tour</a></li>
						<li><a href="./ActivitiesToronto.html#t2" title="Ghost Hunted Tour" style="color:#006080">Ghost Hunted Tour</a></li>
						<li><a href="./ActivitiesToronto.html#t3" title="Toronto Island Tour by Ferry" style="color:#006080">Toronto Island Tour by Ferry</a></li>
						<li><a href="./ActivitiesToronto.html#t4" title="Wonderland Amusement Park" style="color:#006080">Wonderland Amusement Park </a></li>
						
					</ul>
				</div>
				<div id="halfright">
					<img src="../img/toronto111.jpg" style="height:230px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft">
					<h1 style="color:#009999;">MONTREAL</h1>
					<ul style="color:#009999;font-size:25px">
						<li><a href="./ActivitiesMontreal.html#m1" title="Art Galleries / Biodome" style="color:#006080">Art Galleries / Biodome</a></li>
						<li><a href="./ActivitiesMontreal.html#m2" title="Skydiving" style="color:#006080">Skydiving</a></li>
						<li><a href="./ActivitiesMontreal.html#m3" title="Thermal Nordic Spa" style="color:#006080">Thermal Nordic Spa</a></li>
						<li><a href="./ActivitiesMontreal.html#m4" title="Parc Omega Montebello Lodge " style="color:#006080">Parc Omega & Montebello Lodge </a></li>
						
					</ul>
				</div>
				<div id="halfright">
					<img src="../img/montreal111.jpg" style="height:230px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft">
					<h1 style="color:#009999;">NIAGARA</h1>
					<ul style="color:#009999;font-size:25px">
						<li><a href="./ActivitiesNiagara.html#n2" title="Zipline to the falls" style="color:#006080">Zipline to the falls </a></li>
						<li><a href="./ActivitiesNiagara.html#n1" title="Boat Tour" style="color:#006080">Boat Tour</a></li>
						<li><a href="./ActivitiesNiagara.html#n3" title="Night tour-light show " style="color:#006080">Night tour/light show </a></li>
						<li><a href="./ActivitiesNiagara.html#n4" title="Aero car ride " style="color:#006080">Aero car ride </a></li>
					</ul>
				</div>
				<div id="halfright">
					<img src="../img/niagara111.jpg" style="height:230px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft">
					<h1 style="color:#009999;">BANFF</h1>
					<ul style="color:#009999;font-size:25px">
						<li><a href="./ActivitiesBanff.html#b1" title="Dog Sled Tour" style="color:#006080">Dog Sled Tourr</a></li>
						<li><a href="./ActivitiesBanff.html#b2" title="Horse-Drawn Sleigh Ride" style="color:#006080">Horse-Drawn Sleigh Ride</a></li>
						<li><a href="./ActivitiesBanff.html#b3" title="Mountain lakes and waterfalls " style="color:#006080">Mountain lakes and waterfalls </a></li>
						<li><a href="./ActivitiesBanff.html#b4" title="Canyon IceWalk" style="color:#006080">Canyon Icewalk</a></li>
						
					</ul>
				</div>
				<div id="halfright">
					<img src="../img/banff111.jpg" style="height:230px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft">
					<h1 style="color:#009999;">VICTORIA BRITISH COLUMBIA</h1>
					<ul style="color:#009999;font-size:25px">
						<li><a href="./ActivitiesVictoria.html#v1" title="Whale tour" style="color:#006080">Whale tour</a></li>
						<li><a href="./ActivitiesVictoria.html#v2" title="Panoramic tour by seaplane " style="color:#006080">Panoramic tour by seaplane </a></li>
						<li><a href="./ActivitiesVictoria.html#v3" title="Horse Drawn Carriage" style="color:#006080">Horse Drawn Carriage</a></li>
						<li><a href="./ActivitiesVictoria.html#v4" title="Cheakamus Splash" style="color:#006080">Cheakamus Splash</a></li>
						
					</ul>
				</div>
				<div id="halfright">
					<img src="../img/victoria111.jpeg" style="height:230px" alt="victoriaBC"/>
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