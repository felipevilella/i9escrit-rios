<?php
require_once("classes/cadastro.class.php");
$cadastro= new cadastro;

$comando="select * from projeto where categoria='Jogos_digitais' and aprovacao='1'";
include 'conexao.php';
$rs=mysql_query($comando,$conexao) or die("impossivel localizar");
$aux=0;

$nome_banco=array();
$fotobanco=array();
$descricaobanco=array();
$idbanco=array();




while($aux<mysql_num_rows($rs)){
	$R=mysql_fetch_array($rs);

	$id=$R["id"];
	$nome=$R["nome"];
	$foto_capa=$R["foto_capa"];	
	$descricao=$R["descricao_do_projeto"];
	$descr=substr($descricao,0,151);
    
    $cadastro->SetId($id);
    $idbanco[$aux]=$cadastro->GetId();

	$cadastro->SetNome($nome);
	$nome_banco[$aux]=$cadastro->GetNome();
	
	$cadastro->SetFoto($foto_capa);
	$fotobanco[$aux]=$cadastro->GetFoto();
	
	$cadastro->SetDescricao_projeto($descr);
	$descricaobanco[$aux]=$cadastro->GetDescricao_projeto();

     

	$aux++;
}


?>