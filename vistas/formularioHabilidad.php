<?php 
    
?>

<form  action="index.php">
    Habilidad: <input type="text" name="nombreha" required><br>
        Descripción: <textarea name="descripcion" rows="5" cols="50" required placeholder="escribe tu habilidad/conocimiento (como la conseguiste, como de bueno eres en ello...)"></textarea><br>
      <input type="hidden" name="accion" value="insertarHabilidad" >
    <input type="submit" value="Insertar Habilidad">
</form>
