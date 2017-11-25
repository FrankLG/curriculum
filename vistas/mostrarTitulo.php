<?php
    // no hay manera de que se lleve el idusuario al index para modificar por id
    echo "<h3>Formación reglada</h3>";
    $tablaTitulo = $datos["tablaTitulo"];
    foreach ($tablaTitulo as $dato){
        echo "idtitulo: ".$dato[0]."|||   ";
        echo "nombre titulo: ".$dato[1]."|||     ";
        echo "Centro :".$dato[2]." |||     ";
        echo "fecha fin :".$dato[3]."|||      ";
		echo "Tipo:".$dato[4]." |||      ";
		//echo "idalumno :".$dato[5]."       "; 
        echo "<br>";
    }
?>