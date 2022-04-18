<?php

require_once '../classes/dbConfig.php';
require_once '../classes/User.cls.php';

if (isset($_POST['email'])&&isset($_POST['pwd']))
{
    $user = new User();
    $validate = $user->Login($_POST['email'], $_POST['pwd'], $connection);
    
    if ($validate)
    {
        header("Location: ../pages/Home.php");
    }
    else{
        header("Location: ../pages/LogOn.php");
    }
    
}
