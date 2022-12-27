<?php
    require_once "config/Config.php";
    class LogOut {
        function logOut(){
            unset($_SESSION["id_usuario"]);
            header("location: http://localhost/arbnb-clone/");
        }
    }


    $LogOut = new LogOut;

    $Method = $_SERVER["REQUEST_METHOD"];

    if($Method == "GET"){
        $LogOut->logOut();
    }
?>