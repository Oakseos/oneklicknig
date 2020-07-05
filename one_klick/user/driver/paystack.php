<?php


$errors = array(); 
    session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

         $email = $_POST['email'];
         $amount = $_POST['amount'];
    

        $curl = curl_init();


        $email = $email;
        $amount = $amount;  //the amount in kobo. This value is actually NGN 300

        // url to go to after payment
        $callback_url = '../index.php';  

          curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode([
            'amount'=>$amount,
            'email'=>$email,
            'callback_url' => $callback_url
          ]),
          CURLOPT_HTTPHEADER => [
            "authorization: Bearer sk_test_38feffda9787c92ace8e248c73f47317d0e3a7bc", //replace this with your own test key
            "content-type: application/json",
            "cache-control: no-cache"
          ],
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        if($err){
          // there was an error contacting the Paystack API
          die('Curl returned error: ' . $err);
        }
}