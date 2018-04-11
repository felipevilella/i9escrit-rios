<?php



$imagem_capa_banco=array();
$titulo_banco=array();
$data_banco=array();
$categoria_banco=array();
$id_banco=array();
$descricao_banco=array();
$cont=0;

$comando="select * from projeto where categoria='Vitirne_da_inovacao' and aprovacao='1'";
include("conexao.php");
$rs=mysql_query($comando,$conexao);
$aux=0;

while($aux<mysql_num_rows($rs)){
	require_once "classes/cadastro.class.php";
	$banco = new cadastro();

	$R=mysql_fetch_array($rs);

	$id=$R["id"];
	$nome=$R["nome"];
	$imagem=$R["foto_capa"];
	$data=$R["data"];
	$categoria=$R["categoria"];
	$descricao=$R["descricao_do_projeto"];
	$descr=substr($descricao,0,251);
    
	$banco->SetNome($nome);
	$titulo_banco[$aux]=$banco->GetNome();

	$banco->SetId($id);
	$id_banco[$aux]=$banco->GetId();

	$banco->SetFoto($imagem);
	$imagem_capa_banco[$aux]=$banco->GetFoto();

	$banco->SetData($data);
	$data_banco[$aux]=$banco->GetData();

	$banco->SetCategoria($categoria);
	$categoria_banco[$aux]=$banco->GetCategoria();

	$banco->SetDescricao_projeto($descr);
	$descricao_banco[$aux]=$banco->GetDescricao_projeto();

	$aux++;
	$cont++;
}




?>