<?php 
require('driver/getbalance.php');

function getRandomString($length){
    $chars = '0123456789';    
    $result = '';
    while(strlen($result)<$length):
        $result .= $chars{mt_rand(0,strlen($chars)-1)};
    endwhile;
    return $result;
}  
    
$GLOBALS['cable'] = "GOTV";

$errors = [];
$message = '';
$result = ''; 
$failed = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
// if (isset($_POST['pay'])){
    $bouquet = $_POST['bouquet'];
    $smartCard  = $_POST['smartno'];
    $uid = $_POST['user_id'];
    $user = $_POST['username']; 

  
    //validate request
    if (empty($smartCard)){
        array_push($errors, "Smart Card Number is required");
    }elseif(strlen($smartCard) < 10) { 
        array_push($errors, "Smart Card No is not Complete");
    }else{

        //connect to db
        include('driver/database.php'); 

        $smartCard = $db->real_escape_string($smartCard);
        $service =  $GLOBALS['cable'];
        
        //check the smartcard number
        $json =  cableData($service, $smartCard);
        $lname = $json->details->lastName;
        $fname = $json->details->firstName;
        $customer_number = $json->details->customerNumber;
        $customer_name = $lname;

       
        //cross check bouquet with bouquet table 
        $bouquetCheck = "SELECT * FROM gotv_plan WHERE product_code = '".$bouquet."' "; 
        $output = $db->query($bouquetCheck);

        $accountDeposit = $db->query("SELECT SUM(amount) AS sum FROM income_fund WHERE user_id = $uid ");

        $row1 = $accountDeposit->fetch_assoc();               
        $sumFunds = $row1['sum']; 
           


        $accExpense = $db->query("SELECT SUM(amount) AS sum FROM expenditures  WHERE user_id = '".$uid."' ");

        $row2 = $accExpense->fetch_assoc();
        $sumSpent = $row2['sum']; 

        $balance = ($sumFunds - $sumSpent);

            //if result is true
            if($output){
                $row = $output->fetch_assoc(); // content row pull

                if($row['product_code'] == $bouquet){ 
                    $smartCard = $smartCard; 
                    $product_code = $row['product_code'];
                    $customer_name = $customer_name;
                    $customer_number = $customer_number;
                    $price = $row['price'];
                    $transaction_id = mktime();
                     $messageText = " $user has sent $bouquet to $smartCard with trans_id = $transaction_id";

                    //check balance first of the customer

                    if($balance > $price) {
                        //initial insert into transaction table
                    $insert = $db->query("INSERT INTO transactions (trans_id, username, user_id, amount, type, category) VALUES('$transaction_id', '$user', '$uid','$price', 'cable', '$service')");

                        //if insert is true
                        if ($insert) {
                        // data from site
                        $result = buyGotv($smartCard, $product_code, $customer_name, $customer_number, $price, $transaction_id );
                                //check the status of the transaction
                               if($result->status == 'pending'){

                                $confirm = query($transaction_id);

                                    if($confirm->status == 'Approved'){ 
                                                  // update transaction 
                                        $insert = $db->query("UPDATE transactions SET status = 'Completed' WHERE trans_id = '".$transaction_id."'");
                                        //update expenditure table
                                        $expendInsert = $db->query("INSERT INTO expenditures (user_id, username, amount) VALUES ('".$uid."', '".$username."', '".$price."') ");
                                        $message = $confirm->description;
                                        $sendSMS = smsAlert($user, $messageText);

                                    }else{ 
                                         //update transaction table
                                        $insert = $db->query("UPDATE transactions SET status = 'Failed' WHERE trans_id = '".$transaction_id."'");
                                        $failed = $confirm->description;
                                        //$sendSMS = smsAlert($user, $messageText);
                                    }
                                  
                                }else{
                                     //$insert = $db->query("UPDATE transactions SET status = 'Failed' WHERE trans_id = '".$transaction_id."'");
                                            $failed  = $result->description;
                                }
                        }else{
                      array_push($errors,  "An error occurred....".$db->error);
                        }

                    }else {
                        //no money in wallet to transact
                         array_push($errors, "insufficient Balance in your wallet"); 
                    }
            
                }else{
                    array_push($errors, "data bundle is not available");
                }
            }else{
                 array_push($errors, "data bundle is not available");
            }
    }
}         
        
   



 ?>
    
