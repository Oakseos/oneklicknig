<?php 
	session_start();

	 $GLOBALS['username'] = $_SESSION['username']; 
   	$GLOBALS['password']= $_SESSION['password'];
    $GLOBALS['name']=  $_SESSION['name'];
   	$GLOBALS['phone'] = $_SESSION['phone'];
   	$GLOBALS['email'] = $_SESSION['email'];
    $GLOBALS['ref'] = $_SESSION['ref'];
    //$GLOBALS['balance'] = $_SESSION['balance'];
    // $GLOBALS['sumSpent'] = $_SESSION['sumSpent'];
    // $GLOBALS['sumFunds'] = $_SESSION['sumFunds'];
    // $GLOBALS['tr_count'] = $_SESSION['tr_count']; 


   	// if(isset($_SESSION['username'])){ 
    // $_SESSION['msg'] = "you must log in first to view this page";
    // header('location: login.php');
    // }else {
    //     $now = time(); // Checking the time now when home page starts.

    //     if ($now > $_SESSION['expire']) {
    //         session_destroy();
    //         header('location: login.php');
    //     }
    // }


?>
