<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Incluye los archivos de PHPMailer
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

// Recibe el correo electrónico ingresado en el formulario
$correo = $_POST['correo'];


// Crea una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configura el servidor SMTP y las credenciales de autenticación
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'anagourmetuniempresarial@gmail.com'; // Tu correo electrónico
    $mail->Password = 'iqzkmwofenwctfoq'; // Tu contraseña de correo electrónico
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Configura el correo electrónico
    $mail->setFrom('anagourmetuniempresarial@gmail.com', 'AnaGourmet');
    $mail->addAddress($correo);
    $mail->isHTML(true);
    $mail->Subject = 'Conoce nuestro servicio!';
    $mail->Body = "Ana gourmet es un restaurante que te ofrece desayuno, almuerzo y postres dispuestos a entregar todos tus pedidos <br></br> somos rápidos a la hora de realizar un pedido y no cobramos domicilio!, si quieres contactar con nuestro número de operador marca al 312 3091009";

    // Envía el correo electrónico
    $mail->send();
    header('Location: index.php');

    // echo 'Correo electrónico enviado exitosamente.';
} catch (Exception $e) {
    echo 'Error al enviar correo electrónico: ', $mail->ErrorInfo;
}
?>