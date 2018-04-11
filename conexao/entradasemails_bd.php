<?php
require_once "classes/cadastro.class.php";
$cadastro=new cadastro();

$nome=array();
$email=array();

$aux=1;


while ($aux<$quantidade) {
	$emailb=$_POST["Email$aux"];
	$cadastro->SetEmail($emailb);
	$emailbanco=$cadastro->GetEmail();

	$nomeb=$_POST["nome_integrante$aux"];
	$cadastro->SetNome($nomeb);
	$nomebanco=$cadastro->GetNome();

	$email[$aux]=$emailbanco;
	$nome[$aux]=$nomebanco;
	
	$comando="insert into integrante_projetos(id_projeto,nome,email)values('$id','$nome[$aux]','$email[$aux]')";
	include("conexao.php");
	mysql_query($comando,$conexao) or die("impossivel salvar informações");
	
	$aux++;

}





?>