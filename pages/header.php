<div style="height:20px;width:100%;text-align:right;">
	<?php bar();?>
</div>


<?php
function bar(){
    session_start();
    if(isset($_SESSION["user"])){
        $user=$_SESSION["user"];
        echo "<a href='UserProfile.php'><img src='../img/user.png' alt='userIcon' /></a>";
    }
    else
    {
        echo "<a href='LogOn.php'><button>Login</button></a>";
        
    }
}

?>