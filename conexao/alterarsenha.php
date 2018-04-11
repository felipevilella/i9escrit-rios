<?php
require_once("funcoes.php");

$email=$_SESSION['usuarioLogin'];
$senha=$_POST["senha"];
$senhacrip=md5($senha);

$altera_senha=alterar_senha_login($email,$senhacrip);

if($altera_senha==true){
	$url = 'menu?1';

	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	echo("<script LANGUAGE=\"JavaScript\">
		alert(\"Senha alterado com suceso\");
		</SCRIPT>");

}


?>