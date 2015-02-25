<?php

//process client request (through URL)
header("Content-Type:application/json");

include("functions.php");

 if(!empty($_GET['name'])){

$name = $_GET['name'];

$info = get_info($name);

if(empty ($info))
deliver_response(200,"person not found",NULL);
//if person info is not found

else
	
	//respond with person
	deliver_response(200,"person found",$info);


 }
else

{
	// invalid request
	deliver_response(400,"Invalid request!",NULL);

}

function deliver_response($status,$status_message,$data){
	
header("HTTP/1.1 $status $status_message");

$response['status'] = $status;
$response['status_message'] = $status_message;
$response['data'] = $data;


$json_response = json_encode($response);
echo $json_response;

}
?>
