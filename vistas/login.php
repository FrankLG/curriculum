<?php
    if(isset($datos["mensaje"])){
        if($datos["tipoMensaje"]=="error"){
            echo "<h1 style='color:red;'>".$datos['mensaje']."</h1>";
        }else{
            echo "<h1 style='color:green;'>".$datos['mensaje']."</h1>";
        }

    }
?>

<div id="divLogin">
  <div id="divImagenLogin"></div>
  <form  action="index.php" method="post">
    <table id="tablaLogin">
      <tr>
        <td><span>Usuario:</span></td>
        <td><input type="text" maxlength="9" name="user" required></td>
      </tr>
      <input type="hidden" name="accion" value="comprobarLogin">
      <tr>
        <td><span>Contraseña: </span></td>
        <td><input type="text" name="pass" required></td>
      </tr>
      <tr>
          <td id="tdAlta"><input class="botonSubmit" type="submit" value="Entrar"></td>
          <td id="tdAlta"><a class="enlaces" href="index.php?accion=registro"><span>Darse de alta</span></a></td>
      </tr>

  </form>
  <a href="index.php?accion=recuperarContra">recuperar Contraseña</a>
</div>
