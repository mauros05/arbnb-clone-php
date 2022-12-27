<?php 
    class ApartmentModel{
        public function __construct(){
            require_once "connect/Connect.php";
            $dbConnect = new Connect();
            $this->db  = $dbConnect->connect();
        }

        public function index(){
            $query = "SELECT * 
                      FROM apartments";

            $queryRes = mysqli_query($this->db, $query);

            if(mysqli_num_rows($queryRes) > 0){
                $i = 0;
                while($rows = mysqli_fetch_assoc($queryRes)){
                    $data["nombre"][$i]      = $rows["nombre"];
                    $data["descripcion"][$i] = $rows["descripcion"];
                    $data["precio"][$i]      = $rows["precio"];
                    $i ++;
                }
                return $data;
            } else {
                return "No se encontraron Departamentos";
            }
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