<form  action="index.php">
    <h1>Logueo de usuario</h1><br>
    DNI <input type="text" maxlength="9" name="user" required><br>
    contraseña <input type="text" name="pass" required><br>
    <input type="hidden" name="accion" value="comprobarLogin">
    <input type="submit" value="Completar registro">
</form>
<a href="index.php?accion=registro">Quiero darme de alta</a>
