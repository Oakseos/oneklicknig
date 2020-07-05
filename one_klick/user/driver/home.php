<?php

session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["user_name"]);
// $url = "index.php";
if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
}
header('location: ../../index.html');
exit();
// header("Location:$url")
// //if(isset($_GET['logout'])){
// session_start(); 
 //    session_destroy();
 //    unset($_SESSION['username']);
 //    header('location: ../login.php');
 //    exit;


	
 ?> 