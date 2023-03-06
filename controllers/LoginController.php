<?php
    class LoginController{
        public function __construct(){
            require_once "models/LoginModel.php";
            $this->LoginModel = new LoginModel();
        }
        public function Login(){
            $data["Title"]      = "Login";
            $data["Url_css"]    = "assets/css/login.css";
            $data["Url_Jquery"] = "assets/js/Login.js";

            require_once "views/Templates/Header.php";
            require_once "views/LoginViews/Login.php";
            require_once "views/Templates/Footer.php";
        }

        public function Register(){
            $data["Title"]      = "Register";
            $data["Url_css"]    = "assets/css/registration.css";
            $data["Url_Jquery"] = "assets/js/Register.js";
            
            require_once "views/Templates/Header.php";
            require_once "views/LoginViews/Register.php";
            require_once "views/Templates/Footer.php";
        }

        public function saveRegister($data){
            $FirstName = explode(" ",$data["name"]);
            $data["username"] = $FirstName[0] . $data["first_name"];
       
            $res = $this->LoginModel->saveRegister($data);

            echo json_encode($res);
        }

        public function validLogin($data){
            $res = $this->LoginModel->validLogin($data);
            $resValidation = NULL;

            if(!empty($res["id_usuario"])){
                session_start();
                $_SESSION = $res;
                $resValidation["flag"] = 1; 
            } else {
                $resValidation["msg_error"] = $res;
                $resValidation["flag"] = 0; 
            }

            echo json_encode($resValidation);
            exit;
        }

    }
?>