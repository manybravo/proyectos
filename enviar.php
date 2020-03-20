<?php
$mail='consultas@educarenlared.com';
//$telefono = $_POST['tel'];
$correo = $_POST['email'];
//$localidad = $_POST['localidad'];
//$asunto = $_POST['subject'];
$mensaje = $_POST['consulta'];
$thank = "contactoOK.html";
$message = "
Correo: ".$correo.";
Localidad: ".$localidad.";
Mensaje: ".$mensaje."";
$subject ="Consulta desde formulario";
$headers = 'From: '.$mail . "\r\n" .
'Reply-To: info@educarenlared.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
if (mail($mail, $subject, $message, $headers)) Header("Location: $thank");
?>