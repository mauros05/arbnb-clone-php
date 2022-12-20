<?php 
    class Connect {
        public function connect(){
            $db = mysqli_connect("localhost", "root", "", "arbnb-clone");
            if(!$db){
                echo "Error con la conexion de la base de Datos";
            }
            return $db;
        }
    }
?>