<?php
    require_once("/pdf/mpdf.php");
    
    $info = $datos["tablaInfo"];
    $info = $info[0];
    
    $html= " *Esto es una versión alpha para sacar un pdf de tu curriculum, WIP*<br><div id='vistausuario'><h3>Información personal</h3>"
            . "Nombre: ".$info['nombreal']." ".$info['apellido']."<br>"
            . "Telefono: ".$info['telefono']."<br>"
            . "Email: ".$info['correo']."<br>"
            . "Direccion: ".$info['direccion']."<br>"
            . "Localidad: ".$info['localidad']."<br>"
            . "Provincia: ".$info['provincia']."<br>"
            . "DNI: ".$info['dni']."<br>";


    $tablaTitulo = $datos["tablaTitulo"];
     $html.="<table class='tabla'>";
     $html.="<tr><th>Titulo</th><th>Centro</th><th>Fecha fin</th><th>Tipo</th><th>Opciones</th><tr>";
    foreach ($tablaTitulo as $dato){
         $html.="<tr><td>".$dato[1]."</td>";
        $html.= "<td>".$dato[2]."</td> ";
        $html.="<td>".$dato[3]."</td>";
		$html.= "<td>".$dato[4]." </td>";
         $html.="</tr>";
    }
    $html.="</table>";

    $mpdf = new mPDF('c','A4');
    $mpdf->writeHTML($html);
    $mpdf->Output("report.pdf", "I");

    