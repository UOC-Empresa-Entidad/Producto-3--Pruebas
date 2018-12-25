<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$texto=$_POST['mensaje'];

$header = 'From: ' . $email . "\r\n"; 
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n"; 
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $texto . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para= 'byteraiders@gmail.com';
$asunto= 'Mensaje del formulario de contacto';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo "Mensaje enviado correctamente, pronto recibirá una respuesta. <a href='contacto.php'>Volver</a>";


?>