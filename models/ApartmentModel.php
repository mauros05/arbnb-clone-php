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
                    $data["id_apartment"][$i] = $rows["id_apartment"];
                    $data["nombre"][$i]       = $rows["nombre"];
                    $data["descripcion"][$i]  = $rows["descripcion"];
                    $data["precio"][$i]       = $rows["precio"];
                    $i ++;
                }
                return $data;
            } else {
                return "No se encontraron Departamentos";
            }
        }

        public function show($id){
            $query = "SELECT a.*, u.nombres, u.apellido_paterno, u.apellido_materno
                      FROM apartments a
                      INNER JOIN usuarios u
                      ON a.id_usuario = u.id_usuario
                      WHERE id_apartment=".$id;

            $queryRes = mysqli_query($this->db, $query);

            if(mysqli_num_rows($queryRes) > 0){
                while($rows = mysqli_fetch_assoc($queryRes)){
                    $data["id_apartment"]    = $rows["id_apartment"];
                    $data["nombre"]          = $rows["nombre"];
                    $data["descripcion"]     = $rows["descripcion"];
                    $data["precio"]          = $rows["precio"];
                    $data["nombre_completo"] = $rows["nombre"];
                }
                return $data;
            } else {
                return "No se encontro departamento";
            }
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