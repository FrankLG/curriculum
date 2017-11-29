<html>
	<head>
		<meta charset="utf8">
		<title>Practica php</title>
		<link rel="stylesheet" type="text/css" href="vistas/css/css.css">
	</head>
	<body>
        <?php
            if(isset($_SESSION['tipo']) || isset($_SESSION['id'])){
                echo "<a href='index.php?accion=desconectar'>Desconectar</a>";
			}
        ?>
