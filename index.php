<?php 
    include("vistas.php");
    include("Usuarios.php");
    session_start();

    if(isset($_REQUEST["accion"]))
        $accion = $_REQUEST["accion"];
    else
        $accion="mostrarLogin";

    switch($accion){
        case 'mostrarLogin':    
            Vistas::mostrar("login");
            break;
        case 'comprobarLogin':
            $resultado= Usuarios::logueoAdmin($_REQUEST["user"], $_REQUEST["pass"]);
            if($resultado){
                echo "Vista administrador";
            }else{
				$resultado= Usuarios::logueoUser($_REQUEST["user"], $_REQUEST["pass"]);
                if($resultado){
                    if(Usuarios::primerLogueo()){
                        Vistas::mostrar("formularioCurriculum");
                    }else{
                        
                    }
				}else{
					echo "nada por aqui";
				}
            }
            break;
        case 'registro':
            Vistas::mostrar("formularioRegistro");
            break;
        case 'registroUsuario':
            if(Usuarios::comprobarUsuario()){
                $datos["tipoMensaje"]="error";
                $datos["mensaje"]="El usuario ya existe o esta a la espera de que un admin lo apruebe";
                Vistas::mostrar("formularioRegistro",$datos);
            }else{ 
                $r = Usuarios::crearUsuario();
                $datos["tipoMensaje"]="correcto";
                if ($r){
				    $datos["mensaje"]="Usuario creado con exito, en los proximos dias un admin revisara su solicitud, sera informado en el email proporcionado";
					$datos["tipoMensaje"]="correcto";
					}else{
						$datos["tipoMensaje"]="error";
						$datos["mensaje"]="Error al crear usuario";
					}				
                Vistas::mostrar("login",$datos);
            }
                
            break;
    }
    

    

    
?>