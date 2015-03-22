<?php

Class Insertar{
	
	public $mensaje;
	public $nombre;
	public $email;
	public $password;
	public $genero;

	public function insert(){
		$model = new Conexion();
		$conexion = $model->conectar();
		$sql = "INSERT INTO usuarios (nombre, email, password, genero)";
		$sql.= "VALUES (:nombre, :email, :password, :genero)";
		
		$consulta = $conexion->prepare($sql);
		$consulta -> bindParam(":nombre", $this->nombre);
		$consulta -> bindParam(":email", $this->email);
		$consulta -> bindParam(":password", $this->password);
		$consulta -> bindParam(":genero", $this->genero);

		if (!$consulta) {
			$this->mensaje = $conexion->errorInfo();
		}else{
			$consulta->execute();
			$this->mensaje = "Datos guardados con éxito";
		}


	}

}