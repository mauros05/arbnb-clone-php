<?php 
    class LoginModel{
        public function __construct(){
            require_once "connect/Connect.php";
            $dbConnect = new Connect();
            $this->db = $dbConnect->connect();
        }

        public function guardarRegistro($data){
            $queryBuscar    = "SELECT * 
                               FROM usuarios 
                               WHERE correo ='".$data["email"]."'";
            $resQueryBuscar = mysqli_query($this->db, $queryBuscar);

            if(mysqli_num_rows($resQueryBuscar)  >= 1) {
                $res["error_correo_exist"] = "Este correo ya esta registrado";            
                return $res;
            }

            $queryRegistrar = "INSERT INTO usuarios(nombres, apellido_paterno, apellido_materno, correo, password, usuario) 
                                            VALUES('".$data["name"]."', 
                                                   '".$data["first_name"]."', 
                                                   '".$data["last_name"]."', 
                                                   '".$data["email"]."',
                                                   '".$data["password"]."', 
                                                   '".$data["username"]."')";

            $resQueryRegistrar = mysqli_query($this->db, $queryRegistrar);
            
            if($resQueryRegistrar == TRUE){
                $res["msg_true"] = "El registro fue exitoso";
            } else {
                $res["msg_false"] = "Hubo un error en el registro";
            }

            return $res;
        }

    }
?>