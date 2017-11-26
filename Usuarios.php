<?php 

		include_once "bd.php";

    class Usuarios{
        public static function comprobarUsuario(){
            $dni = $_REQUEST["dni"];
            
            $db = new BD();
            $sql = "SELECT * FROM alumno WHERE dni='$dni'";
            $resultado = $db->consultar($sql);
            
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
            $sql = "INSERT INTO alumno(dni,nombreal,apellido,telefono,correo,direccion,localidad,provincia,activo,passal, validado) VALUES('$dni','$nombreal','$apellido','$telefono','$correo','$direccion','$localidad','$provincia','$activo','$passal', 0)";
            
            if ($db->ejecutar($sql) == 1)
								$r = true;
						else
								$r =  false;
					  return $r;
        }    
        
        public static function logueoAdmin($dni, $contra){
            $db= new BD();
            // primero comprobamos que si es un administrador
            $sql= "SELECT * FROM admin WHERE username='$dni' AND passad='$contra'";
            //echo $sql;
            $resultado = $db->consultar($sql);
            
            if(count($resultado) > 0){
                return true;
            }else{
                return false;
            }
        }
		
	public static function logueoUser($dni, $contra){
            $db= new BD();
            // primero comprobamos que si es un administrador
            $sql= "SELECT * FROM alumno WHERE dni='$dni' AND passal='$contra'";
            //echo $sql;
            $resultado = $db->consultar($sql);
            
            if(count($resultado) > 0){
                
                $sql = "SELECT validado FROM alumno WHERE dni='$dni'";
                $resultado = $db->consultar($sql);
                $resultado=$resultado[0];
                if($resultado['validado']==0){
                    return false;
                    
                }else{
                    $sql = "SELECT alumnoid FROM alumno WHERE dni='$dni' ";
                $resultado = $db->consultar($sql);
                
                $resultado = $resultado["0"];
                $_SESSION['id']=$resultado["0"];    
                return true;
                }
                
            }else{
                return false;
            }
        }
        public static function usuariosParo(){
                $db = new BD();
            
                $sql = "SELECT * FROM alumno WHERE activo=0 and validado=1 ORDER BY puntuacion desc";
                $tabla["alumnos"]= $db->consultar($sql);
                
                return $tabla;
        }
        public static function usuariosSinValidar(){
            $db = new BD();
            
                $sql = "SELECT * FROM alumno WHERE validado=0 order by alumnoid";
                $tabla["alumnos"]= $db->consultar($sql);
                
                return $tabla;
        }
        
        public static function validarUsuario(){
            $db = new BD();
            $id=$_REQUEST["id"];
            $sql = "UPDATE alumno SET validado='1' where alumnoid='$id'";
            $db->ejecutar($sql);
        }

        public static function borrarUsuario(){
            $db = new BD();
            $id=$_REQUEST["id"];
            $sql = "DELETE FROM alumno WHERE alumnoid=$id";
            $db->ejecutar($sql);
            $sql = "DELETE FROM habilidad WHERE alumnoid=$id";
            $db->ejecutar($sql);
            $sql = "DELETE FROM idiomaalumno WHERE alumnoid=$id";
            $db->ejecutar($sql);
            $sql = "DELETE FROM otrosalumno WHERE alumnoid=$id";
            $db->ejecutar($sql);
            $sql = "DELETE FROM titulo WHERE alumnoid=$id";
            $db->ejecutar($sql);
            
        }
        public static function busqueda(){
            
            $db = new BD();
            $busqueda=$_REQUEST["buscar"];
            $sql="SELECT * FROM alumno JOIN habilidad ON alumno.alumnoid=habilidad.alumnoid JOIN idiomaalumno ON alumno.alumnoid=idiomaalumno.alumnoid JOIN idioma ON idiomaalumno.idiomaid=idioma.idiomaid JOIN otrosalumno ON alumno.alumnoid=otrosalumno.alumnoid JOIN otros ON otrosalumno.otrosid=otros.otrosid JOIN nivel ON idiomaalumno.nivelid=nivel.nivelid where provincia LIKE '%$busqueda%' OR localidad LIKE '%$busqueda%' OR nombreal LIKE '%$busqueda%' OR apellido LIKE '%$busqueda%' OR nombreha LIKE '%$busqueda%' OR nombreid LIKE '%$busqueda%' OR nombreni LIKE '$busqueda'  ";
            $tabla=$db->consultar($sql);                    
            return $tabla;
        }
        
        
    }
    
