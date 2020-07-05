<?php
// session_start();
  

 //connect to db
    include('driver/database.php'); 
    //$db = NEW Mysqli('localhost', 'root', '','one_klick_nig');

     if ($db->connect_error) {
            $message = "db did not connect";

          die("Connection failed: " . $db->connect_error);
    }else{

        //check if sum of money in wallet 
        $accountDeposit = $db->query("SELECT SUM(amount) AS sum FROM income_fund  ");
        $row1 = $accountDeposit->fetch_assoc();               
        $sumFunds = $row1['sum']; 
                    //check if sum of money spent 

        $accExpense = $db->query("SELECT SUM(amount) AS sum FROM expenditures   ");
        $row2 = $accExpense->fetch_assoc();
        $sumSpent = $row2['sum']; 

        //available balance
        $balance = ($sumFunds - $sumSpent);

        //number of registered users

        $totalRegistered = "SELECT * FROM db_oneklick";

        $userResult = $db->query($totalRegistered );
        
        $rowUser = mysqli_fetch_array($userResult);

            if ($userResult = $db->query($totalRegistered )) {
                  // Return the number of rows in result set
                  $userCount= mysqli_num_rows($userResult);

                  //$row = mysqli_fetch_array($rowcount);
                  //echo "number of rows: ",$rowcount;
                  // Free result set
                  mysqli_free_result($userResult);


            }


        // number of transacation 
        $tr_checkUser = "SELECT * FROM transactions ";

        $result = $db->query($tr_checkUser );
        
        $row = mysqli_fetch_array($result);

            if ($result = $db->query($tr_checkUser )) {
                  // Return the number of rows in result set
                  $rowcount= mysqli_num_rows($result);

                  //$row = mysqli_fetch_array($rowcount);
                  //echo "number of rows: ",$rowcount;
                  // Free result set
                  mysqli_free_result($result);

                $_SESSION['balance'] =  $balance;
                $_SESSION['sumSpent'] =  $sumSpent;
                $_SESSION['sumFunds'] = $sumFunds;
                $_SESSION['tr_count'] = $rowcount;
                $_SESSION['usersNumber'] = $userCount;
            }

                
               
       }

?>