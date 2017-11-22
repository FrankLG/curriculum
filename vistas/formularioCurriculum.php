<?php 
    
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function(){
       $('#nuevoTit').click(function(){
          alert($('.titulacion').length); 
       });
    });
</script>

<h3>Tu registro ha sido aceptado, por favor introduce la información que creas oportuna.</h3>
<form>
    <fieldset class="titulacion">
        <h2>Titulación oficial</h2>
        Titulo: <input type="text" name="titulo"> Centro<input type="text" name="centro"> Fecha inicio:<input type="date" name="fInicio"> Fecha fin:<input type="date" name="fFin"> Tipo: <select name="tipo">
        <option>Grado universitario</option>
        <option>C.F.G.S.</option>
        <option>C.F.G.M.</option>
        <option>Bachillerato</option>
        </select><br>
        <input type="button" id="nuevoTit" value="Añadir titulo">
    </fieldset>
    <fieldset>
        <h2>Habilidades</h2>
        <input type="text" name="habilidad"><br>
        <input type="button" id="nuevaHab" value="Añadir habilidad">
    </fieldset>
    <fieldset>
        <h2>Idiomas</h2>
        Nombre:<input type="text" name="idioma"> nivel:<input type="text" name="nivel"><br>
        <input type="button" id="nuevoIdi" value="Añadir idioma">
    </fieldset>
    <h2>Otros</h2>
    Carné de conducir <input type="checkbox" name="conducir">
    Incorporación inmediata <input type="checkbox" name="incorporacion">
    vehiculo propio<input type="checkbox" name="vehiculo">
    Flexibilidad horaria<input type="checkbox" name="flexibilidad">
    Disponibilidad geografica <input type="checkbox" name="geografica">
    
</form>

