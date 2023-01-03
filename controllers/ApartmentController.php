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

            require_once "config/Config.php";
            require_once "views/Templates/Header.php";
            require_once "views/Templates/Navbar.php";
            require_once "views/ApartmentViews/show.php";
            require_once "views/Templates/Footer.php";
        }

        public function new(){
            $data["Title"]      = "Nuevo Departamento";
            $data["Url_Jquery"] = "assets/js/CrearApartamento.js";
            
            require_once "config/Config.php";
            require_once "views/Templates/Header.php";
            require_once "views/Templates/Navbar.php";
            require_once "views/ApartmentViews/new.php";
            require_once "views/Templates/Footer.php";
        }

        public function create($data){
            $res = $this->apartmentModel->create($data);

            echo json_encode($res);
        }

        public function edit($id){
            $data["Title"]      = "Editar Departamento";
            // $data["Url_Jquery"] = "assets/js/CrearApartamento.js";

            $res = $this->apartmentModel->edit($id);

            var_dump($res);
            
            require_once "config/Config.php";
            require_once "views/Templates/Header.php";
            require_once "views/Templates/Navbar.php";
            require_once "views/ApartmentViews/edit.php";
            require_once "views/Templates/Footer.php";
        }

        public function update(){

        }

        public function delete(){

        }


        public function show_without_login($id){
            $res = $this->apartmentModel->show($id);

            require_once "views/Templates/Header.php";
            require_once "views/Templates/Navbar.php";
            require_once "views/ApartmentViews/show.php";
            require_once "views/Templates/Footer.php";
        }
    }
?>