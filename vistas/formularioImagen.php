<?php 
    
?>
<div id='vistausuario'>
	<div style='width:200px; height:240px; background-image: url(imagenes/default.png); background-size: 100% 100%; margin: auto;'>
		<?php
			echo "<img style='width: 100%; height: 100%;' src='imagenes/".$_SESSION['id'].".jpg' alt=''>";
		?>
		
	</div>
	<br>
<form  action="index.php" method="post" enctype="multipart/form-data">
   <label for="imagen"> Imagen</label>
    <input type="file" name="imagen" size="40">
      <input type="hidden" name="accion" value="insertarImagen">
    <input type="submit" value="Subir imagen">
</form>
<?php 
	echo "<a href='index.php?accion=modificarUsuario&id=".$_SESSION['id']."'>Volver atras</a>";
?>
</div>