<?php
if(isset($_GET["cod"])){
	$url=$_GET["cod"];


	require_once("conexao/funcoes.php");
	$funcao= busca_quantidade($url);
	echo "
	<div id='about'>
	<div class='container'>
	<div class='row'>

	<div class='col-md-9 col-xs-12 forma' >
	<form action=novoprojeto?5 method=post>
	<input type=hidden name=email value=$url>";
	include"conexao/listaparticipantes_bd.php";
	echo "<div class='cBtn col-xs-12'>
	<br>
	<button type='submit' class='btn btn-primary'>SALVAR INTEGRANTES</button><br><br>
	<br><br><br>
	</form>
	</div>
	</div>
	</div>
	</div>";

}    



if(isset($_GET["2"])){
	$email=$_SESSION['usuarioLogin'];
	$nome= $_SESSION['usuarioNome'];

	echo "
	<div id='about'>
	<div class='container'>
	<div class='row'>

	<div class='col-md-9 col-xs-12 forma' >
	<label><h3>CADASTRO DO PROJETO</h3></label>
	<form action=novoprojeto?1  method=post enctype=multipart/form-data>
	<label class='col-md-12 col-xs-12'> Nome do projeto </label>
	<input type='text' class='col-md-9 col-xs-12' name='nome' placeholder='Nome do Projeto' required>
	
	<input type='hidden' class='col-md-9 col-xs-12' name='nome_integrante' value='$nome'>
	<input type=hidden class='col-md-9 col-xs-12' name='Email' placeholder='Email' value='$email'>

	<label class='col-md-12 col-xs-12'> Quantidade de integrantes </label>
	<input type='number' class='col-md-9 col-xs-12' name='Quantidade' placeholder='Digite um numero'>


	<label class='col-md-12 col-xs-12'> Video </label>
	<input type='text' class='col-md-9 col-xs-12' name='video' placeholder='https://youtu.be/BGBdGkW8FOM'>
	<label class='col-md-12 col-xs-12'> Foto Capa </label>
	<input type='file' class='col-md-9 col-xs-12' name='foto' required>

	<label class='col-md-12 col-xs-12'> Foto 1 do projeto  </label>
	<input type='file' class='col-md-9 col-xs-12' name='foto1' required>

	<label class='col-md-12 col-xs-12'> Foto 2 do projeto </label>
	<input type='file' class='col-md-9 col-xs-12' name='foto2' required>

	<label class='col-md-12 col-xs-12'> Foto 3 do projeto </label>
	<input type='file' class='col-md-9 col-xs-12' name='foto3'>


	<label class='col-md-12 col-xs-12 ''> Documentação do projeto </label>
	<input type='file' class='col-md-9 col-xs-12' name='documento' >

	<label class='col-md-12 col-xs-12'>Estagio do Projeto</label>
	<select class='col-md-9 col-xs-12' name='Patente' required>
	<option value=''>SELECIONE</option>
	<option value='Concluido'>Concluido</option>
	<option value='Patente'>Patente</option>
	<option value='Em Desenvolvimento'>Em Desenvolvimento</option>
	</select>


	<label class='col-md-12 col-xs-12'>Descrição do projeto</label>
	<textarea type='text' class='col-md-9 col-xs-12' name='descricao' placeholder='Descreva sobre o seu projeto' required></textarea>

	<label class='col-md-12 col-xs-12'>Objetivo</label>
	<textarea type='text' class='col-md-9 col-xs-12' name='Objetivo' placeholder='Descreva o objetivo do seu projeto' required></textarea>

	<label class='col-md-12 col-xs-12'>TAG / Palavra chave</label>
	<input  type='text' class='col-md-9 col-xs-12' name='tag' placeholder='Exemplo1, Exemplo2' required></textarea>



	<label class='col-md-12 col-xs-12'>Data de criação do projeto</label>
	<input  type='date' class='col-md-9 col-xs-12' name='data'  required></textarea>


	<label class='col-md-12 col-xs-12'>Categoria</label>

	<select class='col-md-9 col-xs-12' name='Categoria' required>
	<option value=''>SELECIONE</option>
	<option value='Jogos_digitais'>JOGOS DIGITAIS</option>
	<option value='Startups'>STARTUP</option>
	<option value='Vitirne_da_inovacao'>VITRINE DA INOVAÇÃO</option>
	</select>



	<div class='cBtn col-xs-12'>
	<br>
	<button type='submit' class='btn btn-primary'>CADASTRAR PROJETO</button><br><br><br><br><br>
	</form>
	</div></div></div></div>";
}
?>