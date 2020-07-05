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
    
    $GLOBALS['network'] = "MTN";



    $errors = array();
    $message = '';
    $result = '';
    $balance ='';
    $failed = '';
//if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['buy'])){
    $bundle = $_POST['bundle_type'];
    $client_number  = $_POST['bnum'];
    $uid = $_POST['user_id'];
    $user = $_POST['username'];

    //validate
    if (empty($client_number)){
        array_push($errors, "Beneficiary Number is required");
    }elseif(strlen($client_number) < 11 && strlen($client_number) > 11) { 
        array_push($errors, "Phone number must be 11 character");
    }elseif(empty($bundle)) { 
        array_push($errors, "Kindly select bundle ");
    }else{

        //connect to db
    include('driver/database.php'); 
    $bundle = $db->real_escape_string($bundle);

        if ($db->connect_error) {
            $message = "db did not connect";

          die("Connection failed: " . $db->connect_error);
        }else{
            
            $bundleCheck = "SELECT * FROM mtn_bundle WHERE product_code = '$bundle' "; 
            $output = $db->query($bundleCheck);

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

            if($output){ 
            $row = $output->fetch_assoc(); 
                if($row['product_code'] == $bundle){ 
                    $product_code = $row['product_code'];
                    $price = $row['price'];
                    $transaction_id = mktime();
                    $network =  $GLOBALS['network'];
                    $messageText = "  send $bundle to $client_number";


                    

                   if($balance > $price) {
                         // initial insert of transaction 
                        $insert = $db->query("INSERT INTO transactions (trans_id, username, user_id, amount, type, category) VALUES('".$transaction_id."', '$user', '$uid', '".$price."', 'DATA', '".$network."')");

                        if ($insert) {
                            // data from site
                            //$result = buyData($network, $client_number, $price, $product_code, $transaction_id);
                            

                            $result = smsAlert($user, $messageText);

                            //$message = $result; 

                           if(isset($result->status) && strtoupper($result->status) == 'OK'){
                                    // update transaction 
                                $insert = $db->query("UPDATE transactions SET status = 'Completed' WHERE trans_id = '".$transaction_id."'");
                                $message =  "Transaction Succesfull";

                                //$message = $result->status;
                                //update expenditure table
                                $expendInsert = $db->query("INSERT INTO expenditures (user_id, username, amount) VALUES ('".$uid."', '".$username."', '".$price."') ");
                            }else if(isset($result->error)){
                                $failed = "Transaction Unsuccesful ";
                                   //update transaction table
                               $insert = $db->query("UPDATE transactions SET status = 'Failed' WHERE trans_id = '".$transaction_id."'");
                               //$failed = $result->description;
                            }else{
                                $insert = $db->query("UPDATE transactions SET status = 'Failed' WHERE trans_id = '".$transaction_id."'");
                                 $failed = "Network error Contact Admin";
                               //$failed = $result->description;
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
}         
        
    


   



 ?>
    
