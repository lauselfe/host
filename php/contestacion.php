<?php

///recibir mensaje desde la web al correo gmail de la empresa con la libreria PHPMailer
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


if(isset($_POST['conditions'])){
  $conditions = $_POST['conditions'];
  if($name!=="" && $email!== "" && $message!== ""){
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

        $mail->From = $_POST['email']; //desde donde enviamos (el from en el email)
        $mail->FromName = $_POST['name'];

        $mail->Subject = "Consulta"; //titulo del email

        $mail->IsHTML(true);

        $body = $_POST['message'];

        $mail->Body = $body;

        $mail->AddAddress('miyulauri@gmail.com'); //la direccion a la que se va a enviar el correo de confirmacion

        $exito1 = $mail->Send();

        
        ////mensaje de contestacion con la libreria PHPMailer
        $email_to = $_POST['email'];
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

        $mail->Subject = "noreply, Host"; //titulo del email

        $mail->IsHTML(true);

        $body = "<p>Hola, ".$_POST['name']."Recientemente ha solicitado informacion; nos pondremos en contacto contigo en breves.</p>";

        $mail->Body = $body;

        $mail->AddAddress($_POST['email']); //la direccion a la que se va a enviar el correo de confirmacion

        $exito2 = $mail->Send();

        if($exito2){
            header("Location:../contacto.php?envia=ok2");
        }else{
            header("Location:../contacto.php?envia=ko2");
        }


        if($exito1){
            header("Location:../contacto.php?envia=ok1");
        }else{
            header("Location:../contacto.php?envia=ko1");
        }
       
  }else{
    echo "Completa todos los campos";
    header("Location:../contacto.php?envia=error");
  }
}else{
  echo 'Debes aceptar las condicines de uso de datos';
  header("Location:../contacto.php?envia=error_cond");
}
  ?>