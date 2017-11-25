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
                $sql = "INSERT INTO otrosalumno(alumnoid,otrosid) VALUES('$id', 1)";
            }else{
                $sql = "DELETE FROM otrosalumno WHERE otrosid= '1'"; 
            }
            $db->ejecutar($sql);
            
            if($incorporacion){
                $sql = "INSERT INTO otrosalumno(alumnoid,otrosid) VALUES('$id', 2)";
            }else{
                $sql = "DELETE FROM otrosalumno WHERE otrosid= '2'"; 
            }
            $db->ejecutar($sql);
           
            if($vehiculo){
                $sql = "INSERT INTO otrosalumno(alumnoid,otrosid) VALUES('$id', 3)";
            }else{
                $sql = "DELETE FROM otrosalumno WHERE otrosid= '3'"; 
            }
            $db->ejecutar($sql);
            
            if($flexibilidad){
                $sql = "INSERT INTO otrosalumno(alumnoid,otrosid) VALUES('$id', 4)";
            }else{
                $sql = "DELETE FROM otrosalumno WHERE otrosid= '4'"; 
            }
            $db->ejecutar($sql);
            
            if($geografica){
                $sql = "INSERT INTO otrosalumno(alumnoid,otrosid) VALUES('$id', 5)";
            }else{
                $sql = "DELETE FROM otrosalumno WHERE otrosid= '5'"; 
            }
            $db->ejecutar($sql);
            
            return true;
            
        }    
        
        public static function getOtros($id){
            $db = new BD();
            $sql = "SELECT otrosid
            FROM otrosalumno
            WHERE alumnoid= $id";
            $tabla= $db->consultar($sql);

            return $tabla;
        }
    }
?>