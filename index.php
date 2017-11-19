<?php 
    include("vistas.php");
    include("Usuarios.php");
    session_start();

    if(isset($_REQUEST["accion"]))
        $accion = $_REQUEST["accion"];
    else
        $accion="registro";

    switch($accion){
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
								}
								else{
									$datos["tipoMensaje"]="error";
									$datos["mensaje"]="Error al crear usuario";
								}
									
                Vistas::mostrar("formularioRegistro",$datos);
            }
                
            break;
    }
    

    

    
?>