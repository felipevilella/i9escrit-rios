<?php
	require_once"classes/cadastro.class.php";
	$classe=new cadastro;
	$comando="select * from projeto where email='$email'";
	include("conexao.php");

	$rs=mysql_query($comando,$conexao);
	$aux=0;

    $id_banco=array();
    $nome_banco=array();
  	$categoria_banco=array();
  	$aprovacao_banco=array();
    $quantidade_banco=array();

  	while($aux<mysql_num_rows($rs)){
  		$R=mysql_fetch_array($rs);
  		$id=$R["id"];
  		$nome=$R["nome"];
  		$categoria=$R["categoria"];
  		$aprovacao=$R["aprovacao"];
      $quantidade=$R["quantidade_integrantes"];

  		$classe->SetNome("$nome");
  		$nome_banco[$aux]=$classe->GetNome();
  		

  		$classe->SetId("$id");
  		$id_banco[$aux]=$classe->GetId();
  		
  		$classe->SetCategoria("$categoria");
  		$categoria_banco[$aux]=$classe->GetCategoria();

  		$classe->SetAprovacao($aprovacao);
  		$aprovacao_banco[$aux]=$classe->GetAprovacao();

      $classe->SetQuantidade($quantidade);
      $quantidade_banco[$aux]=$classe->GetQuantidade();

  		$aux++;

  	}
?>