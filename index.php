<?php
   $method = $_SERVER['REQUEST_METHOD'];
   // Process only when method is POST 
   If ($method == "POST"){ 
        echo "test";
   }
   else
   {
        echo "Method not allowed 1";
   }
   ?>
