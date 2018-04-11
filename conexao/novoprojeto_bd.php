<?php

if(isset($_GET["1"])){

	include_once 'classes/resize-class.php'; 


	$nome=$_POST["nome"];
	$nome_integrante=$_POST["nome_integrante"];
	$quantidade=$_POST["Quantidade"];

	$email=$_POST["Email"];
	$video=$_POST["video"];

	$foto= $_FILES['foto']['name'];
	$foto1=$_FILES['foto1']['name'];
	$foto2=$_FILES['foto2']['name'];
	$foto3=$_FILES['foto3']['name'];

	$diretorio = 'documento/';
	$documento = $diretorio . basename($_FILES['documento']['name']);

	$Patente=$_POST["Patente"];
	$descricao=$_POST["descricao"];
	$objetivo=$_POST["Objetivo"];
	$tag=$_POST["tag"];
	$data=$_POST["data"];
	$categoria=$_POST["Categoria"];


	$caminho="imagem/";
	$validacao=0;

			 //salvando documento
	if (move_uploaded_file($_FILES['documento']['tmp_name'], $documento)) {

	}else{
		echo "Erro!! documento não salvo";
		$validacao++;
	}



			//Salvando foto 

	if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminho . $foto)) { 

		$resize_tamanho1 = new resize($caminho . $foto);
		$resize_tamanho1->resizeImage(560, 393, 'crop');
		$tamanho1 = "tamanho1_" . $foto;
		$resize_tamanho1->saveImage($caminho . $tamanho1, 100);
	}
	else{
		echo "Erro!! imagem não compativel";
		$validacao++;
	}

	if(empty($foto1)){
		$tamanho2="";
	}
	else{

		if (move_uploaded_file($_FILES['foto1']['tmp_name'], $caminho . $foto1)) { 

			$resize_tamanho2 = new resize($caminho . $foto1);
			$resize_tamanho2->resizeImage(560, 393, 'crop');
			$tamanho2 = "tamanho2_" . $foto1;
			$resize_tamanho2->saveImage($caminho . $tamanho2, 100);
		}
		else{
			echo "Erro!! imagem não compativel";
			$validacao++;
		}
	}


	if(empty($foto2)){
		$tamanho3="";
	}
	else{

		if (move_uploaded_file($_FILES['foto2']['tmp_name'], $caminho . $foto2)) { 

			$resize_tamanho3 = new resize($caminho . $foto2);
			$resize_tamanho3->resizeImage(560, 393, 'crop');
			$tamanho3 = "tamanho3_" . $foto2;
			$resize_tamanho3->saveImage($caminho . $tamanho3, 100);
		}
		else{
			echo "Erro!! imagem não compativel";
			$validacao++;
		}
	}

	if(empty($foto3)){
		$tamanho4="";
	}
	else{

		if (move_uploaded_file($_FILES['foto3']['tmp_name'], $caminho . $foto3)) { 

			$resize_tamanho4 = new resize($caminho . $foto3);
			$resize_tamanho4->resizeImage(560, 393, 'crop');
			$tamanho4 = "tamanho3_" . $foto3;
			$resize_tamanho4->saveImage($caminho . $tamanho4, 100);
		}
		else{
			echo "Erro!! imagem não compativel";
			$validacao++;
		}
	}

	if($validacao==0 && $quantidade<=1){
		include 'conexao/cadastroconexao1_bd.php';
		$url = 'novoprojeto?2';
		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
		echo("<script LANGUAGE=\"JavaScript\">
			alert(\"projeto cadastrado com sucesso\");
			</SCRIPT>");

	}
	else if($validacao==0 && $quantidade>1){

		include 'conexao/cadastroconexao1_bd.php';

		$url = "novoprojeto?cod=$email";
		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	}

}
if(isset($_GET["5"])){
	$emailusuario=$_POST["email"];
	$cont=$_POST["cont"];
	require_once("conexao/funcoes.php");
	$id=busca_id_sistema($emailusuario);
	$quantidade=busca_quantidade($emailusuario);

	$aux=1;
	while ($aux <$cont) {
		$nome=$_POST["nome_integrante$aux"];
		$email=$_POST["Email$aux"];
		formulario_insercao_dados($nome,$email,$id);
		$aux++;
	}

	$url = 'novoprojeto?2';
	echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
	echo("<script LANGUAGE=\"JavaScript\">
		alert(\"projeto cadastrado com sucesso\");
		</SCRIPT>");

}



?>