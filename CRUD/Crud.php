<?php

Class Crud{
#Create
public $insertInto;
public $insertColumns;
public $insertValues;
public $mensaje;

#Reader
public $select;
public $from;
public $condicion;
public $rows;


	public function Create(){
		$model = new Conexion;
		$conexion = $model->conectar();
		$insertInto = $this->insertInto;
		$insertColumns = $this->insertColumns;
		$insertValues = $this->insertValues;

		$sql = "INSERT INTO $insertInto ($insertColumns) VALUES ($insertValues)";
		echo $sql;
		
		$consulta = $conexion->prepare($sql);

		if (!$consulta){
			$this->mensaje = "Error al crear el registro";
		}else {
			$consulta->execute();
			$this->mensaje = "Registro creado correctamente";
		}

	}

	public function Read(){
		$model = new Conexion;
		$conexion = $model->conectar();
		$select = $this->select;
		$from = $this->from;
		$condicion = $this->condicion;
		if($condicion != ""){
			$condicion = " WHERE ".$condicion;
		}
		$sql = "SELECT $select FROM $from $condicion";
		$consulta = $conexion->prepare($sql);
		$consulta->execute();

		while ($filas = $consulta->fetch()) {
			$this->rows[] = $filas;
		}


	}

}