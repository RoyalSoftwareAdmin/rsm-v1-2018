<?php

  require 'PHPMailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'sg2plcpnl0210.prod.sin2.secureserver.net';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'test@royalsoftwaresolution.com';                 // SMTP username
  $mail->Password = 'Test@123';                           // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465; 
  $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


  $mail->setFrom('admin@royalsoftwaresolution.com', 'Welcome Mail');
  $mail->isHTML(true);
  
 ?>
 
