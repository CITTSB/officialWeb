<?php

session_start();

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/POP3.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if (isset($_POST["opcion"])) {
    if ($_POST["opcion"] == "Enviar Mensaje") {


        if(isset($_SESSION['numero1']) &&  isset($_SESSION['numero2'])){

            $numero1 = $_SESSION['numero1'];
            $numero2 = $_SESSION['numero2'];

            $resultado = $numero1+$numero2;

            //echo "resultado $numero1 + $numero2 = $resultado";

            $resultadoPost = $_POST['resultado'];
            
            if($resultado==$resultadoPost){


               
                $nombre_dispositivo = php_uname();
                $REMOTE_ADDR = "";
                $ip_local = GetHostByName($REMOTE_ADDR);
                $nombre_pc = gethostname(); 	
                $ip_publica = $_SERVER['REMOTE_ADDR'];
                

               //Envio de correo recepcion
                $mail = new PHPMailer(true);
                try {
                    $correo = $_POST['correo'];
                    $mensaje = $_POST['mensaje'];
                    $nombre = $_POST['nombre'];
                    $mail->isSMTP(); // Set mailer to use SMTP xd
                    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true; // Enable SMTP authentication
                    $mail->Username = 'cittsb.contacto@gmail.com'; // SMTP username
                    $mail->Password = 'abcd13abcd'; // SMTP password
                    $mail->SMTPSecure = 'ssl';
                    $mail->IsHTML(true); // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 465; // TCP port to connect to

                    $mail->setFrom('cittsb.contacto@gmail.com', 'Contacto Capitanes CITT San Bernardo');
                    // $mail->addAddress($correo, $nombre);

                    // $mail->addAddress('by.sepulvedas@alumnos.duoc.cl');
                    //  $mail->addAddress('leon.romero@alumnos.duoc.cl');



                    $mail->addAddress('b.morat@alumnos.duoc.cl');
                    $mail->Subject = "Nuevo correo de $correo ";
                    $m = "<strong>Nombre: $nombre </strong> <br>
                     <br> <strong> correo:</strong>  $correo <br>
                      <br>  <strong>mensaje:</strong>  $mensaje <br><br><br><br> datos : $nombre_dispositivo <br> Nombre equipo : $nombre_pc  <br> IP Local : $ip_local <br> IP Pública : $ip_publica ";
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
                            $_SESSION['mensaje']="200";
                            header('Location: ../index.php#section-contacts'); 
                        } else {
                            $_SESSION['mensaje']="400";
                            header('Location: ../index.php#section-contacts'); 
                        }
                    } else {
                        $_SESSION['mensaje']="400";
                        header('Location: ../index.php#section-contacts');   
                    }
                } catch (Exception $e) {
                // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                    header('Location: ../404.php');   
                }
                
            }else{
                $_SESSION['mensaje']="400";
                header('Location: ../index.php#section-contacts'); 
            }            
        }else{
            header('Location: ../404.php');   
        }
    }
} else {    
    header('Location: ../404.php');   
}
