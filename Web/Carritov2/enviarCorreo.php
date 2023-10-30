<?php
        $correo = $_POST['email'];
        session_start();
        $compras = $_SESSION['compras'];
        $mensaje="";
        $total=0;
        for($i=0;$i<=count($compras)-1;$i++){
            
                 $mensaje .= $compras[$i]['nombre'];
                 $total += $compras[$i]['precio']; 

        }

        
use PHPMailer\PHPMailer\PHPMailer;
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

    $mail = new PHPMailer(true);

    try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    //Es para entrar al gmail
    $mail->Username = 'correo a utilizar';
    $mail->Password = 'contra';
    $mail->SMTPSecure = 'tls';

    //Recipiente
    //De aqui se envia los datos
    $mail->setFrom('correo a utilizar', 'TiendaOnline');
    //Es el destinatorio del mensaje
    $mail->addAddress($correo);

        $mail->isHTML(true);

        $mail->Subject = 'Resume de la compra';

        $mail->Body = <<<EOT
            Name: {$_POST['nombre']}
            Lista de compra: {$mensaje}
            Total: {$total}
EOT;
        $mail->send();
        echo "mensaje enviado correctamente";
    }catch(Exception $e){
        echo "Mensaje no henviado";
        
    }
       

?>