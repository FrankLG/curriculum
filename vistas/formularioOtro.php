<?php 
    $tablaOtro = $datos["tablaOtro"];
    


echo "<form  action='index.php'>";
    // la idea de esto es que te saque un array de todos los otros que tiene un usuario y luego buscar el correspondiente otro en el array y salga marcao... pero de momento no va jeje
    if (in_array("1", $tablaOtro)) {
        echo "Carné de conducir <input type='checkbox' name='conducir' checked>  <br>";
    }else{
        echo "Carné de conducir <input type='checkbox' name='conducir' >  <br>";
    }

    if (in_array("2", $tablaOtro)) {
        echo "Incorporación inmediata <input type='checkbox' name='incorporacion' checked><br>";
    }else{
        echo "Incorporación inmediata <input type='checkbox' name='incorporacion'><br>";
    }


    echo "vehiculo propio<input type='checkbox' name='vehiculo'><br>";
    echo "Flexibilidad horaria<input type='checkbox' name='flexibilidad'><br>";
    echo "Disponibilidad geografica <input type='checkbox' name='geografica'><br>";
 
    echo "<input type='hidden' name='accion' value='insertarOtros'>";
    echo "<input type='submit' value='Modifica Otros'>";
echo "</form>";
    
?>