<?php
    class LoginController{
        public function Login(){
            $data["Title"] = "Login";
            require_once "views/Templates/Header.php";
            require_once "views/LoginViews/Login.php";
            require_once "views/Templates/Footer.php";
        }
    }
?>