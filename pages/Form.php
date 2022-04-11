<!DOCTYPE html>     
<!-- Felipe, Triana
     Description: Project
	 Date: Feb 2022        -->
<html lang="en"> 
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
   <title>Form</title>
 
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
	float:left;
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
	
#main{
	float:left;
	width: 69%;
	padding:0 30px;
	box-sizing:border-box;
	padding-top:30px;
	color:white
   </style>
   
 </head>
 <body style="background-image: url(../img/wall2.jpg);  background-repeat: no-repeat; background-size: cover">
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
			<h3>Upgrade to Premium Member:</h3>
			
				<ul>
					<li><h4>Weekly promotions in all activities.</h4></li>
					<li><h4>CAD 1000 sign-up bonus for first-time Premium Account subscribers.</h4></li>
				
					<li><h4>Discount on equipment rental</h4></li>
					<li><h4>Extended customer support by live chat</h4></li>
					<li><h4>Premium virtual gifts</h4></li>
					<li><h4>Exclusive access to Premium areas and experiences</h4></li>

				</ul>
			
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
				<h1><br><br>MAKE YOUR PLAN</h1>
			</div>
			<div class="float:right">
				<div>
				<form action="action_page.asp" method="post" class="form-register" onsubmit="return validate();">
							
			<fieldset id="sec_product" style= "background-image: linear-gradient(black,  #003d4d , white); opacity:0.8;">
			<legend style="color:white"><b>Plan details</b></legend>
				<div class="main" style="color: white"><br>
									
					<label>Which activity/ies would you like to do?</label><br><br>
					<div>
						<div style="float:left;width: 33%">
							<label><b><i>BANFF:</i></b></label><br><br>
							<input type="checkbox" name="type[]" value="Dog Slead Tour" > Dog Slead Tour <br>
							<input type="checkbox" name="type[]" value="Horse-Drawn Sleigh Ride" > Horse-Drawn Sleigh Ride<br>
							<input type="checkbox" name="type[]" value="Mountain lakes and waterfalls " > Mountain lakes and waterfalls <br>
							<input type="checkbox" name="type[]" value="Canyon IceWalk  " > Canyon IceWalk  <br><br><br>
						</div>
						<div style="float:left;width: 33%">
							<label><b><i>MONTREAL:</i></b></label><br><br>
							<input type="checkbox" name="type[]" value="art galleries and Montreal Biodome" > Art galleries and Montreal Biodome<br>
							<input type="checkbox" name="type[]" value="Skydiving Montreal" > Skydiving Montreal<br>
							<input type="checkbox" name="type[]" value="Nordic Spa Thermal Experience " > Nordic Spa Thermal Experience <br>
							<input type="checkbox" name="type[]" value="Parc Omega & Montebello Lodge " > Parc Omega & Montebello Lodge <br><br><br>
						</div>
						<div style="float:left;width: 33%">
							<label><b><i>NIAGARA:</i></b></label><br><br>
							<input type="checkbox" name="type[]" value="Zipline to the falls" > Zipline to the falls<br>
							<input type="checkbox" name="type[]" value="Boat tour" > Boat tour<br>
							<input type="checkbox" name="type[]" value="Night tour (dinner and light show)" > Night tour (dinner and light show)<br>
							<input type="checkbox" name="type[]" value="Aero car ride " > Aero car ride <br><br><br>
						</div>
						<div style="float:left;width: 33%">
							<label><b><i>TORONTO:</i></b></label><br><br>
							<input type="checkbox" name="type[]" value="Helicopter Tour " >Helicopter Tour <br>
							<input type="checkbox" name="type[]" value="Ghost Hunted Tour " > Ghost Hunted Tour <br>
							<input type="checkbox" name="type[]" value="Toronto Island Tour by Ferry" > Toronto Island Tour by Ferry<br>
							<input type="checkbox" name="type[]" value="Wonderland Amusement Park" > Wonderland Amusement Park <br><br><br>
						</div>
						<div style="float:left;width: 66%">
							<label><b><i>VICTORIA:</i></b></label><br><br>
							<input type="checkbox" name="type[]" value="Whale Tour" >Whale Tour <br>
							<input type="checkbox" name="type[]" value="Panoramic tour by seaplane " > Panoramic tour by seaplane<br>
							<input type="checkbox" name="type[]" value="Horse Drawn Carriage" > Horse Drawn Carriage <br>
							<input type="checkbox" name="type[]" value="Cheakamus Splash" > Cheakamus Splash<br><br><br>
						</div>
					</div>	
				</div>	
				
				<br>
				<label><b><i>Number of People:</i></b></label><br>
				<select class="rounded" style="width:10%" name="country" id="country" size="1">
							
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							
				</select><br><br>
				
				<label><b><i>Number of Days:</i></b></label><br>
				<select class="rounded" style="width:10%" name="country" id="country" size="1">
							
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							
				</select><br><br>
				
			</fieldset>
				<br>
				
			<fieldset id="main" style="float:right;background-image: linear-gradient(black,  #003d4d , #003d4d ); opacity:0.8;">	
			<legend style="color:white"><b>User Information</b></legend>
				
					
				<table>
					<tr>
						<td><label>First Name *: </label></td>
						<td><input type="text" id="firstname" class="rounded" name="firstname" placeholder="First_Name" size="25" maxlength="30"></td>
					</tr>
					<tr>
						<td><label>Last Name *: </label></td>
						<td><input type="text" id="lastname" class="rounded" name="lastname" placeholder="Last_Name" size="25" maxlength="30"></td>
					</tr>
					<tr>
						<td><label>email *: </label></td>
						<td><input type="text" id="email" class="rounded" name="email" placeholder="example@email.com" size="25" maxlength="30"></td>
					</tr>
					<tr>
						<td><label>UserName *: </label></td>
						<td><input type="text" id="username" class="rounded" name="username" placeholder="username" size="25" maxlength="30"></td>
					</tr>
					<tr>
						<td><label>Password *: </label></td>
						<td><input type="password" id="password" class="rounded" name="password" placeholder="password" size="25" maxlength="30"></td>
					</tr>
					<tr>
						<td><label>Phone Number *: </label></td>
						<td><input type="text" id="phoneNumber" class="rounded" name="phoneNumber" placeholder="10 digits" size="25" maxlength="30"></td>
					</tr>
				
					<tr>
						<td><label for="country">Country *:</label></td>
						<td><select class="rounded" style="width:50%" name="country" id="country" size="1">
							
							<option value="Canada">Canada</option>
							<option value="Colombia">Colombia</option>
							<option value="Other">Other</option>
						  </select>
						</td>
					</tr>
					<tr>
						<td><label>State/Province *: </label></td>
						<td><input class="rounded" list="state" name="state" id="province" size="25" maxlength="30" placeholder="select 1 from the list" required>
							<datalist id="state">
								<option value="I'm otside Canada">
								<option value="Alberta">
								<option value="British Columbia">
								<option value="Manitoba">
								<option value="New Brunswick">
								<option value="Newfoundland and Labrador">
								<option value="Northwest Territories">
								<option value="Nova Scotia">
								<option value="Nunavut">
								<option value="Ontario">
								<option value="Prince Edward Island">
								<option value="Quebec">
								<option value="Saskatchewan">
								<option value="Yukon">
							 </datalist>
						</td>
					</tr>
					<tr>
						<td><label>City *: </label></td>
						<td><input class="rounded" type="text" name="city" id="City" size="25" maxlength="30" required></td>
					</tr>
					<tr>
						<td><label>Address *: </label></td>
						<td><input class="rounded" type="text" name="address" id="Address" size="25" maxlength="30" required></td>
					</tr>

					
				</table><br>
			</fieldset>
			<br>
			<fieldset id="main"style="float:right;background-image: linear-gradient(black,  #003d4d , #003d4d ); opacity:0.8;">
			
				
				<table id="buttontable">
					<tr>
						
						<td><h3>The total price of your plan is:</h3></td>
					</tr>
					
					
					
				
				</table>
			</fieldset>
			<fieldset id="main" style="float:right;background-image: linear-gradient(black,  #003d4d , #003d4d ); opacity:0.8;">
			<legend style="color:white"> <b>Payment </b> </legend>
				<img src="../img/visa.png" class="social" alt="credit" style="width:180px"/>
				<label><br>Credit Card *<br></label>
				<input type="radio" name="card" value="master" required>MasterCard
				<input type="radio" name="card" value="visa" required>VISA
				<input type="radio" name="card" value="american" required>American Express

				<br><br>
				<table>
					<tr>
						<td><label>Card Number:* </label></td>
						<td><input class="rounded" type="number" name="cardNumber" id="CardNumber" required>
						</td>
					</tr>
					<tr>
						<td><label>Expiration Date: *</label></td>
						<td>
							<input type="number" id="expmonth" class="rounded" name="expmonth" placeholder="month" min="1" max="12" required>
							<input type="number" id="expyear" class="rounded" name="expyear"  placeholder="year" min="2021" max="2035" required>
						</td>
		 
					</tr>
					<tr>
						<td><label for="code">Security Code: *</label></td>
						<td> <input type="number" id="code" class="rounded" name="code" placeholder="XXX" min="1" max="999" required></td>
					</tr>
				</table><br><br><br>
			</fieldset><br>
			<fieldset id="main"style="float:right;background-image: linear-gradient(black,  #003d4d , #003d4d ); opacity:0.8;">
			<legend style="color:white"><b>Send Information</b></legend>
				<label>All the fields with * are required</label>
				<table id="buttontable">
					
					
					<tr>
						<td><input type="button" id="send" class="rounded" style="width:150px" name="send" value="PAY NOW" onclick="validate()" />
						
					<tr>	
						<td><input class="rounded" id="reset" style="width:150px" type="reset" value="Reset" ></td>
						<td><input class="rounded" style="width:150px" type="button" value="Show the Information" onClick="openPage()" /></td>
					</tr>
					<tr><br><br><br></tr>
					
					
				
				</table>
				<br>
			</fieldset>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</form>
			
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="container">
			<br><br><br>
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