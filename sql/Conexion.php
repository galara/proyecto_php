<?php

Class Conexion{
	
	public function conectar()
	{
		$usuario = "root";
		$password = "adolfo123";
		$host = "localhost";
		$db = "ejercicios";

		return $conexion = new PDO("mysql:host=$host;dbname=$db", $usuario, $password);

	}
	

}
?>