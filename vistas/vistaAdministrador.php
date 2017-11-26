<div class="todo">
    
    
    
<?php 
    $usuarios=$datos["usuarios"];
    if($datos["tipo"]=="validar"){
        echo "<a href='index.php?accion=vistaAdmin'>Vista administrador</a>";
        
        foreach($usuarios as $personas){  
            foreach($personas as $persona){
                echo "<div class='usuario'><div style='width:120px; height:150px; display:inline-block; border: 1px solid black;'>Foto</div>";
                echo "<div class='info'><a href='index.php?accion=modificarUsuario&id=".$persona['alumnoid']."'>".$persona['nombreal']."&nbsp;".$persona['apellido']."</a>";
                echo "<span>".$persona['telefono']."</span>";
                echo "<span>".$persona['correo']."</span>";
                echo "<a href='index.php?accion=borrarUsuario&id=".$persona['alumnoid']."'>Declinar Registro</a>";
                echo "<form action='index.php'>"
                        . "<input type='number' name='validado' required='required' max='10'>"
                        . "<input type='hidden' name='accion' value='aceptarUsuario'>"
                        . "<input type='hidden' name='id' value=".$persona['alumnoid'].">"
                        . "<input type='submit' value='validarUsuario'>"
                   . "</form>"; 
                echo "<br>";
            }
        }
    }else{
        
        echo "<a href='index.php?accion=validarUsuarios'>Vista Validación</a>";
        echo "<form action='index.php'>";
        echo "<input type='hidden' name='accion' value='busqueda'>";
        echo "<input type='text' name='buscar'> <input type='submit' value='buscar'>";
        echo "</form>";
        foreach($usuarios as $personas){  
            foreach($personas as $persona){
                echo "<div class='usuario'><div style='width:120px; height:150px; display:inline-block; border: 1px solid black;'>Foto</div>";
                echo "<div class='info'><a href='index.php?accion=modificarUsuario&id=".$persona['alumnoid']."'>".$persona['nombreal']."&nbsp;".$persona['apellido']."</a>";
                echo "<span>".$persona['telefono']."</span>";
                echo "<span>".$persona['correo']."</span>";
                echo "<a href='index.php?accion=borrarUsuario&id=".$persona['alumnoid']."'>Borrar usuario</a>";
                echo "<a href='index.php?accion=modificarUsuario&id=".$persona['alumnoid']."'>modificar usuario</a>";
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