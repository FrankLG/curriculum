<?php 
    
?>

<form  action="index.php" method="post" >
    <tr><td><input type="text" name="nombreha" required placeholder="Nueva Habilidad"></td>
        <td><textarea name="descripcion" rows="5" cols="25" required placeholder="escribe tu habilidad/conocimiento (como la conseguiste, como de bueno eres en ello...)"></textarea>
      <input type="hidden" name="accion" value="insertarHabilidad" >
        <td><input type="submit" value="Insertar Habilidad"></td><br>
</tr>
</form>
</table>