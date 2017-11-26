<?php
    // no hay manera de que se lleve el idusuario al index para modificar por id
    $tablaIdioma = $datos["tablaIdioma"];
    foreach ($tablaIdioma as $idioma){
        echo "Idioma: ".$idioma["nombreid"]." - ".$idioma["nombreni"];  
        echo "<a href='index.php?accion=borrarIdioma&id=".$idioma['alumnoid']."&idioma=".$idioma['idiomaid']."'>Borrar</a>";
        echo "<br>";
    }
?>