<?php
    session_start();

    define('URL', 'http://localhost/arbnb-clone/');

    if(!isset($_SESSION["id_usuario"])){
        header("location:".URL."index.php");
    }

?>
