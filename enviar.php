<?php
    $correo = $_POST["email"];
    $telefono = $_POST["phone"];
    $mensaje = $_POST["message"];

    $destinatario = "renederum@gmail.com";
    $asunto = "New Contact from WEB";

    $carta = "Correo: $correo \n";
    $carta .= "Telefono: $telefono \n";
    $carta .= "Mensaje: $mensaje \n";

    $mail = mail($destinatario, $asunto, $carta);
    if($mail){
        echo "<h4>Enviado exitosamente</h4>";
    }
?>
