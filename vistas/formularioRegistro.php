<div id="divRegistro">
  <div id="textoRegistro">
    <span><p>Tras presentar su solicitud de acceso un administrador comprobara que obtuviste el titulo en este centro, se te notificara mediante correo y podras rellenar tu curriculum.</p></span>
    <?php
        if(isset($datos["mensaje"])){
            echo "<span style='color: red;'><p>".$datos['mensaje']."</p></span>";
        }
    ?>
  </div>
  <div id="divRegistroInterior">
    <form id="formularioRegistro"  action="index.php">
      <table id="tablaRegistro">
        <tr>
          <td><span>Nombre:</span></td>
          <td><input type="text" maxlength="100" name="nombreal" required></td>
          <td><span>Apellidos:</span></td>
          <td><input type="text" maxlength="100" name="apellido" required></td>
        </tr>
        <tr>
          <td><span>DNI:</span></td>
          <td><input type="text" maxlength="9" name="dni" required></td>
          <td><span>Contraseña:</td>
          <td><input type="text" name="passal" required></td>
        </tr>
        <tr>
          <td><span>Telefono:</span></td>
          <td><input type="text" name="telefono" required></td>
          <td><span>Email:</span></td>
          <td><input type="text" name="correo" maxlength="100" required></td>
        </tr>
        <tr>
          <td><span>Provincia:</span></td>
          <td><input type="text" name="provincia" maxlength="100" required></td>
          <td><span>Localidad:</span></td>
          <td><input type="text" name="localidad" maxlength="100" required></td>
        </tr>
        <tr>
          <td><span>Dirección</span></td>
          <td><input type="text" name="direccion" maxlength="100" required></td>
          <td><span>Activo:</span></td>
          <td><span>Si </span><input type="radio" name="activo" value="1"> <span>No </span><input type="radio" name="activo" value="0" checked></td>
        </tr>
        <tr>
          <td class="centrado" colspan="2"><input type="hidden" name="accion" value="registroUsuario"><input class="botonSubmit" type="submit" value="Completar registro"></td>
          <td class="centrado" colspan="2"><a class="enlaces" id="registroVolverAtras" href="index.php?accion=mostrarLogin"><span>Volver atras</span></a></td>
        </tr>

      </table>


    </form>

  </div>
</div>
