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
				<h1>ACTIVITIES</h1>
				
				
			</div>
			
			<div>
			<h1 style="text-align:left;margin-left:120px" class="container"><br><br>NIAGARA<br><br></h1>
			</div>
			<div>
				
				<div class="halfright" id="n1">
					<img src="../img/niagaraTour.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Boat tour  &#8594 CAD $129</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Enjoy a guided tour of the Canadian side of Niagara Falls. Experience the mighty waterfalls with stunning views of both the American Falls and the Horseshoe Falls. See the power of Niagara up close, onboard the Hornblower Niagara Cruises boat ride Voyage to the Falls. Hear about the origins of the falls and see the American and Canadian power plants that run on the Niagara River's waters. Stop to admire the beautiful Floral Clock, made up of more than 16,000 carpet bedding plants. Learn about the Niagara Glen and the Whirlpool Golf Course, and enjoy fully narrated stops at the Whirlpool Rapids Observation Deck and the Brink of the Falls. Then, ascend the Skylon Tower for panoramic aerial views and descend behind the falls as feel the Horseshoe Falls cascading above you at the Journey Behind the Falls. Cruise past the American Falls and Bridal Veil Falls aboard a Hornblower Niagara cruise boat. From December to April, when the boat tour is non-operational, visit the Niagara Parks Butterfly conservatory and Niagara's Fury attraction instead. Step inside a 4D motion theater and discover the ancient story of Niagara Falls in a multi-sensory simulation of the last Ice Age.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:5 hr</h2>
				</div>
				<div class="halfright" id="n2">
					<img src="../img/niagaraZipline.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Zipline to the falls  &#8594 CAD $65</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						The Zipline to the Falls at Grand View Marketplace takes you on a breathtaking ride into the gorge, towards the base of the Canadian Horseshoe Falls. Glide down 670 metres (2,200 feet), soaring past the American Falls and landing atop the falls observation deck at the base of the Horseshoe Falls. During the winter months, witness the breathtaking beauty of the snow and ice encasing Niagara Falls!. WildPlay Niagara is the official supplier to Niagara Parks, providing the Zipline to the Falls experience to visitors.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:90 min</h2>
				</div>
				
				<div class="halfright" id="n3">
					<img src="../img/niagaraNightTour.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Night tour (dinner and light show)  &#8594 CAD $139</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Be whisked away for a night at the falls from any downtown Niagara Falls location and head to the Niagara Parks power station to see how the hydropower is generated. See the Niagara Parks epic sound and light show. Watch this immersive, sensory, and family-friendly show featuring 3D projection, interactive opportunities, and a breathtaking musical score. After the show, treat your senses to a delicious 3-course with a view of the falls at Table Rock House Restaurant. Dine on locally sourced and internationally inspired cuisine before heading to the Illumination Tower. View the multi-colored illuminated water of the falls against the night sky. Get creative and control the lights yourself and get an “I Lit Up Niagara Falls” certificate. Finally, your tour guide will drop you off back at your hotel. 
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:4 hr</h2>
				</div>
				<div class="halfright" id="n4">
					<img src="../img/niagaraAero.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Aero Car Ride  &#8594 CAD $19</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Soar above Niagara Falls, Canada during this Whirlpool Aero Car experience. Designed by renowned Spanish engineer, Leonardo Torres Quevedo, the Whirlpool Aero Car has been taking passengers across the Niagara Gorge since 1916. Marvel at gorgeous views in this antique cable car that is suspended above the falls and offers spectacular views of the swirling Niagara Whirlpool and the Class 6 whitewater rapids of the Niagara River. Being that Niagara Falls crosses the borders of Canada and the United States, riders of this historic cable car actually only travel between two points on the Canadian shore, however, you will enjoy view points from both sides of the falls.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:1 hr</h2>
				</div>
				
			</div>
			
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