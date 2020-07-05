<?php 
	
	session_start();
	$errors = array(); 


	

	if (isset($_POST['reset'])){

		$pass = $_POST['pass']; 
		$rpass = $_POST['rpass'];

		
		include('driver/database.php'); 

		//check if password is the samw


		if ($pass != $rpass) { 
			echo "password no same ";
			array_push($errors, "Password is not the same ");

		}else{ 
			$pass = md5($pass);
			if(isset($_SESSION['email'])){
				$email = $_SESSION['email'];

				// Check connection
				if ($db->connect_error) {
				  die("Connection failed: " . $db->connect_error);
				}else{
				$update = "UPDATE db_oneklick SET password='$pass' WHERE email='$email' ";
				$result = $db->query($update);
				var_dump($result);
					if ($result) {
					  echo "Password reset Successful";
					  header('location:../user/reset_success.php');
					} else {
					   array_push($errors, "Error updating record.$db->error");
					}
				$db->close();
				session_destroy();
				}
			}else{ 
				array_push($errors, "session email is not there");	
			}

		}

	}
	
 ?>