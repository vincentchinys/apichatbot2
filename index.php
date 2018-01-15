<?php $method = $_SERVER['REQUEST_METHOD']; 

if($method == 'POST'){ 

	$requestBody = file_get_contents('php://input'); 
	$json = json_decode($requestBody); 
	$text = $json->result->parameters->text; 

	switch ($text) { 

	case 'hi': 
	$speech = "hi vince";
	break; 

	case 'bye': 
	$speech = "Bye, good night"; 
	break; 
	
	case 'anything': 
	$speech = "Yes, you can type anything here."; 
	break; 

	default: $speech = "Sorry ."; 
	break; 

	} 
	$response = new \stdClass(); 
	// Aqui defino el objeto php 
	$response->speech = $speech; 
	$response->displayText = $speech; 
	$response->source = "webhook"; 
	echo json_encode($response); 
	// Aqui devuelvo el Objeto php en formato JSON 
	
} else 
{ echo "Method not allowed"; } ?>
