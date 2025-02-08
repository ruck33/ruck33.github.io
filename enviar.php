<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $to = "gisworldcars@gmail.com";  
    $subject = "[CONTACTO] Web GISWORLDCARS";

    $body = "Nombre: $nombre\n";
    $body .= "Correo electrónico: $email\n";
    $body .= "Mensaje:\n$mensaje\n";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Correo enviado con éxito!";
    } else {
        echo "Hubo un problema al enviar el correo. Intenta nuevamente.";
    }
}
?>
