

<?php


$contador=2;
    $usuarios=$datos["usuarios"];
    if($datos["tipo"]=="validar"){
        $comprobacion=$usuarios["alumnos"];
        if(empty($comprobacion)){
            ?>
                <div id="noUsuarios">
                    <span id="textoNoUsuarios">No hay solicitudes actualmente</span>
                </div>
            <?php
        }else{
            echo "<div class='container bg-light' style='margin-top:10px;'>";
                    echo "<div class='row' style=' border:none;'>"; 
                foreach($usuarios as $personas){
                    foreach($personas as $persona){
                        echo "<div class='col-12 col-xs-12 col-md-12 col-lg-6 col-xl-6'>
                                <table class='table'>
                                    <tbody>
                                        <tr>
                                            <td rowspan='3' style='border:none; width:100px; height:120px;'><div style='width:100px; height:120px; background-image: url(imagenes/default.png); background-size: 100% 100%;'><img style='width: 100%; height: 100%;' src='imagenes/".$persona['alumnoid'].".jpg' alt=''></div></td>
                                            <td style='border:none;'>".$persona['nombreal']." ".$persona['apellido']."</td>
                                            <td rowspan='2' style='border:none;'>
                                                <form action='index.php' method='post'>
                                                    <input type='number' name='puntuacion' required='required' style='width: 100%;' min='0' max='10'>
                                                    <input type='hidden' name='accion' value='aceptarUsuario'>
                                                    <input type='hidden' name='id' value=".$persona['alumnoid']."></td>
                                                    <td><input id='validarImagen' type='image' src='vistas/css/comprobado.svg'>
                                               </form>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan='' style='border:none;'>".$persona['telefono']."</td>
                                            <td style='border:none;'>
                                                <a id='declinarRegistro' href='index.php?accion=borrarUsuario&id=".$persona['alumnoid']."'><img src='vistas/css/declinar.svg' id='iconodeclinar'></a>
                                           </td>
                                        </tr>
                                        <tr>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>";
                    }
                }
                echo "</div></div>"; 

        /*echo "<div id='todosUsuarios'>";
        echo "<table>";
        foreach($usuarios as $personas){
            foreach($personas as $persona){
                echo "<td><div class='usuario'><div style='width:120px; height:150px; display:inline-block; border: 1px solid black;'>Foto</div>";
                echo "<div class='info'><table class='tablaAdministración'><tr><td colspan='3'><span>".$persona['nombreal']."&nbsp;".$persona['apellido']."</span></td>";
                echo "<td><a id='declinarRegistro' href='index.php?accion=borrarUsuario&id=".$persona['alumnoid']."'><img src='vistas/css/declinar.svg' id='iconodeclinar'></a></td></tr>";
                echo "<tr><td><span>".$persona['correo']."</span></td>";
                echo "<td><span>".$persona['telefono']."</span></td>";
                echo "<tr><td><form action='index.php' method='post' style='margin-top:20px;'>"
                        . "<input type='number' name='puntuacion' required='required' min='0' max='10'>"
                        . "<input type='hidden' name='accion' value='aceptarUsuario'>"
                        . "<input type='hidden' name='id' value=".$persona['alumnoid']."></td>"
                        . "<td><input id='validarImagen' type='image' src='vistas/css/comprobado.svg'>"
                   . "</form></tr></table></div></div></td>";
                if($contador%2!=0){
                echo "</tr>";
                }

                $contador++;                
            }
        }*/
    }

    }else if($datos["tipo"]=="normal"){
   
        $comprobacion=$usuarios["alumnos"];
        if(empty($comprobacion)){
            ?>
                <div id="noUsuarios">
                    <span id="textoNoUsuarios">No hay usuarios en esta sección</span>
                </div>
            <?php
        }else{
                echo "<div class='container bg-light' style='margin-top:10px;'>";
                    echo "<div class='row' style='margin: auto; border:none;'>"; 
                foreach($usuarios as $personas){
                    foreach($personas as $persona){
                        echo "<div class='col-12 col-xs-12 col-md-12 col-lg-6 col-xl-6'>
                                <table class='table'>
                                    <tbody>
                                        <tr>
                                            <td rowspan='3' style='border:none; width:100px; height:120px;'><div style='width:100px; height:120px; background-image: url(imagenes/default.png); background-size: 100% 100%;'><img style='width: 100%; height: 100%;' src='imagenes/".$persona['alumnoid'].".jpg' alt=''></div></td>
                                            <td style='border:none;'>".$persona['nombreal']." ".$persona['apellido']."</td>
                                            <td style='border:none;'><span>Puntuación: ".$persona['puntuacion']."</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan='' style='border:none;'>".$persona['telefono']."</td>
                                            <td style='border:none;'><a id='modificarVAdmin' href='index.php?accion=modificarUsuario&id=".$persona['alumnoid']."'><img src='vistas/css/contrato.svg' id='iconomodificar'></a><a id='borrarVAdmin' href='#' onclick='javascript:Delete(".$persona['alumnoid'].")'><img src='vistas/css/basura.svg' id='iconoBasura'></a></td>
                                        </tr>
                                        <tr>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>";
                    }
                }
                echo "</div></div>";
                
        }
        echo "</div>";
        
    }else if($datos["tipo"]=="busqueda"){
        
        $comprobacion=$usuarios;
        if(empty($comprobacion)){
            ?>
                <div id="noUsuarios">
                    <span id="textoNoUsuarios">No hay nada.</span>
                </div>
            <?php
        }else{
        echo "<div class='container bg-light' style='margin-top:10px;'>";
                    echo "<div class='row' style=' border:none;'>"; 
                foreach($usuarios as $personas){
                    
                        echo "<div class='col-12 col-xs-12 col-md-12 col-lg-6 col-xl-6'>
                                <table class='table'>
                                    <tbody>
                                        <tr>
                                            <td rowspan='3' style='border:none; width:100px; height:120px;'><div style='width:100px; height:120px; background-image: url(imagenes/default.png); background-size: 100% 100%;'><img style='width: 100%; height: 100%;' src='imagenes/".$personas['alumnoid'].".jpg' alt=''></div></td>
                                            <td style='border:none;'>".$personas['nombreal']." ".$personas['apellido']."</td>
                                            <td style='border:none;'><span>Puntuación: ".$personas['puntuacion']."</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan='' style='border:none;'>".$personas['telefono']."</td>
                                            <td style='border:none;'><a id='modificarVAdmin' href='index.php?accion=modificarUsuario&id=".$personas['alumnoid']."'><img src='vistas/css/contrato.svg' id='iconomodificar'></a><a id='borrarVAdmin' href='#' onclick='javascript:Delete(".$personas['alumnoid'].")'><img src='vistas/css/basura.svg' id='iconoBasura'></a></td>
                                        </tr>
                                        <tr>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>";
                    
                }
                echo "</div></div>";
    }
    }else if($datos["tipo"]=="trabajando"){
        $comprobacion=$usuarios["alumnos"];
        
        if(empty($comprobacion)){
            ?>
                <div id="noUsuarios" style="margin-top: 10px;" >
                    <span id="textoNoUsuarios">No hay usuarios en esta sección</span>
                </div>
            <?php
        }else{
            echo "<div class='container bg-light' style='margin-top:10px;'>";
                    echo "<div class='row' style=' border:none;'>"; 
                foreach($usuarios as $personas){
                    foreach($personas as $persona){
                        echo "<div class='col-12 col-xs-12 col-md-12 col-lg-6 col-xl-6'>
                                <table class='table'>
                                    <tbody>
                                        <tr>
                                            <td rowspan='3' style='border:none; width:100px; height:120px;'><div style='width:100px; height:120px; background-image: url(imagenes/default.png); background-size: 100% 100%;'><img style='width: 100%; height: 100%;' src='imagenes/".$persona['alumnoid'].".jpg' alt=''></div></td>
                                            <td style='border:none;'>".$persona['nombreal']." ".$persona['apellido']."</td>
                                            <td style='border:none;'><span>Puntuación: ".$persona['puntuacion']."</span></td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan='' style='border:none;'>".$persona['telefono']."</td>
                                            <td style='border:none;'><a id='modificarVAdmin' href='index.php?accion=modificarUsuario&id=".$persona['alumnoid']."'><img src='vistas/css/contrato.svg' id='iconomodificar'></a><a id='borrarVAdmin' href='#' onclick='javascript:Delete(".$persona['alumnoid'].")'><img src='vistas/css/basura.svg' id='iconoBasura'></a></td>
                                        </tr>
                                        <tr>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>";
                    }
                }
                echo "</div></div>";    
        }
        
    }

?>
<script>
function Delete(id) {
     if (confirm('Estas seguro de Eliminar este registro?')){
            document.location.href='index.php?accion=borrarUsuario&id='+id+'';
        }
}
</script>

