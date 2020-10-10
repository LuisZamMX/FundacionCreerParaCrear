<?php
if(isset($_REQUEST['nombre']) && isset($_REQUEST['correo']) && isset($_REQUEST['mensaje'])){

	?>
	
	<div class="alert alert-success" role="alert">
		Su mensaje se ha enviado con éxito. Espere un momento...
	</div>
	<script type="text/javascript">  
		setTimeout(function(){location.href="index.php";}, 3500);
	</script>

	<?php
	
	// correo de ustedes a donde llegara el mensaje
	$destino = "informacion@fundacioncreerparacrear.org";
	$nombre = $_REQUEST['nombre'];
	$correo = $_REQUEST['correo'];
	$mensaje = $_REQUEST['mensaje'];

	$contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
	mail($destino,"Correo de fundación creer para crear",$contenido);

} 
?>