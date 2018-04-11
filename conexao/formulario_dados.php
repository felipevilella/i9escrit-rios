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
			$hora=$_POST["hora"];

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
				include 'conexao/cadastroconexao_bd.php';
				//Envio de dados para o email
				//include"conexao/dadosemail_bd.php";
				$url = 'formulario?2';
				echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
				echo("<script LANGUAGE=\"JavaScript\">
					alert(\"Cadastro realizado com sucesso, dados de acesso enviado para $email\");
					</SCRIPT>");

			}
			else if($validacao==0 && $quantidade>1){
				
				include 'conexao/cadastroconexao_bd.php';

				$url = "formulario?cod=$email";
				echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
			}

		}
		if(isset($_GET["5"])){
			$emailusuario=$_POST["email"];
			require_once("conexao/funcoes.php");
			$id=busca_id($emailusuario);
			$quantidade=busca_quantidade($emailusuario);
			
			$email=dados_de_acesso_email($emailusuario);
			$senhacrip=dados_de_acesso_senha($emailusuario);
            $nomeusuariobanco=dados_de_acesso_nome($emailusuario);


			include"conexao/entradasemails_bd.php";
		    //Envio de dados para o email
			//include"conexao/dadosemail_bd.php";
			$url = 'formulario?2';
			echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
			echo("<script LANGUAGE=\"JavaScript\">
				alert(\"Cadastro realizado com sucesso, dados de acesso enviado para $email\");
				</SCRIPT>");

		}



?>