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
                echo "Vista administrador";
            }else{
				$resultado= Usuarios::logueoUser($_REQUEST["user"], $_REQUEST["pass"]);
                if($resultado){
                   	mainUsuario();
				}else{
					echo "No existes en la bd";
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
        
            
        default:
            echo "Emosido engañao";
    }
    


function mainUsuario($msj = null) {
	$tabla["tablaTitulo"]= Titulos::getTitulo($_SESSION['id']);

	$tabla["tablaHabilidad"] = Habilidades::getHabilidad($_SESSION['id']);

	$tabla["mensaje"] = $msj;

	$tabla["tablaIdioma"]=Idiomas::getIdioma($_SESSION['id']);
    
    $tabla["tablaOtro"] = Otros::getOtros($_SESSION['id']);
	Vistas::mostrar("mostrarTitulo,formularioTitulo,mostrarHabilidad,formularioHabilidad,mostrarIdioma,formularioIdioma,formularioOtro", $tabla);	
}
    

    
?>