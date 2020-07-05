<?php 


//Input parameters as given in the documentation
$request = "";
$param["username"] = "oakseos";
$param["api_key"] = "fdbe6aa0ab1b088fb207989b4ec2858a";
$param["network"] = "MTN";
$param["phoneNumber"] = "08011223344";
$param["amount"] = "200";
$param["trans_id"] = "12823327903";

//unique id, you can use time()
foreach($param as $key=>$val) //traverse through each member of the param array
{
$request .= $key . "=" . urlencode($val); //we have to urlencode the values
$request .= '&'; //append the ampersand (&) sign after each paramter/value pair
}
$len = strlen($request) - 1;
$request = substr($request, 0, $len); //remove the final ampersand sign from the request

$url = "https://mobilenig.com/API/airtime_test?"; //The URL given in the documentation without parameters
echo $url;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$url$request");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
$response = curl_exec($ch);
curl_close($ch);
//The success response will be in the JSON format below
// {"trans_id":"12823327903","details":{"network":"MTN","phone_number":"08011223344","amount":"200","status":"SUCCESSFUL","balance":"3000"}}

//decode response to get trans_id,network,phone_number,amount,status and balance
$array = json_decode($response, true); //decode the JSON response
// $trans_id = $array["trans_id"];
// $network = $array["details"]["network"];
// $phone_number = $array["details"]["phone_number"];
// $amount = $array["details"]["amount"];
// $status = $array["details"]["status"];
// $balance = $array["details"]["balance"];

var_dump($response);

// if($status == "SUCCESSFUL"){
// }else{
// //write failed code
// }



?>




