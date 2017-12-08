<div class="todo">



<?php
    $usuarios=$datos["usuarios"];
    if($datos["tipo"]=="validar"){
        echo "<a href='index.php?accion=vistaAdmin2'>Vista ocupados</a>";
        echo "<a href='index.php?accion=vistaAdmin'>Vista parados</a>";

        foreach($usuarios as $personas){
            foreach($personas as $persona){
                echo "<div class='usuario'><div style='width:120px; height:150px; display:inline-block; border: 1px solid black;'>Foto</div>";
                echo "<div class='info'><span>".$persona['nombreal']."&nbsp;".$persona['apellido']."</span>";
                echo "<span>".$persona['telefono']."</span>";
                echo "<span>".$persona['correo']."</span>";
                echo "<a href='index.php?accion=borrarUsuario&id=".$persona['alumnoid']."'>Declinar Registro</a>";
                echo "<form action='index.php' method='post'>"
                        . "<input type='number' name='puntuacion' required='required' min='0' max='10'>"
                        . "<input type='hidden' name='accion' value='aceptarUsuario'>"
                        . "<input type='hidden' name='id' value=".$persona['alumnoid'].">"
                        . "<input type='submit' value='validarUsuario'>"
                   . "</form></div>";
                echo "<br>";
            }
        }

    }else if($datos["tipo"]=="normal"){
    echo "<a href='index.php?accion=vistaAdmin2'>Vista ocupados</a>";
?>
        <a href='index.php?accion=validarUsuarios'>Vista Validación</a>

        <form action='index.php' method="post">
          <input type='hidden' name='accion' value='busqueda'>
          <input type='text' name='buscar'>
        </form>
        <?php
        foreach($usuarios as $personas){
            foreach($personas as $persona){
                echo "<div class='usuario'><div style='width:120px; height:150px; display:inline-block; border: 1px solid black;'>Foto</div>";
                echo "<div class='info'><span>".$persona['nombreal']."&nbsp;".$persona['apellido']."</span>";
                echo "<span>".$persona['telefono']."</span>";
                echo "<span>".$persona['correo']."</span>";
                echo "<span>Puntuacion: ".$persona['puntuacion']."</span>";
                echo "<a href='index.php?accion=borrarUsuario&id=".$persona['alumnoid']."'>Borrar usuario</a>";
                echo "<a href='index.php?accion=modificarUsuario&id=".$persona['alumnoid']."'>modificar usuario</a></div></div>";
                echo "<br>";
            }
        }
    }else if($datos["tipo"]=="busqueda"){
        echo "<a href='index.php?accion=validarUsuarios'>Vista Validación</a>";
        echo "<a href='index.php?accion=vistaAdmin2'>Vista ocupados</a>";
        echo "<form action='index.php' method='post'>";
        echo "<input type='hidden' name='accion' value='busqueda'>";
        echo "<input type='text' name='buscar'> <input type='submit' value='buscar'>";
        echo "</form>";
        foreach($usuarios as $personas){
                echo "<div class='usuario'><div style='width:120px; height:150px; display:inline-block; border: 1px solid black;'>Foto</div>";
                echo "<div class='info'><span>".$personas['nombreal']."&nbsp;".$personas['apellido']."</span>";
                echo "<span>".$personas['telefono']."</span>";
                echo "<span>".$personas['correo']."</span>";
                echo "<span>Puntuacion: ".$personas['puntuacion']."</span>";
                echo "<a href='index.php?accion=borrarUsuario&id=".$personas['alumnoid']."'>Borrar usuario</a>";
                echo "<a href='index.php?accion=modificarUsuario&id=".$personas['alumnoid']."'>modificar usuario</a></div></div>";
                echo "<br>";
        }
    }else if($datos["tipo"]=="trabajando"){
        echo "<a href='index.php?accion=validarUsuarios'>Vista Validación</a>";
        echo "<a href='index.php?accion=vistaAdmin'>Vista parados</a>";
        foreach($usuarios as $personas){
            foreach($personas as $persona){
                echo "<div class='usuario'><div style='width:120px; height:150px; display:inline-block; border: 1px solid black;'>Foto</div>";
                echo "<div class='info'><span>".$persona['nombreal']."&nbsp;".$persona['apellido']."</span>";
                echo "<span>".$persona['telefono']."</span>";
                echo "<span>".$persona['correo']."</span>";
                echo "<span>Puntuacion: ".$persona['puntuacion']."</span>";
                echo "<a href='index.php?accion=borrarUsuario&id=".$persona['alumnoid']."'>Borrar usuario</a>";
                echo "<a href='index.php?accion=modificarUsuario&id=".$persona['alumnoid']."'>modificar usuario</a></div></div>";
                echo "<br>";
            }
        }
    }

?>
</div>
<style>
    span{
        margin-left: 10px;
    }
    a{
        margin-left: 10px;
    }
    .info{
        display: contents;
        margin-top: auto;
    }
    form{
        display: inline-block;
    }
</style>
