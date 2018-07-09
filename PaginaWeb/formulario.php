<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\POP3;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/POP3.php';
require 'PHPMailer/SMTP.php';

if (isset($_POST["opcion"])){
    if($_POST["opcion"]=="Enviar Mensaje"){
        //Envio de correo recepcion
        $mail = new PHPMailer;

        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        $nombre = $_POST['nombre'];

        $mail->isSMTP();                                      // Set mailer to use SMTP xd
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'cittsb.contacto@gmail.com';                 // SMTP username
        $mail->Password = 'abcd13abcd';                           // SMTP password
        $mail->SMTPSecure = 'ssl';       
        $mail->IsHTML(true);                     // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->setFrom('cittsb.contacto@gmail.com', 'Contacto Capitanes CITT San Bernardo');
       // $mail->addAddress($correo, $nombre);     
       
       $mail->addAddress('by.sepulvedas@alumnos.duoc.cl');            
       $mail->addAddress('leon.romero@alumnos.duoc.cl');     
        $mail->addAddress('b.morat@alumnos.duoc.cl');     
        $mail->Subject = 'Nuevo correo de ' . $correo;
        $m = "<strong>Nombre: " . $nombre .
             "</strong> <br> <br> <strong> correo:</strong>" . $correo .
              " <br> <br>  <strong>mensaje:</strong> " . $mensaje;
        $mail->Body = $m;

        //correo al que lo envio
        $mail2 = new PHPMailer;
        $mail2->isSMTP();                                      // Set mailer to use SMTP
        $mail2->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail2->SMTPAuth = true;                               // Enable SMTP authentication
        $mail2->Username = 'cittsb.contacto@gmail.com';                 // SMTP username
        $mail2->Password = 'abcd13abcd';                           // SMTP password
        $mail2->SMTPSecure = 'ssl';       
        $mail2->IsHTML(true);                     // Enable TLS encryption, `ssl` also accepted
        $mail2->Port = 465;                                    // TCP port to connect to

        $mail2->setFrom('cittsb.contacto@gmail.com', 'Contacto Capitanes CITT San Bernardo');
        $mail2->addAddress($correo);     
        $mail2->Subject = 'Hemos recibido su mensaje';
        $m = "Le informamos que CITTSB a recibido su mensaje. <br> Su mensaje será respondido dentro de las 24 horas. ";
        $mail2->Body = $m;

        if($mail2->Send())
        {

            if($mail->Send())
            {
                echo'<script type="text/javascript">
                        alert("Su mensaje ha sido enviado");
                        window.location="index.html"
                   </script>';
            }else{
                echo'<script type="text/javascript">
                alert("NO ENVIADO, intentar de nuevo");
                window.location="index.html"
                </script>';
            }
        }
        else{
            echo'<script type="text/javascript">
                    alert("NO ENVIADO, intentar de nuevo");
                    window.location="index.html"
                    </script>';
        }
    }
}else{
    echo'<script type="text/javascript">
    alert("error 404 . Pagina no encontrada");
    window.location="index.html"
    </script>';
}


?>
