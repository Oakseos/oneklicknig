
<?php 
 
    session_start(); 

    $errors = array();

    $GLOBALS['code'] = "1KLICK"; 

$message = ''; 
  //get form data
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //if(isset($_POST['login_user'])){
      $name = $_POST['fname'];
      $username = $_POST['username'];
      $phone = $_POST['phone'];
      $email =  $_POST['email'];
      $password = $_POST['password'];
      $refer = $_POST['refer_by'];

        // Registrattion 

      //form valldations

      if (empty($username)){
              array_push($errors, "Username is required");
          }elseif(strlen($username)  < 6) { 
              array_push($errors, "Username must contain atleast 6 character");
          }elseif(strlen($phone)  < 11 && strlen($phone) > 11) { 
              array_push($errors, "Phone number must be 11 character");
          }  elseif(empty($name)) { 
              array_push($errors, "Fullname is required");
          } elseif(empty($email)) { 
              array_push($errors, "Email is required");
          } elseif(empty($password)) { 
                array_push($errors, "Password is required");
          } elseif(strlen($password) < 6) { 
                array_push($errors, "Your password must contain 6 characters");
                            

        }else{ 
            //Connect to database
             include('driver/database.php'); 
              // Sanitize form Data
              $name = $db->real_escape_string($name);
              $username = $db->real_escape_string($username);
              $phone = $db->real_escape_string($phone);
              $email = $db->real_escape_string($email);
              $password = $db->real_escape_string($password);
              $referrer= $db->real_escape_string($refer);

              // check if username, phone and email exist

              $userCheck = "SELECT * FROM db_oneklick WHERE username = '$username'  OR  phone = '$phone' OR email = '$email' LIMIT 1";

              $result = $db->query($userCheck);

              if($result){
                 if($result->num_rows){
                    $newUser = mysqli_fetch_assoc($result);
                       if ($newUser['username'] === $username) { 
                             array_push($errors," Username exist");
                       }elseif ($newUser['phone'] === $phone) {
                             array_push($errors, "Phone number exists");
                       }elseif ($newUser['email'] === $email) {
                            array_push($errors, "Email exists");
                       }

              }  

        if (sizeof($errors) == 0)  {
            //insert into database

            //generate Vkey
            // $vkey =md5(time().$username);


           //insert account into the database 

              $password = md5($password);
              //echo "$password";

              //generate a reference code

              function getRandomString($length){
                    $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';    
                    $result = '';
                    while(strlen($result)<$length):
                        $result .= $chars{mt_rand(0,strlen($chars)-1)};
                    endwhile;
                    return $result;
                }




              $r_code = getRandomString(10); 
              $reg_time = mktime(); 

              $sql =  ("INSERT INTO db_oneklick (fullname, username, phone, email, password, reference, refer_by, register_time ) VALUES('".$name."', '".$username."', '".$phone."', '".$email."', '".$password."', '".$r_code."',  '$referrer',  '$reg_time' )");

              $insert = $db->query($sql);

              //$insert = mysqli_query($db, $query);

              $message = $insert;

              if ($insert) { 

                  $_SESSION['success'] = "you re now logged in";
                  // Redirect to login page 
                  header('location: register_success.php'); 
                  session_destroy();
              }else{
                  echo "error".$db->error;
              }
        }else{ 
             array_push($errors, "database error");
        }                


      // LOGIN USER 

    
      }


    }

      
}


?>