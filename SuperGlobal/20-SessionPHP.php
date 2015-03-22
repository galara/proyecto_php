<?php

/* con una session al igual que con las cookies a poder guardar información 
sobre la actividad del usuario en el sitio web, la gran diferencia es que las
las variables de sessión son guardadas en el siervidor y las cookies en el 
navegador del cliente.
*/
$revisar=null;

if(isset($_POST["login"]))
{
	$usuario = htmlspecialchars($_POST["usuario"]);
	$password = htmlspecialchars($_POST["password"]);

	if($usuario == "root" && $password == "toor")
	{
		session_start();
		$_SESSION["usuario"] = $usuario;
		header("location: 20-1-PrivadoPHP.php");

	}
	else {
		//header("location: 20-SessionPHP.php");
		//echo "Revise el usuario y contraseña y vueva a intentar";
		$revisar="Revise el usuario y contraseña y vueva a intentar";
	}

}
?>


<h1>Iniciar Sessión</h1>
<strong> Usuario=root : Password=toor</strong>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>" >
	<table>
		<tr>
			<td>usuario:</td>
			<td> <input type="text" name="usuario"></td>	
		</tr>
		<tr>
			<td>Password:</td>
			<td> <input type="password" name="password"></td>
		</tr>
		
		<td><?php echo $revisar;?> </td>	
		</tr>

	</table>
	<input type="hidden" name="login">
	<input type="submit" value="Enviar">	
</form>
