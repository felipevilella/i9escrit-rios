<?php

require_once"classes/cadastro.class.php";
$cadastro=new cadastro;

$comando="select * from projeto where id='$id'";
	include "conexao.php";
	$rs=mysql_query($comando,$conexao) or die("impossivel localizar");
	$aux=0;

	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
        $id=$R["id"];
		$nome=$R["nome"];
		$nome_integrante=$R["nome_integranteprincipal"];
		$email=$R["email"];
		$video=$R["video"];
		$foto_capa=$R["foto_capa"];
		$foto1_projeto=$R["foto1_projeto"];
		$foto2_projeto=$R["foto2_projeto"];
		$foto3_projeto=$R["foto3_projeto"];
		$documento=$R["documento_do_projeto"];
		$patente=$R["patente"];
		$descricao=$R["descricao_do_projeto"];
		$objetivo=$R["objetivo"];
		$palavra_chave=$R["palavra_chave"];
		$categoria=$R["categoria"];
		$data=$R["data"];
		$quantidade=$R["quantidade_integrantes"];

		$video_1=substr($video,17,20);

		$cadastro->SetNome($nome);
		$nome_banco=$cadastro->GetNome();

		$cadastro->SetNomeintegrantes($nome_integrante);
		$nomeintegrantesbanco=$cadastro->GetNomeintegrantes();



		$cadastro->SetEmail($email);
		$emailbanco=$cadastro->GetEmail();

		$cadastro->SetVideo($video_1);
		$videobanco=$cadastro->GetVideo();

		$cadastro->SetFoto($foto_capa);
		$fotobanco=$cadastro->GetFoto();


		$cadastro->SetFoto1($foto1_projeto);
		$fotobanco1=$cadastro->GetFoto1();


		$cadastro->SetFoto2($foto2_projeto);
		$fotobanco2=$cadastro->GetFoto2();


		$cadastro->SetFoto3($foto3_projeto);
		$fotobanco3=$cadastro->GetFoto3();


		$cadastro->setDocumentacao_projeto($documento);
		$documentobanco=$cadastro->GetDocumentacao_projeto();

		$cadastro->SetPatente($patente);
		$patenteBanco=$cadastro->GetPatente();

		$cadastro->SetDescricao_projeto($descricao);
		$descricaobanco=$cadastro->GetDescricao_projeto();

		$cadastro->SetObjetivo($objetivo);
		$objetivobanco=$cadastro->GetObjetivo();

		$cadastro->SetPalavra_chave($palavra_chave);
		$tagbanco=$cadastro->GetPalavra_chave();

		$cadastro->SetData($data);
		$databanco=$cadastro->GetData();

		$cadastro->SetCategoria($categoria);
		$categoriabanco=$cadastro->GetCategoria();



		$aux++;
	}

?>