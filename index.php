<?php

$method = $_SERVER['REQUEST_METHOD'];

if($method == ""){
	$requestBody = file_get_contents('php://input');
	$json = json_decode(requestBody);
	
	$text = $json->result->parameters->text;
	
	switch ($text){
		case 'hi':
		$speech = "Hi Vincent";
		break;
		
		default:
		$speech = "Sorry Vincent";
		break;
		
	}
	
	$response = new \stdClass();
	$response->speech = "";
	$response->displayText = "";
	$response->source = "webhook";
	echo json_decode($response);
}
else
{
	echo "Method not allowed";
}
