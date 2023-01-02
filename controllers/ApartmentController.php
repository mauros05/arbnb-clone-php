<?php 
    class ApartmentController {
        public function __construct(){
            require_once "models/ApartmentModel.php";
            $this->apartmentModel = new ApartmentModel();
        }

        public function index(){
            $this->apartmentModel->index();
        }

        public function show($id){
            $res = $this->apartmentModel->show($id);
            
            require_once "views/Templates/Header.php";
            require_once "views/Templates/Navbar.php";
            require_once "views/ApartmentViews/show.php";
            require_once "views/Templates/Footer.php";
        }

        public function new(){
            require_once "views/Templates/Header.php";
            require_once "views/Templates/Navbar.php";
            require_once "views/ApartmentViews/new.php";
            require_once "views/Templates/Footer.php";
        }

        public function create(){

        }

        public function edit(){
            
        }

        public function update(){

        }

        public function delete(){

        }
    }
?>