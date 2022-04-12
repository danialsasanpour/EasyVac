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
				<br><br><br><br>
				
			</div>
			<div>
			<h1 style="text-align:left;margin-left:120px">TORONTO</h1>
			</div>
			<div>
				<div class="halfright" id="t1">
					<img src="../img/torontoHelicopter.jpg" style="width:1200px;" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Helicopter Tour Over Toronto &#8594 CAD $119</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						You can see Toronto from eye level on the street. You can climb the famous CN Tower to see it from above. You can even take a boat ride around the waterfront. But nowhere else can you experience a view of Toronto from the sky like this one, on board a helicopter flying high above the largest city in Canada. It’s the perfect idea for a honeymoon, marriage proposal or any special occasion. Begin this Toronto helicopter tour at the Toronto City Center Airport, located downtown, just minutes west of the shoreline from the CN Tower. The Jewel flight is the showcase flight of downtown Toronto. This tour takes place at 2,000 feet (609 meters), covering nine miles (14 km). Marvel at the sights from this height and the distance that can be traveled without battling with the congested streets and traffic lights below. Discover Toronto by flying over the Canadian National Exhibition grounds in the west to the Don Valley Parkway in the east, and from the Lake Shore in the south up to Bloor Street in the north. This flight includes two framed photographs to commemorate the trip. The Interlude flight features the same highlights as the Jewel with some extra niceties. In addition to the two framed photographs, enjoy wine or champagne, desserts, and souvenirs. The flight travels farther west to Humber Bay and High Park, then north to St. Clair Avenue and east to Casa Loma before heading back downtown — covering 14 miles (23 km).
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:35 min</h2>
				</div>
				<div class="halfright" id="t2">
					<img src="../img/torontoGhost.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Ghost Hunted Tour &#8594 CAD $30</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Pass By: Hockey Hall of Fame, Brookfield Place - Concourse Level 30 Yonge Street, Toronto, Ontario M5E 1X8 Canada. Where our tour begins and our first ghost story of the evening.<br>Pass By: Lake Ontario, Ontario L1S 3Z3 Canada. See how far inland Lake Ontario's waters used to reach in the early days of the city.<br>Pass By: St. Lawrence Market, 92-95 Front St. E., Toronto, Ontario M5E 1C4 Canada. The St. Lawrence Market is one of the longest-running markets in North America, popular with both locals and tourists. But when stepping through the doors of the Market, it’s difficult to imagine that the area has seen many darker days over the years.<br>Pass By: St James Anglican Cathedral, 65 Church St (at King St. E.), Toronto, Ontario M5C 2E9 Canada. The cathedral, with construction beginning in 1850 and opening for services on June 19, 1853, was one of the largest buildings in the city at that time. It was designed by Frederick William Cumberland and is a prime example of Gothic Revival architecture....is it haunted?<br>Pass By: Mackenzie House, 82 Bond St, Toronto, Ontario M5B 1X2 Canada. Our final story of the evening features one of Toronto's most well-known haunted buildings.  
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:2 hr</h2>
				</div>
				<div class="halfright" id="t3">
					<img src="../img/torontoFerry.jpg" style="width:1200px" alt="Toronto Island Tour by Ferry"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Toronto Island Tour by Ferry &#8594 CAD $25</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Ferry tickets include the return trip for the date selected at the time of purchase. Toronto Island is located in Lake Ontario, a 13-minute ferry ride from downtown Toronto. Boats to the Island leave from the Jack Layton Ferry Terminal at the foot of Bay St. and Queen's Quay. The Island is actually a group of 15 islands inter-connected by pathways and bridges. You can walk from one end of the Island to the other. Kids and adults of all ages can find something to do or see on the Island. There are beautiful swimming beaches (including a Clothing Optional Beach on Hanlan's Point!), sports facilities, bike, canoe and kayak rentals, a boating marina, large grassy fields for picnics, a theatre, nature paths, EMS and fire station, an amusement park and a charming 150 year-old community of 600 people living year-round in cottage-like homes. You can walk, run or take your bike on the island, walk your dog (on a leash), visit the 200 year old lighthouse or the trout pond or have a coffee or beer at one of the restaurants. 
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:4 hr</h2>
				</div>
				<div class="halfright" id="t4">
					<img src="../img/torontoWonderland.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Wonderland Amusement Park  &#8594 CAD $40</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
					Since 1981, Canada's Wonderland has been the premier destination in Ontario for thrills, family fun, and world-class entertainment. Located in Vaughan, just north of Toronto, the amusement park features more than 200 attractions including 17 roller coasters, two children's areas, and Splash Works, the 20-acre water park. If you're looking for amazing things to do near Toronto with family or friends, the four-season amusement park has you covered year-round. Don't miss the live shows and special events through spring, summer, fall, and winter including Halloween Haunt and the immersive holiday event WinterFest.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:6 hr</h2>
				</div>
				
			</div>
			<br><br><br><br><br><br>
			<div>
			<h1 style="text-align:left;margin-left:120px" class="container"><br><br><br><br><br>MONTREAL<br><br></h1>
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
			<div>
			<h1 style="text-align:left;margin-left:120px" class="container"><br><br><br><br><br>BANFF<br><br></h1>
			</div>
			<div>
				<div class="halfright" id="b1">
					<img src="../img/banffDog.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Dog Sled Tour  &#8594 CAD $219</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Participate in the traditional sport of dogsledding on a tour of Spray Valley Provincial Park. Take in surrounding views of paths and mountains in a cozy sled pulled by Alaskan Huskies. Free cancellation, cancel up to 24 hours in advance to receive a full refund, Covid-19 precautions, Special health and safety measures apply.  Explore Spray Valley Provincial Park by dogsled on a family-friendly tour. Perfect for any comfort level, experience how to harness and hook up the team of Alaskan, Siberian, and Seppala Husky dogs. Relax in the sled and admire the view of towering mountains and tree-lined pathways. Meet your guide and get introduced to the friendly sled dogs that will pull you through the northern wilderness. Learn about this traditional winter sport, the dogs, and how to properly hook them up to the sled. Stop and enjoy photo stops and lookout points in the park with peaceful rivers and icy snowbanks. Once the loop is complete, reward the dogs with a cookie and warm up with a hot drink and a small snack.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:2 hr</h2>
				</div>
				<div class="halfright" id="b2">
					<img src="../img/banffHorse.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Horse-Drawn Sleigh Ride  &#8594 CAD $139</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Start your tour in Banff, where you will meet a member of the riding office, who will check you in for your sleigh ride. Now it's time to climb into the sleigh and get cozy with your loved ones under a cozy wool blanket. Hear the tinkling of sleigh bells, as the horses lead you on a journey through Banff's mountain meadows. Along the way, listen to stories from your guide and soak in the spectacular views of the valley and surrounding mountains, while keeping your eyes peeled for local wildlife, such as elk and deer. Finish your memorable excursion with a fireside warm-up stop after the ride, where you can toast a marshmallow and enjoy a warm drink back at the stables.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:1 hr, 45 min</h2>
				</div>
				<div class="halfright" id="b3">
					<img src="../img/banffMountain.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Mountain lakes and waterfalls  &#8594 CAD $119</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Discover soaring mountains, emerald lakes, and breathtaking waterfalls on a full-day tour of the Canadian Rockies. Visit the most spectacular places in Banff and Yoho National Parks to explore the awe-inspiring scenery. Travel through the Canadian Rockies in a comfortable bus, as you learn about the area from your knowledgeable guide. The tour will take you to Lake Louise, Moraine Lake, and Emerald Lake to admire the incredible landscape. Enjoy some free time at each of the lakes to stroll along the shore, or sit by the water and soak it all in. From October to June, when the road to Takakkaw Falls and Moraine Lake is closed due to snow, alternative stops will be made. These might include the Bow Valley Parkway, Johnston Canyon, Marble Canyon, or the Natural Rock Bridge. During the tour you’ll stop for lunch at the historic lodge in Yoho National Park.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:7 hr</h2>
				</div>
				<div class="halfright" id="b4">
					<img src="../img/banffIcewalk.jpg" style="width:1200px" alt="torontoWallpaper"/>
				</div>
				<div class="halfleft2">
					<h1 style="color:#009999;text-align:left;margin-left:20px">Canyon Icewalk  &#8594 CAD $79</h1>
					<p style="color:#009999;font-size:20px;margin:30px">
						Start with pickup from Banff and travel in a modern minibus along the Bow Valley Parkway to the Canyon. On arrival at the Johnston Canyon trailhead, your guide will show you how to put on ice cleats over your winter boots, as well as give you some tips on winter hiking. From here, start the moderate 2.7 kilometer hike with 135 meter elevation to the Upper Falls. Walk along the steel catwalks built into the canyon walls which allows a spectacular view down the canyon walls to the ice and river below. Along the way you'll learn the clues to how Johnston Canyon was formed and stop at the Lower Falls, where you'll have the option to walk through a natural cave feature for a unique view. At the Upper Falls, enjoy a brief stop on the upper deck with a small refreshment break to enjoy the views. These gigantic pillars of ice are the tour highlight and ice climbers can often be seen scaling the frozen columns. Once you've finished your hot chocolate, hike back down and your guide will transport you back to Banff and drop you at your hotel.
					</p>
					<h2 style="color:#009999;text-align:right;margin-right:20px">DURATION:4 hr</h2>
				</div>
				
			</div>
			<br><br><br><br><br><br>
			<div>
			<h1 style="text-align:left;margin-left:120px" class="container"><br><br><br><br><br>NIAGARA<br><br></h1>
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
			<br><br><br><br><br><br>
			<div>
			<h1 style="text-align:left;margin-left:120px" class="container"><br><br><br><br><br>VICTORIA BRITISH COLUMBIA<br><br></h1>
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