<?php
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $message = $_POST['mensaje'];

    $header = 'From: ' . $email . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
    $message .= "Su e-mail es: " . $email . " \r\n";
    $message .= "Teléfono de contacto: " . $telefono . " \r\n";
    $message .= "Mensaje: " . $_POST['message'] . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time());

    $para = 'ie';
    $asunto = 'Mensaje de PRECOMPC';

    mail($para, $asunto, utf8_decode($message), $header);

    header("Location:index.html");    
?>