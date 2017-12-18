<?php
    $tablaIdioma = $datos["tablaIdioma"];
    echo "<br><h2>Idiomas</h2>";
    echo "<table class='tabla'>";
    echo "<tr><th>Idioma</th><th>Nivel</th><th>Opción</th><tr>";
    foreach ($tablaIdioma as $idioma){
        echo "<tr><td>".$idioma["nombreid"]." </td><td> ".$idioma["nombreni"]."</td>";  
        echo "<td><a href='index.php?accion=borrarIdioma&id=".$idioma['alumnoid']."&idioma=".$idioma['idiomaid']."'><img src='vistas/css/basura.svg' id='iconoBasura'></a>";
        echo "</td></tr>";
        
    }

?>

