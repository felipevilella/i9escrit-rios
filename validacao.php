<!doctype html>
<html>
<head><title>validacao</title></head>
<body>
  <?php

  require_once("seguranca.php");
  require_once("conexao/funcoes.php");

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
    $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
    $senha1=md5($senha);
    //$s1=substr($senha1,0,12);
    if (validaUsuario($usuario, $senha) == true) {

     $primeiro_acesso=primeiro_acesso($usuario);

     if($primeiro_acesso==0){
      $url = 'alterarsenha';
      echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    }
    else{
     $url = 'menu';
     echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
   }
 } else {

  voltar();
}
}
?>
<body>
  </html>  

