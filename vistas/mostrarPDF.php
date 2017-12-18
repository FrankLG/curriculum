<?php
    require_once("vistas/pdf/mpdf.php");
    
    $info = $datos["tablaInfo"];
    $info = $info[0];
    
    $html= " <html>
	
	<body>
    Esto es una versión alpha para sacar un pdf de tu curriculum, WIP*<br><div id='vistausuario'><h2>Información personal</h2>"
            . "Nombre: ".$info['nombreal']." ".$info['apellido']."<br>"
            . "Telefono: ".$info['telefono']."<br>"
            . "Email: ".$info['correo']."<br>"
            . "Direccion: ".$info['direccion']."<br>"
            . "Localidad: ".$info['localidad']."<br>"
            . "Provincia: ".$info['provincia']."<br>"
            . "DNI: ".$info['dni']."<br>";


    $tablaTitulo = $datos["tablaTitulo"];
     $html.="<h2>Titulos</h2><table class='tabla'>";
     $html.="<tr><th>Titulo</th><th>Centro</th><th>Fecha fin</th><th>Tipo</th><tr>";
    foreach ($tablaTitulo as $dato){
         $html.="<tr><td>".$dato[1]."</td>";
        $html.= "<td>".$dato[2]."</td> ";
        $html.="<td>".$dato[3]."</td>";
		$html.= "<td>".$dato[4]." </td>";
         $html.="</tr>";
    }
    $html.="</table>";

     $tablaHabilidad = $datos["tablaHabilidad"];

   $html.= "<h2>Habilidades</h2><table class='tabla'>";
    $html.= "<tr><th>Habilidad</th><th>Descripción</th><tr>";
    foreach ($tablaHabilidad as $dato){
        $html.= "<tr><td>".$dato[1]."</td>";
        $html.= "<td>".$dato[2]."</td>";
        $html.= "</tr>";
    }
    $html.="</table>";

    $tablaIdioma = $datos["tablaIdioma"];
    $html.= "<h2>Idiomas</h2>";
    $html.= "<table class='tabla'>";
    $html.= "<tr><th>Idioma</th><th>Nivel</th><tr>";
    foreach ($tablaIdioma as $idioma){
        $html.= "<tr><td>".$idioma["nombreid"]." </td><td> ".$idioma["nombreni"]."</td>";  
        
        $html.= "</tr>";
        
    }
     $html.="</table>";

    
    $mpdf = new mPDF('c','A4');
    $mpdf->writeHTML($html);
	sleep(2);
    $mpdf->Output("report.pdf", "I");

    