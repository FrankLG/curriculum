<?php 
    include("vistas.php");
    include("Usuarios.php");
    include("Titulos.php");
    include("Habilidades.php");
    include("Idiomas.php");
    include("Otros.php");
    session_start();

    if(isset($_REQUEST["accion"]))
        $accion = $_REQUEST["accion"];
    else
        $accion="mostrarLogin";

    switch($accion){
        case 'mostrarLogin':    
            Vistas::mostrar("login");
            break;
        
        // Para reconocer que tipo de usuario se loguea
        case 'comprobarLogin':
            $resultado= Usuarios::logueoAdmin($_REQUEST["user"], $_REQUEST["pass"]);
            if($resultado){
                $datos["tipo"]="normal";
                $datos["usuarios"]=Usuarios::usuariosParo();
                Vistas::mostrar("vistaAdministrador",$datos);
            }else{
		$resultado= Usuarios::logueoUser($_REQUEST["user"], $_REQUEST["pass"]);
                if($resultado){
                   	mainUsuario();
		}else{
                    echo "El usuario no existe o aun no ha sido aceptado por los administradores";
		}
            }
            break;
            
        case 'modificarUsuario':
            if(isset($_REQUEST["id"])){
                mainUsuarioAdmin($_REQUEST['id']);
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
            
        case "insertarTitulo":
            $resultado= Titulos::crearTitulo($_SESSION['id']);
			if($resultado){
				$msj = "Se ha insertado el título correctamente";
            }else{
                $msj = "se ha insertado el titulo incorrectamente";
            }
			mainUsuario($msj);
        break;
            
        case "insertarHabilidad":
            $resultado= Habilidades::crearHabilidad($_SESSION['id']);
            if($resultado){
				$msj = "Se ha insertado el habilidad correctamente";
            }else{
                $msj = "se ha insertado el habilidad incorrectamente";
            }
			mainUsuario($msj);
        break;
            
        case "insertarIdioma":
            $resultado= Idiomas::crearIdioma($_SESSION['id']);
            if($resultado){
				$msj = "Se ha insertado el idioma correctamente";
            }else{
                $msj = "se ha insertado el idioma incorrectamente";
            }
			mainUsuario($msj);
        break;
            
        case "insertarOtros":
            $resultado= Otros::modificarOtros($_SESSION['id']);
            if($resultado){
				$msj = "Otros modificado con exito";
            }
			mainUsuario($msj);
        break;
        case "borrarUsuario":
                Usuarios::borrarUsuario();
                $datos["usuarios"]=Usuarios::usuariosParo();
                Vistas::mostrar("vistaAdministrador",$datos);
        break;
        case "vistaAdmin":
                $datos["tipo"]="normal";
                $datos["usuarios"]=Usuarios::usuariosParo();
                Vistas::mostrar("vistaAdministrador",$datos);
            break;
    
        case "busqueda":
            
            $datos["usuarios"]=Usuarios::busqueda();
            Vistas::mostrar("vistaAdministrador", $datos);
            
            break;
        case "validarUsuarios":
            $datos["tipo"]="validar";
            $datos["usuarios"]=Usuarios::usuariosSinValidar();
            Vistas::mostrar("vistaAdministrador",$datos);
            
            break;
        case "aceptarUsuario":
            Otros::crearOtros($_REQUEST['id']);
            Usuarios::validarUsuario();
            $datos["tipo"]="validar";
            $datos["usuarios"]=Usuarios::usuariosSinValidar();
            $idalumno= Vistas::mostrar("vistaAdministrador",$datos);
            
            break;
            
        default:
            echo "Error 404, La página solicitada no ha sido encontrada.";
    }
    


function mainUsuario($msj = null) {
	$tabla["tablaTitulo"]= Titulos::getTitulo($_SESSION['id']);

	$tabla["tablaHabilidad"] = Habilidades::getHabilidad($_SESSION['id']);

	$tabla["mensaje"] = $msj;

	$tabla["tablaIdioma"]=Idiomas::getIdioma($_SESSION['id']);
    
    $tabla["tablaOtro"] = Otros::getOtros($_SESSION['id']);
	Vistas::mostrar("mostrarTitulo,formularioTitulo,mostrarHabilidad,formularioHabilidad,mostrarIdioma,formularioIdioma,formularioOtro", $tabla);	
}

function mainUsuarioAdmin($id) {
	$tabla["tablaTitulo"]= Titulos::getTitulo($id);

	$tabla["tablaHabilidad"] = Habilidades::getHabilidad($id);

	$tabla["tablaIdioma"]=Idiomas::getIdioma($id);
    
        $tabla["tablaOtro"] = Otros::getOtros($id);
	Vistas::mostrar("mostrarTitulo,formularioTitulo,mostrarHabilidad,formularioHabilidad,mostrarIdioma,formularioIdioma,formularioOtro", $tabla);	
}
    

    
?>