<?php 
    
?>

<form  action="index.php">
    Titulo: <input type="text" name="nombreti"> Centro<input type="text" name="centro"> Fecha fin:<input type="date" name="fechafin"> Tipo: <select name="tipo">
        <option>Grado universitario</option>
        <option>C.F.G.S.</option>
        <option>C.F.G.M.</option>
        <option>Bachillerato</option>
        </select><br>
 
    <input type="hidden" name="accion" value="insertarTitulo">
    <input type="submit" value="Insertar titulo">
</form>