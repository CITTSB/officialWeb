<?php

require 'PHPMailer/PHPMailerAutoload.php';

if ($_POST["opcion"]=="Enviar"){
    
    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $correo = $_POST['email'];
    $mensaje = $_POST['message'];
    $nombre = $_POST['name'];

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'cittsb.contacto@gmail.com';                 // SMTP username
    $mail->Password = 'abcd13abcd';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('cuenta-de-correo@sudominio.cl', 'Mailer');
    $mail->addAddress($correo, $nombre);     

    $mail->Subject = 'Aqui va el Asunto';
    $mail->Body    = $mensaje;

    if(!$mail->send()) {
        echo 'Error, mensaje no enviado';
        echo 'Error del mensaje: ' . $mail->ErrorInfo;
    } else {
        echo 'El mensaje se ha enviado correctamente';
        
    }




}else{
    echo "error";
}
