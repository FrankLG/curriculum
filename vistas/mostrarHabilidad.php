<?php
    // no hay manera de que se lleve el idusuario al index para modificar por id
    echo "<br><h2>Habilidades y conocimientos extra</h2>";

    $tablaHabilidad = $datos["tablaHabilidad"];

    echo "<table class='tabla'>";
    echo "<tr><th>Habilidad</th><th>Descripción</th><th>Opción</th><tr>";
    foreach ($tablaHabilidad as $dato){
        echo "<tr><td>".$dato[1]."</td>";
        echo "<td>".$dato[2]."</td>";
        echo "<td><a href='index.php?accion=borrarHabilidad&id=".$dato['alumnoid']."&habilidad=".$dato['habilidadid']."'><img src='vistas/css/basura.svg' id='iconoBasura'></a></td></tr>";
    }
?>

