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
.halfleft2{
	float:left;
	width: 80%;
	padding:5px;
	box-sizing:border-box;
	margin-left:150px;
	margin-right:150px;
	
	background-image: linear-gradient(white,   #ccffff , white); opacity:0.8;
	color:black;
	margin-top:1px;
}
.halfright{
	float:left;
	width: 80%;
	padding:5px;
	box-sizing:border-box;
	margin-left:150px;
	
	
	color:white;
	margin-top:1px;
}

#footer{	
	background-color:black; color:white; border-bottom:1px solid #00001a; background-image: linear-gradient(black, black, #003d4d ,black, black,black);
	text-align:center;padding:20px;}

   </style>
   
 </head>
 <body style="background-image: url(../img/wall3.jpg);  background-repeat: repeat; background-size: 110%">
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
						
						<li><a href="./Home.html" target="Content_Frame">Home </a></li>
						<li><a href="./Destinations.html" target="Content_Frame">Destinations </a></li>
						<li><a href="./Activities.html" target="Content_Frame">Activities </a></li>
						<li><a href="./Form.html" target="Content_Frame">Make Your Plan</a></li>
						<li><a href="./AboutUs.html" target="Content_Frame">About Us </a></li>
						
						
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
			
				 
			    <input type="button" class="buttonsearch" onclick="location.href='./Form.html'" value="MAKE YOUR PLAN">
			   
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
				<h1>ACTIVITIES</h1>
			</div>
			
			
			<div>
			<h1 style="text-align:left;margin-left:120px" class="container"><br><br>MONTREAL<br><br></h1>
			</div>
			<div>
				<div class="halfright"  id="m1">
					<img src="../img/montrealGalleries.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Art Galleries And Montreal Biodome &#8594 CAD $50</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Includes transport and enter to Montréal Museum of Fine Arts,   Early to modern international art and the Biodome. Montreal is known for its vibrant arts scene, so these internationally renowned museums at the top of their game are a true feast for the eyes. For a fact, the museum’s a stunning permanent collection of classic and modern visual art is free for everyone under 30, but their temporary exhibitions are also a spectacle to behold. Open this summer, Riopelle: The Call of Northern Landscapes and Indigenous Cultures celebrates the life and work of Quebecois modern artist Jean Paul Riopelle (1923-2002). Featuring never before seen pieces, major works, and restored works, this important collection of intercultural Canadian art is a must-see.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:According to schedule</h2>
				</div>
				<div class="halfright" id="m2">
					<img src="../img/montrealSkydiving.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Skydiving Montreal &#8594 CAD $349</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						For 25 years, skydiving has been our profession and our entire team has more than 175 000 jumps of experience. Remember, you are on the verge of a unique experience that will change your life. You can choose one of 3 different options for your first skydive: Jump at 9000' - This option will allow you to experience a 9000' tandem skydive. At 5000', after only 20 seconds of free fall, your instructor will deploy the parachute and you will be able to enjoy the experience of flying under the canopy. Buy now ! Jump at 13 500' - Our most popular option for a first skydive, that will allow you to get the full experience of free fall for 60 seconds. You will jump from 13 500' attached to your instructor. At 5000', your instructor will deploy the parachute and you will enjoy the flight under your canopy. Jump at 18 000' - The most extreme skydive experience. You will fly up to a height of 18 000’ with the help of oxygen in the plane. You will experience the thrill of the longest freefall: 1 minute and 20 seconds. You are getting ready to enjoy a unique and intense experience that will last around 3 hours and that will definitely mark your life. From the briefing to the landing, here is how the activity will take place. Here is a description of your forthcoming experience.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:3 hr</h2>
				</div>
				<div class="halfright" id="m3">
					<img src="../img/montrealSpa.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Nordic  Spa Thermal Experience  &#8594 CAD $65</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Discover a complete relaxation experience at Strøm Nordic Spa, a peaceful haven located right near downtown Montreal. Enjoy a thermal experience at an exceptional Nordic spa that includes the rental of a bathrobe, a towel, and a locker. Summer or winter, rain or shine, reduce stress as you revive your body and mind.  Begin by relaxing your muscles in the whirlpool hot tubs. Eliminate toxins by going to a heated sauna, followed by a dip in an ice-cold bath and a period of deep relaxation.  Practiced for thousands of years, thermotherapy is a wellness ritual based on the external use of water for therapeutic purposes. Benefit from access to the outdoor whirlpools, thermal and Nordic baths, Finnish saunas, eucalyptus steam bath, thermal and Nordic waterfalls, plus indoor and outdoor relaxation areas with fireplaces.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:4 hr</h2>
				</div>
				<div class="halfright" id="m4">
					<img src="../img/montrealOmegaParc.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Tour to Parc Omega & Montebello Lodge  &#8594 CAD $219</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Embark on a private day tour to discover more of Montreal than just the main city sights. Enjoy the local insights of your guide as you journey in the comfort a private vehicle for you and your group.  Your day begins with pickup from your accommodation. Enjoy a scenic drive through rural countryside to Omega Park, home to many species of Canadian wildlife. Drive through the park, enjoying opportunities to interact with friendly animals such as elk, deer, wild boars, and many others. Observe from up close wolves, bears, coyotes, foxes, buffalo, and caribou. The journey through the park will be between 2 to 4 hours with many opportunities for stops. Your group might want to enjoy lunch in the park paired with incredible scenic views. Next, travel to the nearby Montebello Lodge, the largest log building in North America. Built in 1930, the lodge is nestled in the heart of the scenic Montebello village and surrounded by nature. In the late afternoon, hop back in the vehicle for your return trip to Montreal. Tour concludes with drop-off at your accommodation between 5:00 PM to 6:00 PM.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:6 hr min</h2>
				</div>
				
			</div>
			<br><br><br><br><br><br>
			
				<br><br><br><br><br><br>
			</div>
			<div>
			<br><br><br><br><br><br>
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