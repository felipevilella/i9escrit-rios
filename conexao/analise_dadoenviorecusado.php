<?php
/* dados de envio para o email*/

$assunto="Dados de acesso I9 escritorios";
$mensagem="

        Olá, $nomeusuariobanco<br>
        Em atenção ao seu projeto, informamos que o mesmo não foi aprovado pela nossa equipe, pedimos que entre em contato com a nossa equipe para obter mais informações<br>


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