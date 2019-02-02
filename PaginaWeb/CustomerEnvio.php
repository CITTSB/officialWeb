<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/POP3.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if (isset($_POST["opcion"])) {
    
    $contenido="";
    $CorreoDestino="";

    if (isset($_POST["id_contenido"])){
        $id = $_POST["id_contenido"];

        if($id=="2"){
           $CorreoDestino="benja.mora.torres@gmail.com";
        }
    }

    if ($_POST["opcion"] == "Enviar Mensaje") {
        //Envio de correo recepcion
        $mail = new PHPMailer(true);
        try {
            $correo = $_POST['correo'];
            $mensaje = $_POST['mensaje'];
            $nombre = $_POST['nombre'];
            $mail->isSMTP(); // Set mailer to use SMTP xd
            $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'webscontactos@gmail.com'; // SMTP username
            $mail->Password = 'abcd14abcd'; // SMTP password
            $mail->SMTPSecure = 'ssl';
            $mail->IsHTML(true); // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465; // TCP port to connect to

            $mail->setFrom('webscontactos@gmail.com', 'Contacto Web');         
            
            $mail->addAddress($CorreoDestino);
            
            $mail->Subject = 'Nuevo correo de ' . $correo;
            $m = "<strong>Nombre: " . $nombre .
                "</strong> <br> <br> <strong> correo:</strong>" . $correo .
                " <br> <br>  <strong>mensaje:</strong> " . $mensaje;
            $mail->Body = $m;
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

        //correo al que lo envio
        $mail2 = new PHPMailer(true);
        try {
            $mail2->isSMTP(); // Set mailer to use SMTP
            $mail2->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
            $mail2->SMTPAuth = true; // Enable SMTP authentication
            $mail2->Username = 'cittsb.contacto@gmail.com'; // SMTP username
            $mail2->Password = 'abcd13abcd'; // SMTP password
            $mail2->SMTPSecure = 'ssl';
            $mail2->IsHTML(true); // Enable TLS encryption, `ssl` also accepted
            $mail2->Port = 465; // TCP port to connect to

            $mail2->setFrom('cittsb.contacto@gmail.com', 'Contacto Capitanes CITT San Bernardo');
            $mail2->addAddress($correo);
            $mail2->Subject = 'Hemos recibido su mensaje';
            $m = "Le informamos que CITTSB a recibido su mensaje. <br> Su mensaje será respondido dentro de las 24 horas. ";
            $mail2->Body = $m;

            if ($mail2->Send()) {

                if ($mail->Send()) {
                    echo '<script type="text/javascript">
                        alert("Su mensaje ha sido enviado");
                        window.location="index.html"
                   </script>';
                } else {
                    echo '<script type="text/javascript">
                alert("NO ENVIADO, intentar de nuevo");
                window.location="index.html"
                </script>';
                }
            } else {
                echo '<script type="text/javascript">
                    alert("NO ENVIADO, intentar de nuevo");
                    window.location="index.html"
                    </script>';
            }
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
} else {
    echo '<script type="text/javascript">
    alert("error 404 . Pagina no encontrada");
    window.location="index.html"
    </script>';
}


function mensaje(){
    $texto="<div bgcolor='#FFFFFF' marginwidth='0' marginheight='0' style='font-family:Arial,Helvetica,sans-serif;color:#454545'>

    <table width='589' border='0' cellpadding='0' cellspacing='0' style='font-family:Arial,Helvetica,sans-serif;margin:0 auto;border:5px solid #edece8;color:#454545;padding:0'>
        <tbody>
            <tr>
            <td width='370' height='96'>
                <h1 style='font-size:20px;font-weight:normal;margin-left:10px'>
                Recuperación de Contraseña
            </h1>
            </td>
            <td colspan='3' align='right'>
                <!--<img style='display:block' src='' width='219' height='96' alt='' class='CToWUd'>-->
            </td>
        </tr>
        <tr>
            <td width='589' colspan='4' style='border-top:5px #027dff solid'>
                <p style='font-size:14px;line-height:20px;margin:20px 20px'>
                    Estimado(a) 
                </p>
            </td>
        </tr>
        <tr>
            <td width='589' colspan='4'>
                <p style='font-size:14px;line-height:20px;margin:0px 20px 20px'>
                    Te informamos que su <span class='il'>clave nueva</span>  es:   asociada con tu USUARIO: 190553388.
                </p>
            </td>
        </tr>
        <tr>
            <td width='589' height='50' colspan='4'>
                <p style='font-size:14px;line-height:20px;margin:0px 20px 20px'>
                    Un cordial saludo,<br><br>
                    <strong>Sistema de Inasistencia<br>
                        Duoc UC San Bernardo
                    </strong>
                </p>
            </td>
        </tr><tr>
        </tr><tr>
            <td width='370' height='65' bgcolor='#EDECE8'><p style='font-size:12px;color:#575654;text-align:left;margin-left:10px'>Tel: xxx | <a href='http://www.cittsb.cl:8080/Inasistencia/' style='color:#027dff' target='_blank' data-saferedirecturl='http://www.cittsb.cl:8080/Inasistencia/'>Sistema Inasistencia</a></p></td>
            <td width='149' height='65' bgcolor='#EDECE8' align='right'>
            </td>
        </tr>
    </tbody></table>";
    return $texto;
}