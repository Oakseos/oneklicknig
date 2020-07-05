<?php 
	session_start();

		$uid  = $_SESSION['id'];
		$username = $_SESSION['username']; 

	 //connect to db
        include('driver/database.php'); 

        $accountDeposit = $db->query("SELECT SUM(amount) AS sum FROM income_fund WHERE user_id = $uid ");

        $row1 = $accountDeposit->fetch_assoc();               
        $sumFunds = $row1['sum']; 
           


        $accExpense = $db->query("SELECT SUM(amount) AS sum FROM expenditures  WHERE user_id = '".$uid."' ");

        $row2 = $accExpense->fetch_assoc();
        $sumSpent = $row2['sum']; 

        $balance = ($sumFunds - $sumSpent);





 ?>