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
				<br><br>
				
			</div>
			
			<div>
			<h1 style="text-align:left;margin-left:120px" class="container">VICTORIA BRITISH COLUMBIA<br><br></h1>
			</div>
			<div>
				<div class="halfright" id="v1">
					<img src="../img/victoriaWhale.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Whale Tour  &#8594 CAD $119</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						The waters off Victoria, British Columbia are known as the Salish Sea. Discover its wonders and rich marine environment with this ultimate whale and marine wildlife tour! Board a brand new high speed coastal explorer boat and set sail to look for orcas (also known as killer whales), humpbacks, harbor seals, California sea lions and over 127 species of marine birds!  Take a tour of the west coast aboard a luxurious coastal explorer, with two outside viewing areas and a fully heated cabin. Enjoy complimentary coffee and hot chocolate as you set off on an adventure to learn all about the local marine wildlife and important landmarks. From playful orcas to giant humpbacks, your experience is sure to be memorable. Discover the marine wildlife in the waters off Victoria with the help of marine biologists and learn about efforts to establish Victoria as a world renowned whale watching destination. 
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:3 hr</h2>
				</div>
				<div class="halfright" id="v2">
					<img src="../img/victoriaPlane.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Panoramic Tour By Seaplane &#8594 CAD $189</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Experience exhilarating views over the rugged coastline of Victoria. Guests should meet at the Vancouver Seaplane Terminal, Vancouver Harbour Flight Centre for this half-hour tour. This is the most popular tour from Victoria Harbour for a reason. The perfect introduction to seaplane aviation, enjoy 30 minutes of adrenaline pumping views of downtown Victoria, the Strait of Juan de Fuca and the Olympic Mountains in the distance. A real highlight of the ride is the dramatic water spray during take-off and landing. Remember to bring a camera! Harbour Air and Westcoast Air operate the largest seaplane fleet in the world with over 50 planes. Relax in the company of your expertly trained guide and fly sky high. Experience Victoria the alternative way. At the end of the tour you will be driven back to your hotel by shuttle bus.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:1 hr, 15min</h2>
				</div>
				<div class="halfright" id="v3">
					<img src="../img/victoriaHorse.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Horse Drawn Carriage &#8594 CAD $129</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Discover vibrant sights and hear historic stories on this unique tour of the provincial capital. Board your horse drawn carriage with uniformed guide and driver. Get ready to explore the city in a traditional and leisurely way. Pass through Fisherman's Wharf, a colorful community of vibrant floating houses and marine wildlife. Enjoy the moments of tranquility through the beautifully manicured Beacon Hill Park. Regale in stories of past and present while weaving through the historical streets of James Bay. Enjoy honoring the tradition of the heavy horse tours in the city, all in the company of your professional, local guide.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:1 hr, 30 mini</h2>
				</div>
				<div class="halfright" id="v4">
					<img src="../img/victoriaSplash.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Cheakamus Splash &#8594 CAD $129</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Enjoy a half-day rafting trip that features small splashy rapids, outstanding scenery and lots of laughs. It’s an ideal outdoor activity for families, children, seniors, and anyone looking for a gentle and fun scenic rafting adventure. As you raft down the glacier-fed Cheakamus River between old growth forests, you’ll experience the excitement of gentle rapids and see a variety of birds, wildlife, waterfalls, and the towering peaks of the Coast Mountains. Learn about the intriguing Squamish First Nations history, a key part of the history of the area. There will also be a water fight for the kids. Perfect the art of splashing others and get a chance to cool off with a quick dip in the pure, glacier-fed water. When your river journey ends, you will be taken back to the fully equipped rafting base where you can change back into your own clothes and enjoy the facilities at the resort including a full service restaurant and awesome fully-licensed outdoor patio area. Relax with your family and friends in the beautiful sunshine and comfort of the resort, and check out the photos and videos shot on your trip.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:4 hr</h2>
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