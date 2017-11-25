<?php 
    class vistas {
        public static function mostrar($nombreVista, $datos = null){
            include_once("vistas/header.php");
			$arrayVistas = explode(",", $nombreVista);
			foreach ($arrayVistas as $vista) include_once("vistas/$vista.php");
            include_once("vistas/footer.php");
        }
    }
?>