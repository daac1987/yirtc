<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];

    $para = "info@yirtc.com";
    $asunto = "Nuevo mensaje de contacto";
    $contenido = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje";
    $cabeceras = "From: $email";

    if (mail($para, $asunto, $contenido, $cabeceras)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>
