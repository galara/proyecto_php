<?php

/* $_POST -> Nos va a permitir capturar los parametros enviados a travéz del 
método POST, la diferencia con el método GET, es que con el mpetodo POST la
información viaja oculta, es decir, no es mostrada en la url */

?>

<form action="POST"  action='<?php echo $_SERVER['PHP_SELF']; ?>' >
	<table>
		<tr>
			<td>Titulo</td>
			<td> <input type="text" name="titulo"></td>	
		</tr>
		<tr>
			<td>Comentario</td>
			<td> <textarea name="comentario" id="" cols="30" rows="10"></textarea></td>	
		</tr>
	</table>	
	<input type="hidden" name="formulario">
	<input type="submit" value="Enviar">
</form>
