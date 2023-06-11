<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer\src\PHPMailer.php';
require 'PHPMailer\src\SMTP.php';
require 'PHPMailer\src\Exception.php';

require 'vendor/autoload.php';

// Configurações do servidor de e-mail
$mail = new PHPMailer(true);

try {
  $mail->isSMTP();
  $mail->SMTPDebug = SMTP::DEBUG_OFF;
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 465;
  $mail->SMTPSecure = 'tls';
  // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->SMTPAuth = true;
  $mail->Username = 'devnoleto@gmail.com';
  $mail->Password = 'qrebbtalbvddurlp';

  $mail->setFrom('devnoleto@gmail.com', 'Formulario Portfolio');
  $mail->addAddress('devnoleto@gmail.com', 'Ramon Noleto Portfolio');
  $mail->Subject = 'Formulario vindo do Portfolio';

  $nome = $_POST['nome'];
  $celular = $_POST['celular'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  $mail->Body = "Nome: $nome\nCelular: $celular\nE-mail: $email\nMensagem: $mensagem";

  $mail->send();
  echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
  echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
}
