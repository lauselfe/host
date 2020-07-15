<?php

///recibir mensaje desde la web al correo gmail de la empresa con la libreria PHPMailer
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$evento = $_POST['evento'];


if(isset($_POST['conditions'])){
  $conditions = $_POST['conditions'];
  if($nombre!=="" && $mail!== "" && $evento!== ""){
        $email_to = "miyulauri@gmail.com";
        require("../PHPMailer/class.phpmailer.php");
        require("../PHPMailer/class.smtp.php");

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPAuth = true;

        $mail->Username = 'ifabphpclass@gmail.com';
        $mail->Password = 'alumnOifab2020';

        $mail->From = $_POST['mail']; //desde donde enviamos (el from en el email)
        $mail->FromName = $_POST['nombre'];

        $mail->Subject = "Reserva"; //titulo del email

        $mail->IsHTML(true);

        $body = $_POST['evento'];

        $mail->Body = $body;

        $mail->AddAddress('miyulauri@gmail.com'); //la direccion a la que se va a enviar el correo de confirmacion

        $exito1 = $mail->Send();

        
        ////mensaje de contestacion con la libreria PHPMailer
        $email_to = $_POST['mail'];
       // require("../PHPMailer/class.phpmailer.php");
        //require("../PHPMailer/class.smtp.php");

        $mail = new PHPMailer();

        //iniciamos la validacion por SMTP

        $mail->IsSMTP();
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPAuth = true;


       
        $mail->Username = 'ifabphpclass@gmail.com';
        $mail->Password = 'alumnOifab2020';

        /*como configurar la cuenta de correo para poder usarla: 
                allow less secure apps: ON
        */

        $mail-> From = "noreply@host.com"; //desde donde enviamos (el from en el email)
        $mail -> FromName = " Host";
        //from: IFAB <noreply@ifab..com>

        $mail->Subject = "noreply Eventos, Host"; //titulo del email

        $mail->IsHTML(true);

        $body = "<p>Hola, ".$_POST['nombre']."Hemos recibido tu reserva. En breves te enviaremos una confirmación.</p>";

        $mail->Body = $body;

        $mail->AddAddress($_POST['mail']); //la direccion a la que se va a enviar el correo de confirmacion

        $exito2 = $mail->Send();

        if($exito2){
            header("Location:../index.php?envia=ok2");
        }else{
            header("Location:../index.php?envia=ko2");
        }


        if($exito1){
            header("Location:../index.php?envia=ok1");
        }else{
            header("Location:../index.php?envia=ko1");
        }
       
  }else{
    echo "Completa todos los campos";
    header("Location:../index.php?envia=error");
  }
}else{
  echo 'Debes aceptar las condicines de uso de datos';
  header("Location:../index.php?envia=error_cond");
}
  ?>