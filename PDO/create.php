<?php
require "../sql/Conexion.php";
require "../CRUD/Crud.php";

$mensaje = null;
if (isset($_POST["create"]))
{
$nombre = htmlspecialchars($_POST["nombre"]);
$descripcion = htmlspecialchars($_POST["descripcion"]);
$categoria = htmlspecialchars($_POST["categoria"]);
$precio = $_POST["precio"];

if(!is_numeric($precio)){
	$mensaje = "Error, el campo precio debe ser numérico ";
}else if($nombre == ""){
	$mensaje = "Error , el campo nombre es requerido ";
}else if (strlen($nombre) > 100){
	$mensaje = "Error, el campo nombre acepta un máximo de 100 caracteres ";
}else if ($descripcion == ""){
	$mensaje = "Error, el campo descripcion es requerido ";
}else if(strlen($descripcion) > 150 ){
	$mensaje = "Error, el campo descripción acepta un máximo de 150 caracteres ";
}else {
	$model = new Crud;
	$model->insertInto = "productos";
	$model->insertColumns = "nombre, descripcion, categoria, precio";
	$model->insertValues = "'$nombre', '$descripcion', '$categoria', $precio ";
	$model->Create();
	$mensaje = $model->mensaje;

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1> CRUD : Create Tabla productos</h1>
	<strong> <?php echo $mensaje; ?> </strong>
	<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
		<table>
			<tr>
				<td>Nombre: </td>
				<td> <input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td>Descripción: </td>
				<td> <input type="text" name="descripcion"></td>
			</tr>
			<tr>
				<td>Categoria: </td>
				<td> <input type="text" name="categoria"></td>
			</tr>
			<tr>
				<td>Precio  </td>
				<td> <input type="text" name="precio"></td>
			</tr>
		</table>
		<input type="hidden" name="create">	
		<input type="submit" value="Enviar">

	</form>	
</body>
</html>