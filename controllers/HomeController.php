<?php 
    class HomeController{
        public function home(){
            $data["Title"] = "Home";
            require_once "views/Templates/Header.php";
            require_once "views/Templates/Navbar.php";
            require_once "views/HomeViews/Home.php";
            require_once "views/Templates/Footer.php";
        }


    }
?>