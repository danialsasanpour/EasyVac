<?php bar();?>


<?php
function bar(){
    if(isset($_SESSION["user"])){
        $user=$_SESSION["user"];
        echo "<li><a target='Content_Frame' href='UserProfile.php'>Account</a></li>";
    }
    else
    {
        echo "<li><a target='Content_Frame' href='LogOn.php'>Login</a></li>";
    }
}

?>