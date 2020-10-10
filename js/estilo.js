/*
 _______________________
|						|
|						|
|						|
|		Funciones		|	
|						|
|						|
|_______________________|

*/



function mostrarAlerta(){
	Swal.fire({
		title: 'Cambiamos de domicilio',
		type: 'info',
		html:
		'Para ofrecerte un mejor servicio, cambiamos de domicilio. Ahora nos encontramos en: Centenario 5, Colonia Santa Cruz, Alcaldía Iztacalco, C.P. 08910, Ciudad de México, CDMX. <br>Podrás consultarlo en cualquier momento en nuestra página de contacto',
		showCloseButton: true,
		showCancelButton: true,
		focusConfirm: false,
		confirmButtonText:
		'<a class="text-white" href="contacto.php">Ver mapa</a>',
		cancelButtonText:
		'O.K.',
		cancelButtonAriaLabel: 'Thumbs down'
	});
}

function validar_correo(){

	var nombre	= $('#correo-nombre').val();
	var correo 	= $('#correo-correo').val();
	var mensaje	= $('#correo-mensaje').val();

	var error = 0;

	// Mensaje
	if(mensaje.length == 0){
		$('#correo-mensaje').focus();
		error++;
	}

	//correo
	if(correo.length == 0){
		$('#correo-correo').focus();
		error++;
	}

	// correo válido
	if (!(/\w+\@\w+(\.[A-Za-z]+)+/.test(correo))){
		$('#correo-correo').focus();
		error++;
		$('#correo-respuesta').html('<p class=text-danger>Introduce una dirección de correo válida.</p>');

	}

	
	// Nombre
	if(nombre.length == 0){
		$('#correo-nombre').focus();
		error++;
	}

	return error;

}


/*
 ___________________________
|							|	
|							|
|							|
|		document.ready		|	
|							|
|							|
|___________________________|

*/

$(document).ready(function() {
	$('#enviar').click(function() {
		
		if (validar_correo() == 0) {

			$('#formContacto').ajaxForm({
	  			type: "get",
	  			url: "altcorreo.php",
	  			target: '#respuesta'
  			}).submit();

		} else if (validar_correo() > 0) {
  			$('#respuesta').html('<div class="alert alert-danger" role="alert">Faltan datos por llenar</div>');
		}

	});

});