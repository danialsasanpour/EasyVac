<?php
require_once '../classes/dbConfig.php';
require_once '../classes/Trip.cls.php';

session_start();




$trip=new Trip();
$trip->setTripId(Trip::$counter++);
$_SESSION['trip']=$trip;
header("Location: Destinations.php");
