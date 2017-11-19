<?php

	class BD {
			private $nombreBD;
			private $host;
			private $usuario;
			private $pass;
			private $conexion;
			
			public function __construct() {
					$this->host = "localhost";
					$this->usuario = "root";
					$this->pass = "";
					$this->nombreBD = "curriculumcv";
					$this->conexion = null;
			}
			
			public function conectar() {
					$this->conexion = new Mysqli($this->host, $this->usuario, $this->pass, $this->nombreBD);
			}
			
			public function desconectar() {
					$this->conexion->close();
			}
			
			public function consulta($sql) {
					$this->conectar();
					$res = $this->conexion->query($sql);
					$array_resultado = array();
					if ($res) {

						while ($fila = $res->fetch_array()) {
							$array_resultado[] = $fila;
						}
					}
					$this->desconectar();
					return $array_resultado;
			}
			
			public function ejecutar($sql) {
					$this->conectar();
					$this->conexion->query($sql);
					echo $this->conexion->error;
					$numfilas = $this->conexion->affected_rows;
					$this->desconectar();
					return $numfilas;
			}
			
	}

?>
