<?php 
	
function getRandomString($length){
    $chars = '0123456789';    
    $result = '';
    while(strlen($result)<$length):
        $result .= $chars{mt_rand(0,strlen($chars)-1)};
    endwhile;
    return $result;
}

$errors = [];
$result = '';
$balance ='';
$failed = '';
 $message = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $network = $_POST['network_type'];
    $client_number  = $_POST['bnum'];
    $uid = $_POST['user_id'];
    $user = $_POST['username'];
    $amount = $_POST['amount'];


    $amount = $_POST['amount']; 
    if (empty($client_number)){
        array_push($errors, "Beneficiary Number is required");
    }elseif(strlen($client_number) < 11 && strlen($client_number) > 11) { 
        array_push($errors, "Phone number must be 11 character");
    }elseif(empty($amount)) { 
        array_push($errors, "Kindly type Amount you want to buy");
    } else { 
     
              //connect to db
    include('driver/database.php'); 

        if ($db->connect_error) {
            $message = "db did not connect";

          die("Connection failed: " . $db->connect_error);
        }else{

             //checke if there wallets by comparing the both funds tables
            //sum of funds in wallet
            $accountDeposit = $db->query("SELECT SUM(amount) AS sum FROM income_fund WHERE user_id = $uid ");
            $row1 = $accountDeposit->fetch_assoc();               
            $sumFunds = $row1['sum']; 
            //sum of expenses
            $accExpense = $db->query("SELECT SUM(amount) AS sum FROM expenditures  WHERE user_id = '".$uid."' ");

            $row2 = $accExpense->fetch_assoc();
            $sumSpent = $row2['sum']; 

            $balance = ($sumFunds - $sumSpent);
            $transaction_id = mktime();
            $result = buyAirtime($network, $client_number, $amount, $transaction_id);
            
                if($balance > $amount) {
                         // initial insert of transaction 
                        $insert = $db->query("INSERT INTO transactions (trans_id, username, user_id, amount, type, category) VALUES('".$transaction_id."', '$user', '$uid', '".$amount."', 'Airtime', '".$network."')");

                        if ($insert) {
                            // data from site
                              $result = buyAirtime($network, $client_number, $amount, $transaction_id);
                            if($result->status == 'Approved'){
                                    // update transaction 
                                $insert = $db->query("UPDATE transactions SET status = 'Completed' WHERE trans_id = '".$transaction_id."'");
                                $message = $$result->description;
                                //update expenditure table
                                $expendInsert = $db->query("INSERT INTO expenditures (user_id, username, amount) VALUES ('".$uid."', '".$username."', '".$price."') ");
                            }else{
                                 //update transaction table
                               $insert = $db->query("UPDATE transactions SET status = 'Failed' WHERE trans_id = '".$transaction_id."'");
                               $failed = $result->description;
                            }
                        }else{
                              array_push($errors,  "An error occurred....".$db->error);
                        }
                }else{
                         //no money in wallet to transact
                         array_push($errors, "insufficient Balance in your wallet");
                }
        }             
    }
    // }else{
    //         array_push($errors, "data bundle is not available");
}


 ?>