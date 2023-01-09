<?php 
    class BookingsModel {
        public function __construct(){
            require_once "connect/Connect.php";
            $dbConnect = new Connect();
            $this->db  = $dbConnect->connect();
        }

        public function new($data){
            $queryApartment = "SELECT a.*, 
                                      u.nombres,
                                      u.apellido_paterno,
                                      u.apellido_materno
                               FROM apartments a 
                               INNER JOIN usuarios u 
                               ON u.id_usuario = a.id_usuario 
                               WHERE id_apartment =".$data["idap"];
       
            $resQueryApartment = mysqli_query($this->db, $queryApartment);

            $datos = NULL;
            
            if(mysqli_num_rows($resQueryApartment)> 0){
                while($row = mysqli_fetch_assoc($resQueryApartment)){
                    $datos["nombre_ap"]        = $row["nombre"];
                    $datos["direccion"]        = $row["direccion"];
                    $datos["descripcion"]      = $row["descripcion"];
                    $datos["precio"]           = $row["nombre"];
                    $datos["nombre_us"]        = $row["nombres"];
                    $datos["apellido_paterno"] = $row["apellido_paterno"];
                    $datos["apellido_materno"] = $row["apellido_materno"];
                }
            }

            $queryUser = "SELECT * 
                          FROM usuarios 
                          WHERE id_usuario=".$data["idu"];

            $resQueryUser = mysqli_query($this->db, $queryUser);

            if(mysqli_num_rows($resQueryUser)> 0){
                while($row = mysqli_fetch_assoc( $resQueryUser)){
                    $datos["nombre_us_booking"]        = $row["nombres"];
                    $datos["apellido_paterno_booking"] = $row["apellido_paterno"];
                    $datos["apellido_materno_booking"] = $row["apellido_materno"];
                }
            }

            return $datos;
        }

        public function create(){
            
        }
    }
?>