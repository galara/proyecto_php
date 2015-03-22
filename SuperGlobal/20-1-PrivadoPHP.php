<?php
	session_start();

if ( empty($_SESSION["usuario"]))
{
	session_start();
	session_destroy();
	header("location: 20-SessionPHP.php");
}else{
	echo "<strong> Bienvenido ".$_SESSION["usuario"]."</strong>";
}

if(isset($_POST["cerrar_session"])){
	//session_start();
	session_destroy();
	header("location: 20-SessionPHP.php");
	header();

}


?>




<form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>" >
	<input type="hidden" name="cerrar_session">	
	<input type="submit" value="Cerrar Sessión">
</form>