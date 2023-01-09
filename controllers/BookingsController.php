<?php 
    class BookingsController{
        public function __construct(){
            require_once 'models/BookingsModel.php';
            $this->BookingsModel = new BookingsModel;
        }

        public function new(){

        }

        public function create(){

        }
    }
?>