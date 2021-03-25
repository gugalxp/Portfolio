<?php

if(isset($_POST['email']) && !empty($_POST['email']));{

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem  = addcslashes($_POST['mensagem']);

$to = "gustavoleone3456@hotmail.com";
$subject = "Contato - Meu Portifólio";
$body = "Nome: ".$nome. "/r/n".
        "Email: ".$email. "/r/n".
        "Mensagem: ".$mensagem;
$header = "From:ninozikaaa@hotmail.com"."/r/n".
        "Reply-To:".$email."/e/r".
        "x=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("O E-mail não pode ser enviado.");
}
        
}