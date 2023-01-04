<?php 
    class ApartmentModel{
        public function __construct(){
            require_once "connect/Connect.php";
            $dbConnect = new Connect();
            $this->db  = $dbConnect->connect();
        }

        public function index(){
            $query = "SELECT * 
                      FROM apartments
                      WHERE status = 1";

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
                    $data["direccion"]       = $rows["direccion"];
                    $data["descripcion"]     = $rows["descripcion"];
                    $data["precio"]          = $rows["precio"];
                    $data["id_usuario"]      = $rows["id_usuario"];
                    $data["nombre_completo"] = $rows["nombres"]." ".$rows["apellido_paterno"]." ".$rows["apellido_materno"];
                }
                return $data;
            } else {
                return "No se encontro departamento";
            }
        }

        public function create($data){
            $query = "INSERT INTO apartments(nombre, direccion, descripcion, precio, id_usuario) 
                                  VALUES('".$data["nombre"]."',
                                         '".$data["direccion"]."',
                                         '".$data["descripcion"]."', 
                                         ".$data["precio"].", 
                                         ".$data["id_usuario"].")";
            $queryRes = mysqli_query($this->db, $query);
            
            if(!$queryRes){
                $res["flag"] = 0;
                $res["res_message"] = "Hubo un error al guardar el apartamento";
                return $res;
            }else {
                $res["flag"] = 1;
                $res["res_message"] = "Guardado Exitoso";
                return $res;
            }
        }

        public function edit($id){
            $query = "SELECT * 
                      FROM apartments 
                      WHERE id_apartment =".$id;

            $queryRes = mysqli_query($this->db, $query);

            if(mysqli_num_rows($queryRes) > 0){
                while($rows = mysqli_fetch_assoc($queryRes)){
                    $data["id_apartment"]    = $rows["id_apartment"];
                    $data["nombre"]          = $rows["nombre"];
                    $data["direccion"]       = $rows["direccion"];
                    $data["descripcion"]     = $rows["descripcion"];
                    $data["precio"]          = $rows["precio"];
                }
                return $data;
            } else {
                return "No se encontro el Apartamento";
            }
        }

        public function update($data){
            $queryVerificar = "SELECT * 
                               FROM apartments 
                               WHERE id_apartment=".$data["id_apartment"]."
                               AND nombre='".$data["nombre"] ."'
                               AND descripcion='".$data["descripcion"] ."'
                               AND direccion='".$data["direccion"] ."'
                               AND precio=".$data["precio"] ." 
                               AND id_usuario=".$data["id_usuario"];

            $resQueryVerificar = mysqli_query($this->db, $queryVerificar);

            if(mysqli_num_rows($resQueryVerificar) == 0) {
                $queryUpdate = "UPDATE apartments SET nombre='".$data["nombre"] ."',
                                                      descripcion='".$data["descripcion"] ."',
                                                      direccion='".$data["direccion"] ."',
                                                      precio=".$data["precio"]." 
                                                      WHERE id_apartment=".$data["id_apartment"];

            
                $resEditar = mysqli_query($this->db, $queryUpdate);

                if(!$resEditar){
                    $res["flag"] = 0;
                    $res["res_message"] = "Hubo un error al editar el apartamento";
                    return $res;
                }else {
                    $res["flag"] = 1;
                    $res["res_message"] = "Edicion Exitosa";
                    return $res;
                }
            } else {
                $res["flag"] = 0;
                $res["res_message"] = "El apartamento ya se encuentra registrado";
                return $res;
            }
        }

        public function delete(){

        }
    }
?>