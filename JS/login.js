var login_username="Felipe@project.ca";
var login_password="123";

function load(){
  $(document).ready(function(){
     $(".login").show(); //show class login when you load the page
     $(".logout").hide(); //hide class logout when you load the page
  });	
}

function authenticate_login()
{
  var v1, v2;
  v1 = document.getElementById("user").value;
  //v1 = document.form1.firstname.value;
  v2 = document.getElementById("pwd").value;

  $(document).ready(function(){

  if ((v1 == login_username) && (v2 == login_password))
	{
	  alert('Welcome to Xtremo website');
	  parent.frames.Menu_Frame.location.href = "Menu.htm";
	  document.getElementById("uname").innerHTML = "Welcome Admin"  + "<br>";
        $(".login").hide(); //hide class login
        $(".logout").show(); //show class logout
	}
	else
	{
	    $(".login").show(); //show class login
        $(".logout").hide(); //hide class logout
	  alert('Invalid User or Password Login. try Felipe@project.ca and 123');
	  document.getElementById("pwd").value="";
	  document.getElementById("pwd").focus();
	  parent.frames.Menu_Frame.location.href ="MenuT.htm";
	}
  });	
}


function authenticate_logout()
{
  alert('Thank you!');
  document.getElementById("user").value="";
  document.getElementById("pwd").value="";
  document.getElementById("user").focus();
  parent.frames.Menu_Frame.location.href ="MenuT.htm";
  parent.frames.Content_Frame.location.href ="Content.htm";
    $(document).ready(function(){
     $(".login").show(); //show class login
     $(".logout").hide(); //hide class logout
  });	
}
