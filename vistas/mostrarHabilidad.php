<?php
    // no hay manera de que se lleve el idusuario al index para modificar por id
    echo "<h3>Habilidades y conocimientos extra</h3>";

    $tablaHabilidad = $datos["tablaHabilidad"];
    foreach ($tablaHabilidad as $dato){
        //echo "idtitulo: ".$dato[0]."|||   ";
        echo "Nombre habilidad: ".$dato[1]."|||     ";
        echo "descripción :".$dato[2]." |||     ";
        echo "<a href='index.php?accion=borrarHabilidad&id=".$dato['alumnoid']."&habilidad=".$dato['habilidadid']."'>Borrar</a>";
        echo "<br>";
    }
?>