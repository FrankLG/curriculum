<?php 
    class vistas {
        public function mostrar($nombreVista, $datos = null){
						include_once("vistas/header.php");
            include_once("vistas/$nombreVista.php");
        		include_once("vistas/footer.php");
				}
    }


?>