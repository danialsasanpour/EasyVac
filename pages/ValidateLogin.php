<?php

require_once '../classes/dbConfig.php';
require_once '../classes/User.cls.php';

if (isset($_POST['email'])&&isset($_POST['pwd']))
{
    $userObject = new User();
    $validate = $userObject->Login($_POST['email'], $_POST['pwd'], $connectionSQL);
    
    if ($validate)
    {
        session_start();
        $userObject->setEmail($_POST['email']);
        $userObject->setPassword($_POST['pwd']);
        
        $connection=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
        $userObject=unserialize($userObject->findUser($connection));
        
        $_SESSION["user"]=$userObject;
        
        header("Location: ../pages/Home.php");
    }
    else
    {
        header("Location: ../pages/LogOn.php?error='User Not Found'");
    }
       
}
else 
{
    header("Location: ../pages/LogOn.php?error='Either Username or Password is invalid'");
}
