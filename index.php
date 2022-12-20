<?php
require_once "controllers/HomeController.php";
$HomeController = new HomeController();

$method = $_SERVER["REQUEST_METHOD"];

if($method == "GET"){
    $HomeController->home();
}

?>