<?php
echo "
<div id='about'>
<div class='container'>
<div class='row'>
					
<div class='col-md-9 col-xs-12 forma' >

<label><h3>Alterar dados</h3></label>
	<form action=projetos?10  method=post enctype=multipart/form-data>
	<label class='col-md-12 col-xs-12'> Nome do projeto </label>
	<input type='text' class='col-md-9 col-xs-12' value='$nome_banco' name='nome' placeholder='Nome do Projeto' required>
	<label class='col-md-12 col-xs-12'> Nome </label>
	<input type='text' class='col-md-9 col-xs-12' name='nome_integrante' placeholder='Nome de um integrante do grupo' value='$nomeintegrantesbanco' value='$emailbanco' required>

	<label class='col-md-12 col-xs-12'> E-mail </label>
	<input type=email' class='col-md-9 col-xs-12' name='Email' placeholder='Email' value='$emailbanco' required>

	<label class='col-md-12 col-xs-12'> Quantidade de integrantes </label>
	<input type='number' class='col-md-9 col-xs-12' name='Quantidade' placeholder='Digite um numero' value='$quantidade'>


	<label class='col-md-12 col-xs-12'> Video </label>
	<input type='text' class='col-md-9 col-xs-12' value=$video name='video' placeholder='https://youtu.be/BGBdGkW8FOM'>


	<label class='col-md-12 col-xs-12 ''> Documentação do projeto </label>
	<input type='file' class='col-md-9 col-xs-12' name='documento' >

	<label class='col-md-12 col-xs-12'>Estagio do Projeto</label>
	<select class='col-md-9 col-xs-12' name='Patente' required>
	<option value='$patenteBanco'>$patenteBanco</option>
	<option value='Concluido'>Concluido</option>
	<option value='Patente'>Patente</option>
	<option value='Em Desenvolvimento'>Em Desenvolvimento</option>
	</select>


	<label class='col-md-12 col-xs-12'>Descrição do projeto</label>
	<textarea type='text' class='col-md-9 col-xs-12' name='descricao' placeholder='Descreva sobre o seu projeto' required>$descricaobanco</textarea>

	<label class='col-md-12 col-xs-12'>Objetivo</label>
	<textarea type='text' class='col-md-9 col-xs-12' name='Objetivo' placeholder='Descreva o objetivo do seu projeto' required>$objetivobanco</textarea>

	<label class='col-md-12 col-xs-12'>TAG / Palavra chave</label>
	<input  type='text' class='col-md-9 col-xs-12' name='tag' placeholder='Exemplo1, Exemplo2'  value='$tagbanco' required></textarea>



	<label class='col-md-12 col-xs-12'>Data de criação do projeto</label>
	<input  type='date' class='col-md-9 col-xs-12' name='data' value='$databanco' required></textarea>


    <input type='hidden' name=id value='$id'>

	<div class='cBtn col-xs-12'>
	<br>
	<button type='submit' class='btn btn-primary'>ALTERAR PROJETO</button><br><br><br><br><br>
	</form>

	</div></div></div></div></div>";



?> 