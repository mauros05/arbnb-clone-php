<?php
    require_once "controllers/ApartmentController.php";

    $ApartmentController = new ApartmentController;

    $Method = $_SERVER["REQUEST_METHOD"];

    if($Method == "GET"){
        switch ($_GET["ac"]) {
        case 's':
            $ApartmentController->show($_GET["idap"]);
            break;
        }
    } else {

    }


?>