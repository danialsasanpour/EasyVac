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
				<br><br>
				
			</div>
			
			
			<?php 
			     require_once '../classes/City.cls.php';
			     require_once '../classes/dbConfig.php';
			     require_once '../classes/Activity.cls.php';
			     require_once '../classes/Trip.cls.php';
			     
			     $cityId=$_GET["city"];
			     
			     $connection=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
			     
			     $city=new City();
			     $city->setCityId($cityId);
			     $listOfCities=unserialize($city->getCityById($connection));
			     
			     
			     $activity=new Activity();
			     $activity->setCityId($cityId);
			     $listOfActivities=unserialize($activity->GetActivitiesByCity($connection));
			
			?>
			
			
			<div>
			<h1 style="text-align:left;margin-left:120px">
			<?php 
    			foreach($listOfCities as $oneCity){
    			    echo strtoupper($oneCity->getCityName());
    			}
			?>
			
			</h1>
			</div>
			<div>
			
			<?php 
			
    			foreach($listOfActivities as $oneActivity)
    			{
    			    echo "<div class='halfright' id='activityId".$oneActivity->getActivityId()."'>
					           <img src='".$oneActivity->getImage()."' style='width:1200px;' alt='Wallpaper'/>
        				  </div>
        				  <div class='halfleft2'>
        					   <h1 style='color:#009999;text-align:left;margin-left:20px'>".$oneActivity->getActivityName()." &#8594 CAD $".$oneActivity->getPrice()."</h1>
        					   <p style='color:#009999;font-size:20px;margin:30px'>
        					   	   ".$oneActivity->getDescription()."
        					   </p>
        					   <h2 style='color:#009999;text-align:left;margin-left:20px'>DURATION:".$oneActivity->getDuration()." min</h2>
                               <a href='#nav' style='float:right;'><span style='font-size:18px;color:#006080;'>Go back to top</span></a>
                                

                              <form action='CreatingPlan.php'>
                               <input type='submit' value='Add To Plan'/>

                              </form>
                                
                            // $listOfActivities = { $oneActivity.getName() }

        				  </div>";
    			    
    			}
			
				
			?>
			
			<br/><br/><br/>
			<form action='CreatingPlan.php'>
                <input type='submit' value='Confirm and Create Plan'/>
            </form>
			
				<!--  
				<div class="halfright" id="Toronto1">
					<img src="../img/torontoHelicopter.jpg" style="width:1200px;" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Helicopter Tour Over Toronto &#8594 CAD $119</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						You can see Toronto from eye level on the street. You can climb the famous CN Tower to see it from above. You can even take a boat ride around the waterfront. But nowhere else can you experience a view of Toronto from the sky like this one, on board a helicopter flying high above the largest city in Canada. It’s the perfect idea for a honeymoon, marriage proposal or any special occasion. Begin this Toronto helicopter tour at the Toronto City Center Airport, located downtown, just minutes west of the shoreline from the CN Tower. The Jewel flight is the showcase flight of downtown Toronto. This tour takes place at 2,000 feet (609 meters), covering nine miles (14 km). Marvel at the sights from this height and the distance that can be traveled without battling with the congested streets and traffic lights below. Discover Toronto by flying over the Canadian National Exhibition grounds in the west to the Don Valley Parkway in the east, and from the Lake Shore in the south up to Bloor Street in the north. This flight includes two framed photographs to commemorate the trip. The Interlude flight features the same highlights as the Jewel with some extra niceties. In addition to the two framed photographs, enjoy wine or champagne, desserts, and souvenirs. The flight travels farther west to Humber Bay and High Park, then north to St. Clair Avenue and east to Casa Loma before heading back downtown — covering 14 miles (23 km).
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:35 min</h2>
				</div>
				<div class="halfright" id="Toronto2">
					<img src="../img/torontoGhost.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Ghost Hunted Tour &#8594 CAD $30</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Pass By: Hockey Hall of Fame, Brookfield Place - Concourse Level 30 Yonge Street, Toronto, Ontario M5E 1X8 Canada. Where our tour begins and our first ghost story of the evening.<br>Pass By: Lake Ontario, Ontario L1S 3Z3 Canada. See how far inland Lake Ontario's waters used to reach in the early days of the city.<br>Pass By: St. Lawrence Market, 92-95 Front St. E., Toronto, Ontario M5E 1C4 Canada. The St. Lawrence Market is one of the longest-running markets in North America, popular with both locals and tourists. But when stepping through the doors of the Market, it’s difficult to imagine that the area has seen many darker days over the years.<br>Pass By: St James Anglican Cathedral, 65 Church St (at King St. E.), Toronto, Ontario M5C 2E9 Canada. The cathedral, with construction beginning in 1850 and opening for services on June 19, 1853, was one of the largest buildings in the city at that time. It was designed by Frederick William Cumberland and is a prime example of Gothic Revival architecture....is it haunted?<br>Pass By: Mackenzie House, 82 Bond St, Toronto, Ontario M5B 1X2 Canada. Our final story of the evening features one of Toronto's most well-known haunted buildings. 
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:2 hr</h2>
				</div>
				<div class="halfright" id="Toronto3">
					<img src="../img/torontoFerry.jpg" style="width:1200px" alt="Toronto Island Tour by Ferry"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Toronto Island Tour by Ferry &#8594 CAD $25</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Ferry tickets include the return trip for the date selected at the time of purchase. Toronto Island is located in Lake Ontario, a 13-minute ferry ride from downtown Toronto. Boats to the Island leave from the Jack Layton Ferry Terminal at the foot of Bay St. and Queen's Quay. The Island is actually a group of 15 islands inter-connected by pathways and bridges. You can walk from one end of the Island to the other. Kids and adults of all ages can find something to do or see on the Island. There are beautiful swimming beaches (including a Clothing Optional Beach on Hanlan's Point!), sports facilities, bike, canoe and kayak rentals, a boating marina, large grassy fields for picnics, a theatre, nature paths, EMS and fire station, an amusement park and a charming 150 year-old community of 600 people living year-round in cottage-like homes. You can walk, run or take your bike on the island, walk your dog (on a leash), visit the 200 year old lighthouse or the trout pond or have a coffee or beer at one of the restaurants. 
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:4 hr</h2>
				</div>
				<div class="halfright" id="Toronto4">
					<img src="../img/torontoWonderland.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Wonderland Amusement Park  &#8594 CAD $40</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
					Since 1981, Canada's Wonderland has been the premier destination in Ontario for thrills, family fun, and world-class entertainment. Located in Vaughan, just north of Toronto, the amusement park features more than 200 attractions including 17 roller coasters, two children's areas, and Splash Works, the 20-acre water park. If you're looking for amazing things to do near Toronto with family or friends, the four-season amusement park has you covered year-round. Don't miss the live shows and special events through spring, summer, fall, and winter including Halloween Haunt and the immersive holiday event WinterFest.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:6 hr</h2>
				</div>
				-->
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