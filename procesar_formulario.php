<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'davlopezcasas@gmail.com';
    $subject = 'Nuevo mensaje de contacto';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $headers = array(
        'From' => $email,
        'Reply-To' => $email,
        'X-Mailer' => 'PHP/' . phpversion()
    );

    $body = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";

    if (mail($to, $subject, $body, $headers)) {
        echo '¡Mensaje enviado con éxito!';
    } else {
        echo 'Error al enviar el mensaje.';
    }
}
?>
