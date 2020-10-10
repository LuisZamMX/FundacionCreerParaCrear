<?php
header("Content-type: text/html; charset=utf-8");
mb_internal_encoding('UTF-8');
 
// Esto le dice a PHP que generaremos cadenas UTF-8
mb_http_output('UTF-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$nombre = $_REQUEST['nombre'];
$correo = $_REQUEST['correo'];
$mensaje = $_REQUEST['mensaje'];

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$mail = new PHPMailer(true);


if(isset($_REQUEST['nombre']) && isset($_REQUEST['correo']) && isset($_REQUEST['mensaje'])){

    try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'luis.zam.fcpc@gmail.com';              // SMTP username
    $mail->Password   = 'fcpc.23022015?';                       // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($correo, $nombre);
    $mail->addAddress('luis_felipe_zamora@hotmail.com', 'Luisito');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensaje del sitio: Fundación Creer Para Crear';
    $mail->Body    = "
    <img src='http://rigel.fca.unam.mx/~li314335539/fundacion/img/logo_fundacion.png' width='50' height='50' alt='Logotipo Fundación Creer para Crear A.C.'>

    <hr>

    <h2>Nuevo mensaje</h2>

    <p>De: {$nombre}</p> 

    <p>Correo electrónico:  {$correo}</p>

    <p>Mensaje: {$mensaje}</p>";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    ?>
    
    <div class="alert alert-success" role="alert">
        Su mensaje se ha enviado con éxito. Espere un momento...
    </div>
    <script type="text/javascript">  
        setTimeout(function(){location.href="index.php";}, 3500);
    </script>

    <?php
    // echo 'El mensaje se envió correctamente';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}

?>