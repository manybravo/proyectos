<?php
$mail='luisamaria.bravo@gmail.com';
$nombre = $_POST['name'];
$correo = $_POST['email'];
$mensaje = $_POST['consulta'];
$thank = "contactoOK.html";
$message = "
Nombre: ".$nombre.";
Correo: ".$correo.";
Mensaje: ".$mensaje."";
$subject ="Consulta desde formulario";
$headers = 'From: '.$mail . "\r\n" .
'Reply-To: info@educarenlared.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
if (mail($mail, $subject, $message, $headers)) Header("Location: $thank");
?>