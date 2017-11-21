<?php 

		include_once "bd.php";

    class Usuarios{
        public static function comprobarUsuario(){
            $dni = $_REQUEST["dni"];
            
            $db = new BD();
            $sql = "SELECT * FROM alumno WHERE dni='$dni'";
            $resultado = $db->consulta($sql);
            
            if(count($resultado) > 0){
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
            
            $db = new BD();
            $sql = "INSERT INTO alumno(dni,nombreal,apellido,telefono,correo,direccion,localidad,provincia,activo,passal) VALUES('$dni','$nombreal','$apellido','$telefono','$correo','$direccion','$localidad','$provincia','$activo','$passal')";
            
            if ($db->ejecutar($sql) == 1)
								$r = true;
						else
								$r =  false;
					  return $r;
            
        }    
        
        public static function logueoAdmin($user, $pass){
            $db= new BD();
            // primero comprobamos que si es un administrador
            $sql= "SELECT * FROM admin WHERE username='$user' AND passad='$pass'";
            //echo $sql;
            $resultado = $db->consulta($sql);
            
            if(count($resultado) > 0){
                return true;
            }else{
                return false;
            }
        }
		
		public static function logueoUser($user, $pass){
            $db= new BD();
            // primero comprobamos que si es un administrador
            $sql= "SELECT * FROM alumno WHERE dni='$user' AND passal='$pass'";
            //echo $sql;
            $resultado = $db->consulta($sql);
            
            if(count($resultado) > 0){
                return true;
            }else{
                return false;
            }
        }
        
    }
    
?>