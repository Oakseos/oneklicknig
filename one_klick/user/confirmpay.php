<?php 

function getBalance(){
    //Input parameters as given in the documentation
    $request = "";
    $param["username"] = "oakseos";
    $param["api_key"] = "fdbe6aa0ab1b088fb207989b4ec2858a";

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
    print_r($response);
    curl_close($ch);
}
 ?>