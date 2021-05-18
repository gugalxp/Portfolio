<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gustavo Arruda</title>
    <link rel="stylesheet" type="text/css" href="contato.css">

   
</head>
<body> 


<section class="sessao-contato" id="contato">

    <div class="sessao-header">
        <a href="http://localhost/portifolio/index.html"><input type="button" value="Voltar" onClick="history.go(-1)"> </a> 

    </div>

    <div class="contato-wrapper">
     
    <div class="contato">
    <h1>Contato</h1>


    <form action="email.php" method="POST">
    
        
        <div class="input-group">
            <input type="text" class="field" id="text" name="nome" placeholder="Digite seu nome aqui">
            <label for="nome" class="field-label">Nome</label>
        </div>
            
            
             <div class="input-group">
            <input type="text" class="field" id="email" name="email" placeholder="Digite seu melhor e-mail aqui.">
            <label for="email" class="field-label">E-mail</label>
            </div>


        <div class="input-group">
        <textarea class="field" id="mensagem" name="mensagem" placeholder="Digite sua mensagem aqui."></textarea>       
        <label for="mensagem" class="field-label">Mensagem</label>
        </div>

                    <button type="subimit" class="btn-submit" name="button">Enviar</button>
    
    </form>
    </div>
        </div>
    
    </section>
    
    
    <footer>
        <div class="footer-content">
            <p>
                Copyright &copy; 2021, Gustavo Arruda - Todos os direitos reservados.
            </p>
            <div class="social-list">
                <ul>
    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
    <li><a href=""><i class="fab fa-instagram"></i></a></li>
    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
    </ul>
            </div>
        </div>
    </footer>

    </body>

    </html>
    