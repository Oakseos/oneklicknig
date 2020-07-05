<?php 
function smsAlert($user, $messageText) {
    //http://api.ebulksms.com:8080/sendsms?username=your_email_address&apikey=your_apikey&sender=your_sender_name&messagetext=your_message_here&flash=0&recipients=23480...,23470...

    //Input parameters as given in the documentation
     //append @ sign
    $request = "";
    $param = [];
    $param["username"] = "oakseos@gmail.com";
    $param["apikey"] = $GLOBALS['smsApi'];
    $param["sender"] = $user;
    $param["messagetext"] = $messageText;
    $param["flash"] = 0; 
    $param["recipients"] = $GLOBALS['recipients'];
   

    //return $network.$phone.$amount.$transaction_id;
    //unique id, you can use time()
    foreach($param as $key=>$val) //traverse through each member of the param array .5g
    {
    $request .=$key."=".$val; //we have to urlencode the values
    $request .='&'; //append the ampersand (&) sign after each paramter/value pair
    }
    $len = strlen($request) - 1;
    $request = substr($request, 0, $len); //remove the final ampersand sign from the request


    $url = "http://api.ebulksms.com:8080/sendsms?".$request; //The URL given in the documentation without parameters
    //return $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$url$request");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
    $response = (curl_exec($ch));
    curl_close($ch);

    //return $url;

   return $response->;

   // OCBz2VGsIG78KjXEMt5viJf1wlD6erou4scTTkxGnKyLCsNl747rUH3eT8WXnRDq2G2vSiRwUxX7ZZ6aUei3kQjvUfywTUhlm3FH
    
    //08060762264






   $message = $messageText;
$senderid = $user;
$to = '2348069100525';
$token = 'OCBz2VGsIG78KjXEMt5viJf1wlD6erou4scTTkxGnKyLCsNl747rUH3eT8WXnRDq2G2vSiRwUxX7ZZ6aUei3kQjvUfywTUhlm3FH';
$baseurl = 'https://smartsmssolutions.com/api/json.php?';

$sms_array = array 
  (
  'sender' => $senderid,
  'to' => $to,
  'message' => $message,
  'type' => '0',
  'routing' => 3,
  'token' => $token
);

$params = http_build_query($sms_array);
$ch = curl_init(); 

curl_setopt($ch, CURLOPT_URL,$baseurl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

$response = json_decode(curl_exec($ch));

curl_close($ch);

return $response->code; // response code
}

 ?>