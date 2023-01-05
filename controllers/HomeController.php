<?php
    
    class HomeController{
        public function __construct(){
            require_once "models/ApartmentModel.php";
            $this->apartmentModel = new ApartmentModel();
        }

        public function home(){
            $data["Title"] = "Home";
            
            $res = $this->apartmentModel->index();
            
            require_once "views/Templates/Header.php";
            require_once "views/Templates/Navbar.php";
            require_once "views/HomeViews/Home.php";
            require_once "views/Templates/Footer.php";
        }

        public function homeMenu(){
            $data["Title"] = "Menu";
            
            $res = $this->apartmentModel->index();
            
            require_once "config/Config.php";
            require_once "views/Templates/Header.php";
            require_once "views/Templates/Navbar.php";
            require_once "views/HomeViews/Menu.php";
            require_once "views/Templates/Footer.php";
        }


    }
?>