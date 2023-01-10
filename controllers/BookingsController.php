<?php 
    class BookingsController{
        public function __construct(){
            require_once 'models/BookingsModel.php';
            $this->BookingsModel = new BookingsModel;
        }

        public function new($data){
            $res = $this->BookingsModel->new($data);
            $data["Title"]      = "Booking Apartment";
            // $data["Url_Jquery"] = "assets/js/ShowApartamento.js";

            require_once "config/Config.php";
            require_once "views/Templates/Header.php";
            require_once "views/Templates/Navbar.php";
            require_once "views/BookingViews/new.php";
            require_once "views/Templates/Footer.php";
        }

        public function create(){

        }
    }
?>