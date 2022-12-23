<?php
    class LoginController{
        public function Login(){
            $data["Title"]   = "Login";
            $data["Url_css"] = "assets/css/login.css";
            require_once "views/Templates/Header.php";
            require_once "views/LoginViews/Login.php";
            require_once "views/Templates/Footer.php";
        }

        public function Registro(){
            $data["Title"]      = "Registro";
            $data["Url_css"]    = "assets/css/registration.css";
            $data["Url_Jquery"] = "assets/js/Registro.js";
            
            require_once "views/Templates/Header.php";
            require_once "views/LoginViews/Registro.php";
            require_once "views/Templates/Footer.php";
        }
    }
?>