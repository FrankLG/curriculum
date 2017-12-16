



<?php
$contador=2;
    $usuarios=$datos["usuarios"];
    if($datos["tipo"]=="validar"){
        echo "<div class='divsMenu'><a class='botonesMenu' href='index.php?accion=vistaAdmin2'><span>Vista ocupados</span></a></div>";
        echo "<div class='divsMenu'><a class='botonesMenu' href='index.php?accion=vistaAdmin'><span>Vista parados</span></a></div></div>";
        $comprobacion=$usuarios["alumnos"];
        if(empty($comprobacion)){
            ?>
                <div id="noUsuarios">
                    <span id="textoNoUsuarios">No hay solicitudes actualmente</span>
                </div>
            <?php
        }else{
        echo "<div id='todosUsuarios'>";
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
        }
    }

    }else if($datos["tipo"]=="normal"){
   /*echo "<div class='divsMenu'><a class='botonesMenu' href='index.php?accion=vistaAdmin2'><span>Vista ocupados</span></a></div>";*/
?>
<div id="apaisado">
    <nav class="navbar navbar-expand-md bg-light navbar-light">
        <a class='navbar-brand' href="#"><img src="vistas/css/escudo.png" alt="logo" style="width: 40px;"></a>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?accion=vistaAdmin">Parados</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="index.php?accion=vistaAdmin2">Ocupados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?accion=validarUsuarios">Validar</a>
                </li>
            </ul>
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                    
                </li>
                <li class="nav-item">
                    <a class='nav-brand' id='botonDesconectar' href='index.php?accion=desconectar'><img src="vistas/css/off.svg" style="width: 40px"></a>
                </li>
            </ul>   
    </nav>
    <style type="text/css">
        .borde{
            border: 1px solid black;
        }
    </style>

        <!--<div class='divsMenu'><a class='botonesMenu' href='index.php?accion=validarUsuarios'><span>Vista Validación</span></a></div>
        <div id="divFormularioBusqueda" ><form class="formularioBusqueda" action='index.php' method="post">
          <input type='hidden' name='accion' value='busqueda' >
          <input type='text' name='buscar' required="required">
          <input type='image' name="imagen" src="vistas/css/lupa.svg" style="width:15px; height: 15px; border:none;">

        </form></div></div>-->
        
        <?php
        $comprobacion=$usuarios["alumnos"];
        if(empty($comprobacion)){
            ?>
                <div id="noUsuarios">
                    <span id="textoNoUsuarios">No hay usuarios en esta sección</span>
                </div>
            <?php
        }else{
                echo "<div class='container-fluid bg-light' style='margin-top:10px;'>";
                    echo "<div class='row'>"; 
                foreach($usuarios as $personas){
                    foreach($personas as $persona){
                        echo "<div class='col-12 col-xs-12 col-md-12 col-lg-12 col-xl-12'>
                                <table class='table'>
                                    <tbody>
                                        <tr>
                                            <td rowspan='2' style='border:none;'><div style='width:100px; height:120px; background-image: url(imagenes/default.png); background-size: 100% 100%;'><img style='width: 100%; height: 100%;' src='imagenes/".$persona['alumnoid'].".jpg' alt=''></div></td>
                                            <td style='border:none;'><span>".$persona['nombreal']." ".$persona['apellido']."</span></td>
                                            <td style='border:none;'><span>Puntuación</span></td>
                                            <td style='border:none;'><a id='borrarVAdmin' href='' onclick='javascript:Delete(".$persona['alumnoid'].")'><img src='vistas/css/basura.svg' id='iconoBasura'></a></td>
                                        </tr>
                                        <tr>
                                            <td style='border:none;'><span>".$persona['correo']."</span></td>
                                            <td style='border:none;'><span>".$persona['puntuacion']."</span></td>
                                            <td style='border:none;'><a id='modificarVAdmin' href='index.php?accion=modificarUsuario&id=".$persona['alumnoid']."'><img src='vistas/css/contrato.svg' id='iconomodificar'></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>";
                        /*echo "<td><div class='usuario'><div style='width:120px; height:150px; display:inline-block; border: 1px solid black;'>Foto</div>";
                        echo "<div class='info'><table class='tablaAdministración'><tr><td colspan='2'><span>".$persona['nombreal']."&nbsp;".$persona['apellido']."</span></td>";
                        echo "<td><span>Puntuacion</span></td>";
                        echo "<td><a id='borrarVAdmin' href='#' onclick='javascript:Delete(".$persona['alumnoid'].")'><img src='vistas/css/basura.svg' id='iconoBasura'></a></td></tr>";
                        echo "<tr><td><span>".$persona['telefono']."</span></td>";
                        echo "<td><span>".$persona['correo']."</span></td>";
                        echo "<td align='center'><span> ".$persona['puntuacion']."</span></td>";
                        echo "<td><a id='modificarVAdmin' href='index.php?accion=modificarUsuario&id=".$persona['alumnoid']."'><img src='vistas/css/contrato.svg' id='iconomodificar'></a></tr></table></div></div></td>";*/
                    }
                }
                echo "</div></div>";
                
        }
        echo "</div>";
        echo '<div id="warning-message">';
        echo "<div style='padding-top: 20px;'>
        <img style='width:100%;' src='vistas/css/smartphone.svg'></div>";
        echo 'Esta web solo está disponible en horizontal, por favor gire su smartphone';
        echo '</div>';
    }else if($datos["tipo"]=="busqueda"){
        echo "<div class='divsMenu'><a class='botonesMenu' href='index.php?accion=validarUsuarios'><span>Vista Validación</span></a></div>";
        echo "<div class='divsMenu'><a class='botonesMenu' href='index.php?accion=vistaAdmin2'><span>Vista ocupados</span></a></div>";
        echo "<div id='divFormularioBusqueda'><form class='formularioBusqueda' action='index.php' method='post'>";
        echo "<input type='hidden' name='accion' value='busqueda' >";
        echo "<input type='text' name='buscar' required='required'> <input type='image' name='imagen' src='vistas/css/lupa.svg' style='width:15px; height: 15px; border:none;'>";
        echo "</form></div></div>";
        
        $comprobacion=$usuarios;
        if(empty($comprobacion)){
            ?>
                <div id="noUsuarios">
                    <span id="textoNoUsuarios">No hay nada.</span>
                </div>
            <?php
        }else{
        echo "<div id='todosUsuarios'>";
        echo "<table>";
        foreach($usuarios as $personas){
                echo "<td><div class='usuario'><div style='width:120px; height:150px; display:inline-block; border: 1px solid black;'>Foto</div>";
                echo "<div class='info'><table class='tablaAdministración'><tr><td colspan='2'><span>".$personas['nombreal']."&nbsp;".$personas['apellido']."</span></td>";
                echo "<td><span>Puntuacion</span></td>";
                echo "<td><a id='borrarVAdmin' href='#' onclick='javascript:Delete(".$personas['alumnoid'].")'><img src='vistas/css/basura.svg' id='iconoBasura'></a></td></tr>";
                echo "<tr><td><span>".$personas['telefono']."</span></td>";
                echo "<td><span>".$personas['correo']."</span></td>";
                echo "<td align='center'><span> ".$personas['puntuacion']."</span></td>";
                echo "<td><a id='modificarVAdmin' href='index.php?accion=modificarUsuario&id=".$personas['alumnoid']."'><img src='vistas/css/contrato.svg' id='iconomodificar'></a></tr></table></div></div></td>";
                if($contador%2!=0){
                echo "</tr>";
                }

                $contador++;
                
        }

        echo "</div>";
    }
    }else if($datos["tipo"]=="trabajando"){
        echo "<div class='divsMenu'><a class='botonesMenu' href='index.php?accion=validarUsuarios'><span>Vista Validación</span></a></div>";
        echo "<div class='divsMenu'><a class='botonesMenu' href='index.php?accion=vistaAdmin'><span>Vista parados</span></a></div></div>";
        $comprobacion=$usuarios["alumnos"];
        
        if(empty($comprobacion)){
            ?>
                <div id="noUsuarios">
                    <span id="textoNoUsuarios">No hay usuarios en esta sección</span>
                </div>
            <?php
        }else{
            echo "<div id='todosUsuarios'>";
            echo "<table>";
            foreach($usuarios as $personas){
                foreach($personas as $persona){
                    echo "<td><div class='usuario'><div style='width:120px; height:150px; display:inline-block; border: 1px solid black;'>Foto</div>";
                    echo "<div class='info'><table class='tablaAdministración'><tr><td colspan='2'><span>".$persona['nombreal']."&nbsp;".$persona['apellido']."</span></td>";
                    echo "<td><span>Puntuacion</span></td>";
                    echo "<td><a id='borrarVAdmin' href='#' onclick='javascript:Delete(".$persona['alumnoid'].")'><img src='vistas/css/basura.svg' id='iconoBasura'></a></td></tr>";
                    echo "<tr><td><span>".$persona['telefono']."</span></td>";
                    echo "<td><span>".$persona['correo']."</span></td>";
                    echo "<td align='center'><span> ".$persona['puntuacion']."</span></td>";
                    echo "<td><a id='modificarVAdmin' href='index.php?accion=modificarUsuario&id=".$persona['alumnoid']."'><img src='vistas/css/contrato.svg' id='iconomodificar'></a></tr></table></div></div></td>";
                    if($contador%2!=0){
                    echo "</tr>";
                    }

                    $contador++;
                    
                }
            }
            echo "</div>";    
        }
        
    }

?>
<script>
function Delete(id) {
     if (confirm('Estas seguro de Eliminar este registro?')){
        document.location='index.php?accion=borrarUsuario&id='+id+'';
        }
}
</script>

