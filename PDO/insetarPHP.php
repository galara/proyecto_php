<?php
require_once '../sql/Conexion.php';
require_once '../sql/Insertar.php';

$mensaje = null;
if (isset($_POST["insertar"]))
{
	$model = new Insertar();
	$model->nombre =htmlspecialchars($_POST["nombre"]);
	$model->email =htmlspecialchars($_POST["email"]);
	$model->password =sha1(htmlspecialchars($_POST["password"]));
	$model->genero =htmlspecialchars($_POST["genero"]);
	$model->insert();
	$mensaje = $model->mensaje;

	if(empty($mensaje)){
		$mensaje = null;
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<strong> <?php echo $mensaje;?>	</strong>
	<title>Document</title>
</head>
<body>
	<h1>Insertar datos PDO</h1>
	<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
	<table>
		<tr>
			<td>Nombre: </td>
			<td><input type="text" name="nombre">	 </td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type="email" name="email">	 </td>
		</tr>
		<tr>
			<td>Password: </td>
			<td><input type="password" name="password">	 </td>
		</tr>
		<tr>
			<td>Genero :</td>
			<td>
				Masculino: <input type="radio" name="genero" checked value="Masculino">
				Femenino:  <input type="radio" name="genero" value="Femenino">
			</td>
			
		</tr>
	</table>
	<input type="hidden" name="insertar">
	<input type="submit" value="Insertar">
	</form>
</body>
</html>