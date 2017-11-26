<?php 

		include_once "bd.php";

    class Otros{    
        public static function modificarOtros($id){
            // sacamos variables para comprobar si venia vacio o no cada uno de los campos
            if(isset($_REQUEST["conducir"])){
                $conducir= true;
            }else{
                $conducir= false;
            }
            
            if(isset($_REQUEST["incorporacion"])){
                $incorporacion= true;
            }else{
                $incorporacion= false;
            }
            
            if(isset($_REQUEST["vehiculo"])){
                $vehiculo= true;
            }else{
                $vehiculo= false;
            }
            
            if(isset($_REQUEST["flexibilidad"])){
                $flexibilidad= true;
            }else{
                $flexibilidad= false;
            }
            
            if(isset($_REQUEST["geografica"])){
                $geografica= true;
            }else{
                $geografica= false;
            }

            $db = new BD();
            // si estaba marcado inserta la tupla correspondiente, sino estaba marcada la borra
            
            if($conducir){
                $sql = "UPDATE otrosalumno SET asignado=1 WHERE alumnoid=$id and otrosid=1";
            }else{
                $sql = "UPDATE otrosalumno SET asignado=0 WHERE alumnoid=$id and otrosid=1";
            }
            $db->ejecutar($sql);
            
            if($incorporacion){
                $sql = "UPDATE otrosalumno SET asignado=1 WHERE alumnoid=$id and otrosid=2";
            }else{
                $sql = "UPDATE otrosalumno SET asignado=0 WHERE alumnoid=$id and otrosid=2"; 
            }
            $db->ejecutar($sql);

            if($vehiculo){
                $sql = "UPDATE otrosalumno SET asignado=1 WHERE alumnoid=$id and otrosid=3";
            }else{
                $sql = "UPDATE otrosalumno SET asignado=0 WHERE alumnoid=$id and otrosid=3";
            }
            $db->ejecutar($sql);
            
            if($flexibilidad){
                $sql = "UPDATE otrosalumno SET asignado=1 WHERE alumnoid=$id and otrosid=4";
            }else{
                $sql = "UPDATE otrosalumno SET asignado=0 WHERE alumnoid=$id and otrosid=4"; 
            }
            $db->ejecutar($sql);
            
            if($geografica){
                $sql = "UPDATE otrosalumno SET asignado=1 WHERE alumnoid=$id and otrosid=5";
            }else{
                $sql = "UPDATE otrosalumno SET asignado=0 WHERE alumnoid=$id and otrosid=5";
            }
            $db->ejecutar($sql);
            
            return true;
            
        }    
        
        public static function getOtros($id){
            $db = new BD();
            $sql = "SELECT otrosid, asignado
            FROM otrosalumno
            WHERE alumnoid= $id";
            $tabla= $db->consultar($sql);

            return $tabla;
        }
        
        public static function crearOtros($id){
            $db = new BD();
            $db->ejecutar("INSERT INTO otrosalumno(alumnoid,otrosid,asignado) VALUES('$id', 1, 0)");
            $db->ejecutar("INSERT INTO otrosalumno(alumnoid,otrosid,asignado) VALUES('$id', 2, 0)");
            $db->ejecutar("INSERT INTO otrosalumno(alumnoid,otrosid,asignado) VALUES('$id', 3, 0)");
            $db->ejecutar("INSERT INTO otrosalumno(alumnoid,otrosid,asignado) VALUES('$id', 4, 0)");
            $db->ejecutar("INSERT INTO otrosalumno(alumnoid,otrosid,asignado) VALUES('$id', 5, 0)");
            
        }
        
    }
?>