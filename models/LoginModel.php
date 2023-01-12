<?php 
    class LoginModel{
        public function __construct(){
            require_once "connect/Connect.php";
            $dbConnect = new Connect();
            $this->db = $dbConnect->connect();
        }

        public function saveRegister($data){
            $queryBuscar    = "SELECT * 
                               FROM usuarios 
                               WHERE correo ='".$data["email"]."'";

            $resQueryBuscar = mysqli_query($this->db, $queryBuscar);

            if(mysqli_num_rows($resQueryBuscar)  >= 1) {
                $res["error_correo_exist"] = "This email was already registered";            
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
                $res["msg_true"] = "The register was successful";
            } else {
                $res["msg_false"] = "There was an error in the register";
            }

            return $res;
        }

        public function validLogin($data){
            $query = "SELECT * 
                      FROM usuarios 
                      WHERE correo='".$data["correo"]."' AND password='".$data["password"]."'";

            $resQuery = mysqli_query($this->db, $query);

            if(mysqli_num_rows($resQuery) > 0){
                while($rows = mysqli_fetch_assoc($resQuery)){
                    $res["id_usuario"] = $rows["id_usuario"];
                    $res["username"]   = $rows["usuario"];
                }
                return $res;
            } else {
                return  "El correo o password es erroneo";
            }

        }

    }
?>