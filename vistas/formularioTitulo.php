<?php 
    
?>

<form  action="index.php" method="post" >
    <tr><td><input type="text" name="nombreti" required></td> <td><input type="text" name="centro" required></td><td><input type="date" name="fechafin" required></td> <td> <select name="tipo">
        <option>Grado universitario</option>
        <option>C.F.G.S.</option>
        <option>C.F.G.M.</option>
        <option>Bachillerato</option>
        </select></td>
    <input type="hidden" name="accion" value="insertarTitulo">
        <td> <input type="submit" value="Insertar titulo"></td></tr><br><br>
</form>
</table>