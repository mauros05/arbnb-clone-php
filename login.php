<?php
    require_once "controllers/LoginController.php";
    
    $LoginController = new LoginController;

    $method = $_SERVER["REQUEST_METHOD"];

    if($method == "GET"){ 
        switch ($_GET["ac"]) {
        case 'lg':
            $LoginController->Login();
            break;   
        }
        
    } else {

    }



?>