<?php 
    class HomeController{
        public function home(){
            $data["Title"] = "Home";
            require_once "views/Templates/Header.php";
            require_once "views/Templates/Navbar.php";
            require_once "views/HomeViews/Home.php";
            require_once "views/Templates/Footer.php";
        }

        public function homeMenu(){
            $data["Title"] = "Menu";
            require_once "views/Templates/Header.php";
            require_once "views/Templates/Navbar.php";
            require_once "views/HomeViews/Menu.php";
            require_once "views/Templates/Footer.php";
        }


    }
?>