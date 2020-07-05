<?php 

	
	$errors = array(); 
  $message = '';
  //get form data
	// if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['submit'])){ 
	   	//$username = $_POST['username'];
	      $name =  $_POST['fname'];
      	$email = $_POST['email'];
      	$phone  = $_POST['phone'];
      	$uid  = $_POST['user_id'];




    //connect db

    include('driver/database.php'); 

    	// Sanitize email
        
      $phone = $db->real_escape_string($phone);
      $name = $db->real_escape_string($name);
      $email = $db->real_escape_string($email);


      // Check connection
      if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
        array_push($errors , "email does not exit");

        $message = "123444";
      }else{

           $checkUser = "SELECT * FROM db_oneklick WHERE  id = '$uid' ";

           $result = $db->query($checkUser);

              if($result->num_rows > 0 ){

            $row = $result->fetch_assoc();

            $message = $row['username'];

            $update = "UPDATE db_oneklick SET fullname ='$name' WHERE id='$id' ";
            $result = $db->query($update);
            
                 if ($result) {
                   $message = " Update Successfull";   
                   header('location: ../profile.php');
                 } else {
                     array_push($errors, "Error updating record.$db->error");
                 }

           $db->close();
              }
      }
 
    }
      
      // check if user exists

    



       

             


             
       

            // if($row['id'] == $uid){ 

            //     // Check connection
        				// if ($db->connect_error) {
        				//   die("Connection failed: " . $db->connect_error);
        				// }else{
            //   				$update = "UPDATE db_oneklick SET fullname ='$name' WHERE id='$id' ";
            //   				$result = $db->query($update);
              				
            //       		if ($result) {
            //       		  $message = " Update Successfull";   
            //       			header('location: ../profile.php');
            //       		} else {
            //       				array_push($errors, "Error updating record.$db->error");
            //       		}

            //       $db->close();
            //     }

            // }else { 
            //   array_push($errors , "email does not exit");
            //      // var_dump($errors);
            // }
  //     }else { 
  //       array_push($errors, "");
  //     }               
  // }
        

 ?>