 

          
    <?php
    $name = $_POST['name'];
    $apel = $_POST['apel'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";
    
    $message = "Este mensaje fue enviado por: " . $name . " \r\n";
    $message = "Su apellido: " . $apel . " \r\n";
    $message .= "Su e-mail es: " . $mail . " \r\n";
    $message .= "Teléfono de contacto: " . $phone . " \r\n";
    $message .= "Mensaje: " . $_POST['message'] . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time());
    
    $para = 'javivillanueva2001@gmail.com';
    $asunto = 'Mensaje de... (Escribe como quieres que se vea el remitente de tu correo)';
    
    mail($para, $asunto, utf8_decode($message), $header);
    
    header("index.html");
    ?>
