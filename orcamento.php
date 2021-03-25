<?php

if(isset($_POST['email']) && !empty($_POST['email']));{

$qtde = addcslashes($_POST['qtde']);
$js = addcslashes($_POST['js']);
$layout  = addcslashes($_POST['layout']);
$prazo  = addcslashes($_POST['prazo']);


$to = "gustavoleone3456@hotmail.com";
$subject = "Contato - Meu Portifólio";
$body = "Quantidade? : ".$qtde. "/r/n".
        "JavaScript? : ".$js. "/r/n".
        "Layout?: ".$layout."/r/n".
        "Prazo?: ".$prazo;

$header = "From:ninozikaaa@hotmail.com"."/r/n".
        "Reply-To:".$email."/e/r".
        "x=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("O E-mail não pode ser enviado.");
}
        
}