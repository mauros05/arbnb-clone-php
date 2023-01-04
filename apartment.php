<?php
    require_once "controllers/ApartmentController.php";

    $ApartmentController = new ApartmentController;

    $Method = $_SERVER["REQUEST_METHOD"];

    if($Method == "GET"){
        switch ($_GET["ac"]) {
        case 'swl':
            $ApartmentController->show_without_login($_GET["idap"]);
            break;
        case 's':
            $ApartmentController->show($_GET["idap"]);
            break;
        case 'n':
            $ApartmentController->new();
            break;
        case 'e':
            $ApartmentController->edit($_GET["idap"]);
            break;
        }
    } else {
        switch ($_POST["accion"]) {
        case 'ca':
            $ApartmentController->create($_POST);
            break;
        case 'ea':
            $ApartmentController->update($_POST);
            break;
        case 'ba':
            $ApartmentController->delete($_POST["id_apartment"]);
            break;
        }
    }


?>