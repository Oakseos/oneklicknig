<?php 
  session_start();
	$errors = array(); 
  //get form data
	// if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['forgot'])){ 
	   	//$username = $_POST['username'];
	    $email =  $_POST['email'];
      $username = $_POST['username'];


    //connect db

    include('driver/database.php'); 

    	// Sanitize email
        
        $email = $db->real_escape_string($email);
        $username = $db->real_escape_string($username);

       

        // check if user exists

        $checkUser = "SELECT * FROM db_oneklick WHERE email = '$email' AND username = '$username' ";

        $result = $db->query($checkUser);



        
       if($result->num_rows > 0){

            $row = $result->fetch_assoc(); 
            var_dump($row);
            if($row['email'] == $email){ 
                 $_SESSION['email'] = $email;
                 $_SESSION['name'] = $row["fullname"]; 
                 header('location: reset_password.php');
            exit(0);


            }else { 
            array_push($errors , "email does not exit");
              // var_dump($errors);
            
            }
       }else { 
        		 array_push($errors, "Email  and Username does not exist or match");
        	}

                
    }
        

		






 ?>