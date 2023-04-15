<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer/src/Exception.php';
require 'phpmailer/PHPMailer/src/PHPMailer.php';
require 'phpmailer/PHPMailer/src/SMTP.php';


echo "que recibe la info pls";

sendEmail();

function sendEmail(){
    if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['numero']) && isset($_POST['servicio'])
       && isset($_POST['asunto']) && isset($_POST['comentario'])){

        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $numero = $_POST['numero'];
        $servicio = $_POST['servicio'];
        $asunto = $_POST['asunto'];
        $comentario = $_POST['comentario'];

        $mail = new PHPMailer(true);

    try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->CharSet = 'utf-8';                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.promarketing.cl';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'pruebas@promarketing.cl';                     //SMTP username
    $mail->Password   = 'promarketing123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('pruebas@promarketing.cl', 'Mailer');
    $mail->addAddress($email, 'Joe User');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Correo de contacto';
    $mail->Body    = 'Nombre: '. $nombre . '<br>Correo: '. $email . '<br>Número de teléfono: '. $numero . 
                     '<br> Servicio seleccionado: '. $servicio . '<br>Asunto: '. $asunto . '<br>Comentarios: '. $comentario;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    

}else {
        return;
    }
}

?>