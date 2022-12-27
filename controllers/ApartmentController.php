<?php 
    class ApartmentController {
        public function __construct(){
            require_once "models/ApartmentModel.php";
            $this->apartmentModel = new ApartmentModel();
        }

        public function index(){
            $this->apartmentModel->index();
        }

        public function show(){

        }

        public function new(){

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