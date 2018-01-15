<?php
   $method = $_SERVER['REQUEST_METHOD'];
   // Process only when method is POST 
   If ($method == "POST"){ 
        $requestBody =  file_get_contents ('php://input');
        $json = json_decode($requestBody);
        $text = $json->result->pareneters->text;
         
     
        echo "test";
   }
   else
   {
        echo "Method not allowed 12";
   }
   ?>
