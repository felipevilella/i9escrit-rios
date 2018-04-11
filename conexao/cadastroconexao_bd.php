<?php

require_once "classes/cadastro.class.php";
$cadastro=new cadastro();

	
	$cadastro->SetNome($nome);
	$nomebanco=$cadastro->GetNome();


	$cadastro->SetNomeintegrantes($nome_integrante);
	$nomeintegrantesbanco=$cadastro->GetNomeintegrantes();

	$cadastro->SetQuantidade($quantidade);
	$Quantidadebanco=$cadastro->GetQuantidade();

	$cadastro->SetEmail($email);
	$emailbanco=$cadastro->GetEmail();

	$cadastro->SetVideo($video);
	$videobanco=$cadastro->GetVideo();

	$cadastro->SetFoto($tamanho1);
	$fotobanco=$cadastro->GetFoto();


	$cadastro->SetFoto1($tamanho2);
	$fotobanco1=$cadastro->GetFoto1();


	$cadastro->SetFoto2($tamanho3);
	$fotobanco2=$cadastro->GetFoto2();


	$cadastro->SetFoto3($tamanho4);
	$fotobanco3=$cadastro->GetFoto3();

	$cadastro->SetHora_estagio($hora);
	$horabanco=$cadastro->GetHora_estagio();

	$cadastro->setDocumentacao_projeto($documento);
	$documentobanco=$cadastro->GetDocumentacao_projeto();

	$cadastro->SetPatente($Patente);
	$patenteBanco=$cadastro->GetPatente();

	$cadastro->SetDescricao_projeto($descricao);
	$descricaobanco=$cadastro->GetDescricao_projeto();

	$cadastro->SetObjetivo($objetivo);
	$objetivobanco=$cadastro->GetObjetivo();

	$cadastro->SetPalavra_chave($tag);
	$tagbanco=$cadastro->GetPalavra_chave();

	$cadastro->SetData($data);
	$databanco=$cadastro->GetData();

	$cadastro->SetCategoria($categoria);
	$categoriabanco=$cadastro->GetCategoria();

	$comando="insert into projeto(nome,nome_integranteprincipal,quantidade_integrantes,email,video,foto_capa,foto1_projeto,foto2_projeto,foto3_projeto,documento_do_projeto,patente,descricao_do_projeto,objetivo,palavra_chave,categoria,data,aprovacao)values('$nomebanco','$nomeintegrantesbanco','$Quantidadebanco','$emailbanco','$videobanco','$fotobanco',
	'$fotobanco1','$fotobanco2','$fotobanco3','$documentobanco','$patenteBanco','$descricaobanco',
	'$objetivobanco','$tagbanco','$categoriabanco','$databanco','0')";
	include "conexao.php";	


	mysql_query($comando,$conexao)or die("impossivel salvar as informações");


	$senha=md5($email);
	$senhacrip=substr($senha,0,4);
	$comando1="insert into usuarios(usuario,nome,senha,prioriedade,primeiro_acesso)values('$email','$nomeintegrantesbanco','$senhacrip','usuario','0')";
	include "conexao.php";

	mysql_query($comando1,$conexao)or die("impossivel salvar as informações de acesso");
	?>