<?php 
	 $hostname = "localhost"; // mysql hostname - always use localhost
    $database = "oneklick_one_klick_nig"; // substitute your mysql database name
    $username = "oneklick_admin"; // substitute your mysql user name
    $password = "1Klicknig"; // your mysql users's password
    $db = mysqli_connect($hostname, $username, $password, $database); // or die(mysql_error()); // make connection to mysql
	//$db = NEW Mysqli('localhost:3306', 'oneklick_admin', 1Klicknig','oneklick_one_klick_nig');
 ?>