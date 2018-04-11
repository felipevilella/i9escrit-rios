<?php
/* dados de envio para o email*/

$assunto="Dados de acesso I9 escritorios";
$mensagem="

        Olá, $nomeusuariobanco<br>
        Agradecemos ao cadastro do seu projeto no nosso sistema, foi gerado os dados de acesso para as futuras modificações e novas inclusões.<br>

        <h5><b>Dados de acesso:<b></h5>
        Usuario: $email<br>
        Senha: $senhacrip<br><br><br>
        acesse: <a href='www.i9escritorio.una.br/acesso'>www.i9escritorio.una.br/acesso</a> para ativar a sua conta. <br>

        <h7>Nossa equipe está verificando seu projeto, em breve retornaremos com mais informações</h7>

        <h3><b>I9Escritorio</b></h3>
        <h7>Centro Universitario Una-UNA</h7>
";

$headers =  "Content-Type:text/html; charset=UTF-8\n";
        $headers .= "From:  i9escritorios.com.br\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
        $headers .= "X-Sender: i9escritorios@i9escritorios.com.br \n"; //email do servidor //que enviou
        $headers .= "X-Mailer: PHP  v".phpversion()."\n";
        $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
        $headers .= "Return-Path: dados@foruna.br  \n"; //caso a msg //seja respondida vai para  este email.
        $headers .= "MIME-Version: 1.0\n";

        mail($email, $assunto, $mensagem, $headers);  //função que faz o envio do email.

        $contador++;






?>