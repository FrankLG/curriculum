<html>
	<head>
		<meta charset="UTF-8">
		<title>Practica php</title>
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script> 

		<link rel="stylesheet" type="text/css" href="vistas/css/css.css">
	</head>
	<body>


		<?php 
		
		if(!isset($_SESSION["tipo"])){
			
		}else{

		
		?>
        <div id="apaisado">
	    <nav class="navbar navbar-expand-md bg-light navbar-light">
	        <a class='navbar-brand' href="#"><img src="vistas/css/escudo.png" alt="logo" style="width: 40px;"></a>
	        <?php 
	        if($_SESSION["tipo"]=="admin"){
	        	echo '<div class="collapse navbar-collapse" id="collapsibleNavbar">
	        		            <ul class="navbar-nav">';
	        		            if(isset($datos["tipo"])){
	        		            	if($datos["tipo"]=="normal"){
	        		            	echo '<li class="nav-item active">
			        		                    <a class="nav-link" href="index.php?accion=vistaAdmin">Parados</a>
			        		                </li>';
		        		            }else{
		        		            	echo '<li class="nav-item">
		        		                    	<a class="nav-link" href="index.php?accion=vistaAdmin">Parados</a>
		        		               		</li>';
		        		            }

		        		            if($datos["tipo"]=="trabajando"){
		        		            	echo '<li class="nav-item active">
		        		                     <a class="nav-link" href="index.php?accion=vistaAdmin2">Ocupados</a>
		        		                </li>';
		        		            }else{
		        		            	echo '<li class="nav-item">
		        		                     <a class="nav-link" href="index.php?accion=vistaAdmin2">Ocupados</a>
		        		                </li>';
		        		            }
		        		            if($datos["tipo"]=="validar"){
		        		            	echo '<li class="nav-item active">
		        		                    <a class="nav-link" href="index.php?accion=validarUsuarios">Validar';
		        		            }else{
		        		            	echo '<li class="nav-item">
		        		                    <a class="nav-link" href="index.php?accion=validarUsuarios">Validar';
		        		            }
	        		            }else{
	        		            	 echo '<li class="nav-item">
		        		                    	<a class="nav-link" href="index.php?accion=vistaAdmin">Parados</a>
		        		               		</li>';
		        		               		echo '<li class="nav-item">
		        		                     <a class="nav-link" href="index.php?accion=vistaAdmin2">Ocupados</a>
		        		                </li>';
		        		                echo '<li class="nav-item">
		        		                    <a class="nav-link" href="index.php?accion=validarUsuarios">Validar';
	        		            }
	        		            
	        		                
	        		                
	        		               
	        		                        if($datos["validar"]>0){
	        		                            
	        		                            echo "<div style='background-color: red; border-radius: 50%; width: 18px; height: 18px; margin: auto; font-size: 12px;'>".$datos['validar']."</div>";
	        		                        }
	        		                   echo '</a> 
	        		                </li>
	        		            </ul>
	        		            <ul class="navbar-nav mx-auto">
	        		            	<li class="nav-item">
	        		            	<form>
									  <input id="buscador" type="text" name="buscar" placeholder="buscar..." required="required">
									  <input type="hidden" name="accion" value="busqueda">
									</form>
	        		            	</li>
	        		            </ul>
	        		        </div>
	        		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	                    		<span class="navbar-toggler-icon"></span>
	            			</button>';}
	        		        ?>
	            
	            <ul class="navbar-nav ml-auto ">
	                <li class="nav-item">
	                    
	                </li>
	                <li class="nav-item">
	                    <a class='nav-brand' id='botonDesconectar' href='index.php?accion=desconectar'><img src="vistas/css/off.svg" style="width: 40px"></a>
	                </li>
	            </ul>   
	    </nav>
	        <?php
	    }
	    ?>
