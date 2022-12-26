<?php
    class LoginController{
        public function __construct(){
            require_once "models/LoginModel.php";
            $this->LoginModel = new LoginModel();
        }
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

        public function guardarRegistro($data){
            // Para generar el nombre de Usuario
            $PrimerNombre = explode(" ",$data["name"]);
            $data["username"] = $PrimerNombre[0] . $data["first_name"];
       
           $res = $this->LoginModel->guardarRegistro($data);

        echo json_encode($res);
        exit;
        }

    }
?>