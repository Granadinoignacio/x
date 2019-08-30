<?php
$nombre = $_POST[ 'nombre'];
$mail = $_POST['email'];
$empresa = $_POST['mensaje'];

$header = 'from: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion()"\r\n";
$header .= "Mine-Version: 1.0 \r\n";
$header .= "Content-type: text/platin";

$mensaje = "Este mensaje fue enviado por " . $nombre . ", \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviar el " . date('d/m/y', time());

$para = 'creandomarketingve@gmail.com';
$asunto = 'Asunto del mail recibido';

mail($para, $asunto, utf8_code($mensaje), $header);

header("Locotion:index");
?>