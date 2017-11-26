<?php 

		include_once "bd.php";

    class Habilidades{    
        public static function crearHabilidad($id){
            $nombreha = $_REQUEST["nombreha"];
            $descripcion = $_REQUEST["descripcion"];

            $db = new BD();
            $sql = "INSERT INTO habilidad(nombreha,descripcion,alumnoid ) VALUES('$nombreha','$descripcion','$id')";
            
            if ($db->ejecutar($sql) == 1)
                $r = true;
            else
				$r =  false;
            return $r;
            
        }    
        
        public static function getHabilidad($id){
            $db = new BD();
            $sql = "SELECT * FROM habilidad WHERE alumnoid= $id";
            $tabla= $db->consultar($sql);
            return $tabla;
        }
        
        public static function borrarHabilidad($id, $habilidad){
            $db = new BD();
            $sql = "DELETE FROM habilidad WHERE alumnoid=$id AND habilidadid=$habilidad";
            $db->ejecutar($sql);
        }
    }
?>