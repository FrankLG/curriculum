<?php 
    
    class Usuarios{
        public static function comprobarUsuario(){
            $dni = $_REQUEST["dni"];
            
            $db = new Mysqli("localhost","root","","curriculumcv");
            $sql = "SELECT * FROM alumno WHERE dni='$dni'";
            
            $resultado = $db->query($sql);
            
            if($resultado->num_rows == 1){
              return true;
            }else{
              return false;
            }   
        }
        
        public static function crearUsuario(){
            $dni = $_REQUEST["dni"];
            $nombreal = $_REQUEST["nombreal"];
            $apellido = $_REQUEST["apellido"];
            $passal = $_REQUEST["passal"];
            $telefono = $_REQUEST["telefono"];
            $correo = $_REQUEST["correo"];
            $provincia = $_REQUEST["provincia"];
            $localidad = $_REQUEST["localidad"];
            $direccion = $_REQUEST["direccion"];
            $activo = $_REQUEST["activo"];
            
            $db = new Mysqli("localhost","root","","curriculumcv");
            
            $sql = "INSERT INTO alumno(dni,nombreal,apellido,telefono,correo,direccion,localidad,provincia,activo,passal) VALUES('$dni','$nombreal','$apellido','$telefono','$correo','$direccion','$localidad','$provincia','$activo','$passal')";
            
            $db->query($sql);
            
        }    
    }
    
?>