<?php 
        
require('driver/function_pass.php'); 

function query($transaction_id){ 
	//Input parameters as given in the documentation
    $request = "";
    $param = [];
    $param["username"] = $GLOBALS['username_mobileNig'];
    $param["api_key"] = $GLOBALS['Mobile_api'];
    $param["trans_id"] = $transaction_id;

   //return $network.$phone.$amount.$transaction_id;
    //unique id, you can use time()
    foreach($param as $key=>$val) //traverse through each member of the param array
    {
    $request .= $key . "=" . urlencode($val); //we have to urlencode the values
    $request .= '&'; //append the ampersand (&) sign after each paramter/value pair
    }
    $len = strlen($request) - 1;
    $request = substr($request, 0, $len); //remove the final ampersand sign from the request

    $url = "https://mobilenig.com/API/airtime_premium_query?". $request . "&return_url=https://mywebsite.com/order_status.asp"; //The URL given in the documentation without parameters
    //return $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$url$request");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
    $response = json_decode(curl_exec($ch));
    curl_close($ch);
    return $response;
}
   
function getBalance(){
    //Input parameters as given in the documentation
    $request = "";
    $param["username"] = $GLOBALS['username_mobileNig'];
    $param["api_key"] = $GLOBALS['Mobile_api'];
    

    //unique id, you can use time()
    foreach($param as $key=>$val) //traverse through each member of the param array
    {
    $request .= $key . "=" . urlencode($val); //we have to urlencode the values
    $request .= '&'; //append the ampersand (&) sign after each paramter/value pair
    }
    $len = strlen($request) - 1;
    $request = substr($request, 0, $len); //remove the final ampersand sign from the request

    $url = "https://mobilenig.com/API/balance?"; //The URL given in the documentation without parameters
    echo $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$url$request");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
    $response = json_decode(curl_exec($ch));
    curl_close($ch);
    return $response;
}

function buyAirtime($network, $phone, $amount, $transaction_id){
    //Input parameters as given in the documentation
    $request = "";
    $param = [];
    $param["username"] = $GLOBALS['username_mobileNig'];
    $param["api_key"] = $GLOBALS['Mobile_api'];
    $param["network"] = $network;
    $param["amount"] = $amount;
    $param["phoneNumber"] = $phone;
    $param["trans_id"] = $transaction_id;



    //return $network.$phone.$amount.$transaction_id;
    //unique id, you can use time()
    foreach($param as $key=>$val) //traverse through each member of the param array
    {
    $request .= $key . "=" . urlencode($val); //we have to urlencode the values
    $request .= '&'; //append the ampersand (&) sign after each paramter/value pair
    }
    $len = strlen($request) - 1;
    $request = substr($request, 0, $len); //remove the final ampersand sign from the request

    $url = "https://mobilenig.com/API/airtime?". $request . "&return_url=https://mywebsite.com/order_status.asp"; //The URL given in the documentation without parameters
    //return $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$url$request");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
    $response = json_decode(curl_exec($ch));
    curl_close($ch);
    return $response;
}

function buyData($network, $phone, $price, $product_code, $transaction_id ){
    //Input parameters as given in the documentation
    $request = "";
    $param = [];
    $param["username"] = $GLOBALS['username_mobileNig'];
    $param["api_key"] = $GLOBALS['Mobile_api'];
    $param["network"] = $network;
    $param["phoneNumber"] = $phone;
    $param["product_code"] = $product_code;
    $param["price"] = $price;
    $param["trans_id"] = $transaction_id;

    //return $network.$phone.$amount.$transaction_id;
    //unique id, you can use time()
    foreach($param as $key=>$val) //traverse through each member of the param array .5g
    {
    $request .= $key . "=" . urlencode($val); //we have to urlencode the values
    $request .= '&'; //append the ampersand (&) sign after each paramter/value pair
    }
    $len = strlen($request) - 1;
    $request = substr($request, 0, $len); //remove the final ampersand sign from the request

    $url = "https://mobilenig.com/API/data?". $request . "&return_url=https://mywebsite.com/order_status.asp"; //The URL given in the documentation without parameters
    //return $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$url$request");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
    $response = json_decode(curl_exec($ch));
    curl_close($ch);

    return $response;
}

function cableData($service, $smartCard){
    //Input parameters as given in the documentation
    $request = "";
    $param = [];
    $param["username"] = $GLOBALS['username_mobileNig'];
    $param["api_key"] = $GLOBALS['Mobile_api'];
    $param["number"] = $smartCard;
    $param["service"] = $service;
   
    foreach($param as $key=>$val) //traverse through each member of the param array
    {
    $request .= $key . "=" . urlencode($val); //we have to urlencode the values
    $request .= '&'; //append the ampersand (&) sign after each paramter/value pair
    }

    
    $len = strlen($request) - 1;
    $request = substr($request, 0, $len); //remove the final ampersand sign from the request

    $url = "https://mobilenig.com/API/bills/user_check?". $request . "&return_url=https://mywebsite.com/order_status.asp"; //The URL given in the documentation without parameters
    //return $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$url$request");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
    $response = json_decode(curl_exec($ch));
    curl_close($ch);
    //return $url;
    return $response;
}

function buyDstv($smartCard, $product_code, $customer_name, $customer_number, $price, $transaction_id ){
    //Input parameters as given in the documentation
    $request = "";
    $param = [];
    $param["username"] =  $GLOBALS['username_mobileNig'];
    $param["api_key"] = $GLOBALS['Mobile_api'];
    $param["smartno"] = $smartCard;
    $param["product_code"] = $product_code;
    $param["customer_name"] = $customer_name;
    $param["customer_number"] = $customer_number;
    $param["price"] = $price;
    $param["trans_id"] = $transaction_id;

    //return $network.$phone.$amount.$transaction_id;
    //unique id, you can use time()
    foreach($param as $key=>$val) //traverse through each member of the param array .5g
    {
    $request .= $key . "=" . urlencode($val); //we have to urlencode the values
    $request .= '&'; //append the ampersand (&) sign after each paramter/value pair
    }
    $len = strlen($request) - 1;
    $request = substr($request, 0, $len); //remove the final ampersand sign from the request

    $url = "https://mobilenig.com/API/bills/dstv_test?". $request . "&return_url=https://mywebsite.com/order_status.asp"; //The URL given in the documentation without parameters
    //return $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$url$request");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
    $response = json_decode(curl_exec($ch));
    curl_close($ch);

    return $response;
} 

function buyGotv($smartCard, $product_code, $customer_name, $customer_number, $price, $transaction_id ){
    //Input parameters as given in the documentation
    $request = "";
    $param = [];
    $param["username"] = $GLOBALS['username_mobileNig'];
    $param["api_key"] = $GLOBALS['Mobile_api'];
    $param["smartno"] = $smartCard;
    $param["product_code"] = $product_code;
    $param["customer_name"] = $customer_name;
    $param["customer_number"] = $customer_number;
    $param["price"] = $price;
    $param["trans_id"] = $transaction_id;

    //return $network.$phone.$amount.$transaction_id;
    //unique id, you can use time()
    foreach($param as $key=>$val) //traverse through each member of the param array .5g
    {
    $request .= $key . "=" . urlencode($val); //we have to urlencode the values
    $request .= '&'; //append the ampersand (&) sign after each paramter/value pair
    }
    $len = strlen($request) - 1;
    $request = substr($request, 0, $len); //remove the final ampersand sign from the request

    $url = "https://mobilenig.com/API/bills/gotv_test?". $request . "&return_url=https://mywebsite.com/order_status.asp"; //The URL given in the documentation without parameters
    //return $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$url$request");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
    $response = json_decode(curl_exec($ch));
    curl_close($ch);

    return $response;
}

function buyStartimes($smartCard, $product_code, $customer_name,  $price, $transaction_id){
    //Input parameters as given in the documentation
    $request = "";
    $param = [];
    $param["username"] = $GLOBALS['username_mobileNig'];
    $param["api_key"] = $GLOBALS['Mobile_api'];
    $param["smartno"] = $smartCard;
    $param["product_code"] = $product_code;
    $param["customer_name"] = $customer_name;
    $param["price"] = $price;
    $param["trans_id"] = $transaction_id;

    //return $network.$phone.$amount.$transaction_id;
    //unique id, you can use time()
    foreach($param as $key=>$val) //traverse through each member of the param array .5g
    {
    $request .= $key . "=" . urlencode($val); //we have to urlencode the values
    $request .= '&'; //append the ampersand (&) sign after each paramter/value pair
    }
    $len = strlen($request) - 1;
    $request = substr($request, 0, $len); //remove the final ampersand sign from the request

    $url = "https://mobilenig.com/API/bills/startimes?". $request . "&return_url=https://mywebsite.com/order_status.asp"; //The URL given in the documentation without parameters
    //return $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$url$request");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
    $response = json_decode(curl_exec($ch));
    curl_close($ch);

    //return $url;

   return $response;
}

function smsAlert($user, $messageText) {

    //Input parameters as given in the documentation
     //append @ sign
    $request = "";
    $param = [];

    $param["username"] = $GLOBALS['nigeriabulksmsUsername'];
    $param["password"] = $GLOBALS['nigeriabulksmsPassword'];
    $param["message"] = $messageText;
    $param["sender"] = $user;
    
    //$param["flash"] = 0; 
    $param["mobiles"] = $GLOBALS['recipients'];
   

    //return $network.$phone.$amount.$transaction_id;
    //unique id, you can use time()
    foreach($param as $key=>$val) //traverse through each member of the param array .5g
    {
    $request .=$key."=".$val; //we have to urlencode the values
    $request .='&'; //append the ampersand (&) sign after each paramter/value pair
    }
    $len = strlen($request) - 1;
    $request = substr($request, 0, $len); //remove the final ampersand sign from the request


    $url = "http://portal.nigeriabulksms.com/api/?".$request; //The URL given in the documentation without parameters
    //return $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "$url$request");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
    $response = json_decode(curl_exec($ch));
    curl_close($ch);

    //return $url;

   return $response;
    
    
}




 ?>