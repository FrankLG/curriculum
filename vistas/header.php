<html>
	<head>
		<meta charset="utf8">
		<title>Practica php</title>
	</head>
	<body>
        <h1>CV CV</h1>
        <?php 
            if($_SESSION['tipo']=="admin" || isset($_SESSION['id'])){
                echo "<a href='index.php?accion=desconectar'>Desconectar</a>";
            }
            
        ?>
        