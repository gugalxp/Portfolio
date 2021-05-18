<?php

require('../src/PHPMailer.php');
require('../src/SMTP.php');
require('../src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Não informado';
$email = isset($_POST['email']) ? $_POST['email'] : 'Não informado';
$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : 'Não informado';
$data = date('d/m/Y H:i:s'); 

$mail = new PHPMailer();

if($email && $mensagem){

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->CharSet = 'UTF-8';
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'curttorock@gmail.com';
$mail->Password = 'gugalxp500';
$mail->Port = 587;

$mail->setFrom('curttorock@gmail.com' , 'Portifólio');
$mail->addAddress('curttorock@gmail.com');

$mail->isHTML(true);
$mail->Subject = 'SITE PORTIFÓLIO';
$mail->Body = "Nome: {$nome}<br>
               Email: {$email}<br>
               Mensagem: {$mensagem}<br>
               Data/Hora: {$data}";

$mail->addAttachment('/imagens/emailportifolio.png', 'emailportifolio.png');
 
if($mail->send()) {

    echo "Email enviado comm sucesso.";
 
}else{

    echo "Email não enviado.";
}

} else{
    echo 'E-mail não enviado: informar o email e a mensagem.';
}

