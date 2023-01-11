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
                    $datos["id_apartment"]     = $row["id_apartment"];
                    $datos["nombre_ap"]        = $row["nombre"];
                    $datos["direccion"]        = $row["direccion"];
                    $datos["descripcion"]      = $row["descripcion"];
                    $datos["precio"]           = $row["precio"];
                    $datos["nombre_us"]        = $row["nombres"]." ".$row["apellido_paterno"]." ".$row["apellido_materno"];
                }
            }

            $queryUser = "SELECT * 
                          FROM usuarios 
                          WHERE id_usuario=".$data["idu"];

            $resQueryUser = mysqli_query($this->db, $queryUser);

            if(mysqli_num_rows($resQueryUser)> 0){
                while($row = mysqli_fetch_assoc( $resQueryUser)){
                    $datos["nombre_us_booking"]        = $row["nombres"]." ".$row["apellido_paterno"]." ".$row["apellido_materno"];
                }
            }

            return $datos;
        }

        public function create($data){
            $query = "INSERT INTO bookings(id_usuario, id_aparment, fecha_inicio, fecha_termino, num_dias, precio_total)
                             VALUES(".$data["id_user_booking"].",
                                    ".$data["id_apartment"].",
                                    '".$data["start-date"]."',
                                    '".$data["end-date"]."',
                                    ".$data["num_dias"].",
                                    ".$data["precio_total"]."
                                    )";

            $resQuery = mysqli_query($this->db, $query);

            if(!$resQuery){
                $res["flag"] = 0;
                $res["res_message"] = "Hubo un error al realizar el booking";
                return $res;
            } else {
                $res["flag"] = 1;
                $res["res_message"] = "Reserva realizada";
                return $res;
            }
        }
    }
?>