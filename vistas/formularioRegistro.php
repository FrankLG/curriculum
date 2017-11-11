<?php 
    if(isset($datos["mensaje"])){
        if($datos["tipoMensaje"]=="error"){
            echo "<h1 style='color:red;'>".$datos['mensaje']."</h1>";    
        }else{
            echo "<h1 style='color:green;'>".$datos['mensaje']."</h1>";
        }
        
    }
?>

<form  action="index.php">
    Nombre <input type="text" maxlength="100" name="nombreal" required><br>
    Apellidos <input type="text" maxlength="100" name="apellido" required><br>
    DNI <input type="text" maxlength="9" name="dni" required><br>
    contraseña <input type="text" name="passal" required><br>
    Telefono <input type="text" name="telefono" required><br>
    E-mail <input type="text" name="correo" maxlength="100" required><br>
    provincia<input type="text" name="provincia" maxlength="100" required><br>
    localidad<input type="text" name="localidad" maxlength="100" required><br>
    Direccion <input type="text" name="direccion" maxlength="100" required><br>
    activo<br>
    Si <input type="radio" name="activo" value="1" checked> No <input type="radio" name="activo" value="0"><br>
    <input type="hidden" name="accion" value="registroUsuario">
    <input type="submit" value="Completar registro">
</form>
