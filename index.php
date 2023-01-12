<?php
    require_once "controllers/HomeController.php";
    
    $HomeController = new HomeController();

    $method = $_SERVER["REQUEST_METHOD"];

    if($method == "GET"){
        if(isset($_GET["ac"])){
            switch ($_GET["ac"]) {
            case 'h':
                $HomeController->homeMenu();
                break;
            }
        }else{
            $HomeController->home();
        }
    }

?>