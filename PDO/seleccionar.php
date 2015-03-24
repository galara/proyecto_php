<?php 
require "../sql/Conexion.php";
require "../sql/Seleccionar.php";

$mensaje = null;
if (isset($_POST["login"])){
	$model = new Seleccionar;
	$model->email = htmlspecialchars($_POST["email"]);
	$model->password = sha1(htmlspecialchars($_POST["password"]));
	$model->login();
	$mensaje = $model->mensaje;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Login</h1>
	<strong> <?php echo $mensaje; ?> </strong>
	<form method="POST"action="<?php echo $_SERVER["PHP_SELF"] ; ?>">
		<table>
			<tr>
				<td>Email: </td>
				<td> <input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td> <input type="password" name="password"></td>
			</tr>
		</table>
		<input type="hidden" name="login">
		<input type="submit" value="Enviar"> 

	</form>

</body>
</html>