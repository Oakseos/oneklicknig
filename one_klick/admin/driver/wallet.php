
<?php 
 

    $errors = array();
    $message = '';

  //get form data
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //if(isset($_POST['submit'])){
      
      $username = $_POST['username'];
      $email =  $_POST['email'];
      $amt = $_POST['amount'];

        // Registrattion 

      //form valldations

      if (empty($username)){
              array_push($errors, "Username is required");
          } elseif(empty($email)) { 
              array_push($errors, "Email is required");
          } elseif(empty($amt)) { 
                array_push($errors, "Kindly type the amount to credit");
      }else{ 
            //Connect to database
             include('driver/database.php'); 
              // Sanitize form Data
              $username = $db->real_escape_string($username);
              $email = $db->real_escape_string($email);
              $amt = $db->real_escape_string($amt);

              // check if username, phone and email exist

              $userCheck = "SELECT * FROM db_oneklick WHERE username = '$username'   LIMIT 1";

              $result = $db->query($userCheck);

              if($result){
                   if($result->num_rows){
                      $row = mysqli_fetch_assoc($result);
                      $user_id = $row['id']; 
                    } 

                    if (sizeof($errors) == 0)  {
                      //get time of transactions
                      $tr_time= mktime();
                        
                          

                            $insert = $db->query("INSERT INTO income_fund (user_id, username, amount, trans_id) VALUES('". $user_id."', '".$username."', '".$amt."', '".$tr_time."')");

                          //$insert = mysqli_query($db, $query);

                            if ($insert) { 
                                $message = " $username account has been credited with N$amt"; 
                                $_SESSION['success'] = "you re now logged in";
                                // Redirect to login page 
                                
                            }else{
                                echo "error".$db->error;
                            }
                    }else{ 
                         array_push($errors, "database error");
                    }                
              }
      }

      
}


?>