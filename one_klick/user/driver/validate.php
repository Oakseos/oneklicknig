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

        // $tr_checkUser = "SELECT * FROM transactions WHERE username = '$username' ";

        // $outp = $db->query($tr_checkUser);



        // //check if sum of money in wallet 
        // $accountDeposit = $db->query("SELECT SUM(amount) AS sum FROM income_fund WHERE username = '$username' ");
        // $row1 = $accountDeposit->fetch_assoc();               
        // $sumFunds = $row1['sum']; 
        //     //check if sum of money spent 

        // $accExpense = $db->query("SELECT SUM(amount) AS sum FROM expenditures  WHERE username = '$username' ");
        // $row2 = $accExpense->fetch_assoc();
        // $sumSpent = $row2['sum']; 

        // $t_Count = $db->query( "SELECT COUNT(username) AS count FROM transactions  WHERE username = '$username' ");
         
        // $row3 = $t_Count->fetch_assoc();
        // $transactionCount = $row3['count'];

        // //available balance
        // $balance = ($sumFunds - $sumSpent);

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
                $_SESSION['id'] = $row["id"]; 
                // $_SESSION['success'] = "Logged in successfully"; 
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

  

















  // //get form data
  //   $username = $_POST['username'];
  //   $password = $_POST['password'];
              

  //       $db = NEW Mysqli('localhost', 'root', '','one_klick_nig');

  //       // Sanitize form Data
       
  //       $username = $db->real_escape_string($username);
  //       $password = $db->real_escape_string($password);

  //       $checkUser = " SELECT * FROM db_onKlick WHERE username = '$username' AND password = '$password' "; 

  //       $result = mysqli_query($db, $checkUser);

  //       $num = mysqli_num_rows($result);

  //       if($num == 1) { 
  //         echo "Welcome $username";
  //         header('location: index.html' );

  //       }else { 
  //         header('location: login.php');
  //       }


  //     }
?>