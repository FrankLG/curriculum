<?php

    $info = $datos["tablaInfo"];
    $info = $info[0];
    echo "<h3>Información personal</h3>"
            . "Nombre: ".$info['nombreal']." ".$info['apellido']."<br>"
            . "Telefono: ".$info['telefono']."<br>"
            . "Email: ".$info['correo']."<br>"
            . "Direccion: ".$info['direccion']."<br>"
            . "Localidad: ".$info['localidad']."<br>"
            . "Provincia: ".$info['provincia']."<br>"
            . "DNI: ".$info['dni']."<br>";
    if($info["activo"]==1){
        echo "activo";
    }else{
        echo "en paro";
    }
        echo "<form action='index.php'>"
            . "<input type='hidden' name='accion' value='modificarInfoPersonal'>"
            . "<input type='submit' value='Modificar Información'>"
            . "</form>";
