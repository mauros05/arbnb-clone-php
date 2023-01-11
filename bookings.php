<?php
    require_once 'controllers/BookingsController.php';

    $BookingsController = new BookingsController;

    $Method = $_SERVER["REQUEST_METHOD"];

    if($Method == "GET"){
        switch ($_GET["ac"]){
        case 'r':
            $BookingsController->new($_GET);
            break;
        }
    } else {
        $BookingsController->create($_POST);
    }

?>