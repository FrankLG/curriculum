<?php 

		include_once "bd.php";

    class Titulos{    
        public static function crearTitulo($id){
            $nombreti = $_REQUEST["nombreti"];
            $centro = $_REQUEST["centro"];
            $fechafin = $_REQUEST["fechafin"];
            $tipo = $_REQUEST["tipo"];

            $db = new BD();
            $sql = "INSERT INTO titulo(nombreti,centro,fechafin,tipo,alumnoid ) VALUES('$nombreti','$centro','$fechafin','$tipo', '$id')";
            
            if ($db->ejecutar($sql) == 1)
                $r = true;
            else
				$r =  false;
            return $r;
        }    
        
        public static function getTitulo($id){
            $db = new BD();
            $sql = "SELECT * FROM titulo WHERE alumnoid= $id";
            $tabla= $db->consultar($sql);
            return $tabla;
        }
        
         public static function borrarTitulo($id, $titulo){
            $db = new BD();
            $sql = "DELETE FROM titulo WHERE alumnoid=$id AND tituloid=$titulo";
            $db->ejecutar($sql);
        }
    }
?>