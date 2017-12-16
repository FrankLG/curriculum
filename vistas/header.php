<html>
	<head>
		<meta charset="utf8">
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
            if(isset($_SESSION['tipo']) || isset($_SESSION['id'])){
                //echo "<div id='barraSuperior'><div class='divDesconectar'><a class='botonesMenu' id='botonDesconectar' href='index.php?accion=desconectar'><span>Desconectar</span></a></div>";
			}
        ?>
