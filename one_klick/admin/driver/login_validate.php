<?php 

  $outp ='';
  $errors = array(); 
    session_start(); 



if($_SERVER['REQUEST_METHOD'] == 'POST'){

     // get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    //connect to db

    include('driver/database.php'); 
    // Sanitize form Data
       
        $username = $db->real_escape_string($username);
        $password = $db->real_escape_string($password);

        $password = md5($password);
          //check if the user is in db
        $checkUser = "SELECT * FROM db_oneklick WHERE username = '$username' AND password = '$password' ";



        $result = $db->query($checkUser); 
        // echo $db->error;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc(); 
            //var_dump($row);
            if($row['username'] == $username && $row['password'] == $password){ 
                $_SESSION ['username'] = $username;
                $_SESSION ['name'] = $row["fullname"];
                $_SESSION['phone'] = $row["phone"];
                $_SESSION['email'] = $row["email"];
                $_SESSION['ref'] =  $row["reference"]; 
                $_SESSION['password'] =  $password;
                $_SESSION['success'] = "Logged in successfully"; 
                // $_SESSION['start'] = time(); //time logged in
                // $_SESSION['expire'] = $_SESSION['start'] + (30 * 60);  
                
               

                header('location: index.php');
            }else { 
                  array_push($errors , "Records cannot be found ");
            }
        }else{ 
          array_push($errors , "Wrong username/password combination please try again. ");
        } 
  }
