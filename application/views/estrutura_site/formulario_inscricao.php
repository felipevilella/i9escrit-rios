<div class="formulario_inscricao">
	<div class="container">
		<br><br><br><br><br>
		<form action="cadastrarprojeto" method="post" enctype="multipart/form-data">
			<div class="row">
			

				<div class="col-md-12 center">
					<h4>Cadastre o seu projeto </h4><hr>
				</div>
				<div class="col-md-6">
					<label>Nome projeto</label>
					<div class="input-group">
						<input type="text" class="form-control form-success" name="nomeprojeto" value="<?php   echo set_value('nomeprojeto'); ?>" placeholder="nome do projeto" aria-describedby="basic-addon1">

					</div>
					<label class="error-nome" id="error"><? echo form_error('nomeprojeto');?></label>
				</div>
				<div class="col-md-6">
					<label>Quatidade de integrantes</label>
					<div class="input-group">
						<select class="form-control " name="quantidade" id="quantintegrantes">
							<option value="">Selecione uma opção</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<label class="error-quantidade" id="error"><? echo form_error('quantidade');?></label>
				</div>
			</div>
			<div class="row" id="listintegrantes">
				<div class='col-md-6 hidden' id='nome0'>
					<label>Nome</label>
					<div class='input-group'>
						<input type='text' class='form-control form-success' value="<?php echo set_value('nome'); ?>" name='nome0' id='nome0' placeholder='digite o nome' aria-describedby='basic-addon1'>

					</div>
					<label class='error-nome0' id='error'><? echo form_error('nome0');?></label>
				</div>
				<div class='col-md-6 hidden' id='email0'>
					<label>Email</label>
					<div class='input-group'>
						<input type='text' class='form-control form-success' name='email0' id="email0" value="<?php echo set_value('email0'); ?>"  placeholder='digite o email' aria-describedby='basic-addon1'>
					</div>
					<label class='error-email0' id='error'><? echo form_error('email0');?></label>
				</div>
				<div class='col-md-6 hidden' id='nome1'>
					<label>Nome</label>
					<div class='input-group'>
						<input type='text' class='form-control form-success' name='nome1' id='nome1' value="<?php echo set_value('nome1'); ?>" placeholder='digite o nome' aria-describedby='basic-addon1'>
					</div>
					<label class='error-nome1' id='error'><? echo form_error('nome1');?></label>
				</div>
				<div class='col-md-6 hidden' id='email1'>
					<label>Email</label>
					<div class='input-group'>
						<input type='text' class='form-control form-success' name='email1'  placeholder='digite o email' value="<?php echo set_value('email1'); ?>" aria-describedby='basic-addon1'>
					</div>
					<label class='error-email1' id='error'><? echo form_error('email1');?></label>
				</div>
				<div class='col-md-6 hidden' id='nome2'>
					<label>Nome</label>
					<div class='input-group'>
						<input type='text' class='form-control form-success' name='nome2' value="<?php echo set_value('nome2'); ?>" placeholder='digite o nome' aria-describedby='basic-addon1'>
					</div>
					<label class='error-nome2' id='error'><? echo form_error('nome2');?></label>
				</div>
				<div class='col-md-6 hidden' id='email2'>
					<label>Email</label>
					<div class='input-group'>
						<input type='text' class='form-control form-success' name='email2' value="<?php echo set_value('email2'); ?>" placeholder='digite o email' aria-describedby='basic-addon1'>
					</div>
					<label class='error-email2' id='error'><? echo form_error('email2');?></label>
				</div>
				<div class='col-md-6 hidden' id='nome3'>
					<label>Nome</label>
					<div class='input-group'>
						<input type='text' class='form-control form-success' name='nome3'  value="<?php echo set_value('nome3'); ?>"placeholder='digite o nome' aria-describedby='basic-addon1'>
					</div>
					<label class='error-nome3' id='error'><? echo form_error('nome3');?></label>
				</div>
				<div class='col-md-6 hidden' id='email3'>
					<label>Email</label>
					<div class='input-group'>
						<input type='text' class='form-control form-success' name='email3'  placeholder='digite o email' value="<?php echo set_value('email3'); ?>" aria-describedby='basic-addon1'>
					</div>
					<label class='error-email3' id='error'><? echo form_error('email3');?></label>
				</div>
				<div class='col-md-6 hidden' id='nome4'>
					<label>Nome</label>
					<div class='input-group'>
						<input type='text' class='form-control form-success' name='nome4' value="<?php echo set_value('nome4'); ?>" placeholder='digite o nome' aria-describedby='basic-addon1'>
					</div>
					<label class='error-nome4' id='error'><? echo form_error('nome4');?></label>
				</div>
				<div class='col-md-6 hidden' id='email4'>
					<label>Email</label>
					<div class='input-group'>
						<input type='text' class='form-control form-success' name='email4'  placeholder='digite o email' value="<?php echo set_value('email4'); ?>" aria-describedby='basic-addon1'>
					</div>
					<label class='error-email4' id='error'><? echo form_error('email4');?></label>
				</div>
				<div class='col-md-6 hidden' id='nome5'>
					<label>Nome</label>
					<div class='input-group'>
						<input type='text' class='form-control form-success' name='nome5' value="<?php echo set_value('nome5'); ?>"  placeholder='digite o nome' aria-describedby='basic-addon1'>
					</div>
					<label class='error-nome5' id='error'><? echo form_error('nome5');?></label>
				</div>
				<div class='col-md-6 hidden' id='email5'>
					<label>Email</label>
					<div class='input-group'>
						<input type='text' class='form-control form-success' name='email5' value="<?php echo set_value('email5'); ?>" placeholder='digite o email' aria-describedby='basic-addon1'>
					</div>
					<label class='error-email5' id='error'><? echo form_error('email5');?></label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Video</label>
					<div class="input-group">
						<input type="text" class="form-control form-success" name="video" value="<?php echo set_value('video'); ?>" placeholder="Digite a url do video" aria-describedby="basic-addon1">
					</div>
					<label class="error-video" id="error"><? echo form_error('video');?></label>
				</div>

				<div class="col-md-6">
					<label>Fotos</label>
					<div class="input-group">
						<select class="form-control " name="quantidadefotos"  value="<?php echo set_value('quantidadefotos'); ?>"id="quantifotos">
							<option value="">Selecione uma opção</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
					<label class="error-qfoto" id="error"><? echo form_error('quantidadefotos');?></label>
				</div>
			</div>
			<div class="row" id="quantidadefotos">

				<div class='col-md-6 hidden' id='foto0'>
					<label>foto </label>
					<div class='input-group' >
						<span class='btn btn-success btn-file '><span class='fileinput-new'>Adicionar foto</span><span class='fileinput-exists'></span><input type='file' name='foto0'></span>	
					</div>
					<label class='error-foto0' id='error'></label>
				</div>

				<div class='col-md-6 hidden' id='foto1'>
					<label>foto </label>
					<div class='input-group' >
						<span class='btn btn-success btn-file '><span class='fileinput-new'>Adicionar foto</span><span class='fileinput-exists'></span><input type='file' name='foto1'></span>	
					</div>
					<label class='error-foto1' id='error'></label>
				</div>

				<div class='col-md-6 hidden' id='foto2' >
					<label>foto </label>
					<div class='input-group' >
						<span class='btn btn-success btn-file '><span class='fileinput-new'>Adicionar foto</span><span class='fileinput-exists'></span><input type='file' name='foto2'></span>	
					</div>
					<label class='error-foto2' id='error'></label>
				</div>

				<div class='col-md-6 hidden' id='foto3'>
					<label>foto </label>
					<div class='input-group' >
						<span class='btn btn-success btn-file '><span class='fileinput-new'>Adicionar foto</span><span class='fileinput-exists'></span><input type='file' name='foto3'></span>	
					</div>
					<label class='error-foto3' id='error'></label>
				</div>

			</div>
			<div class="row">
				<div class="col-md-6">
					<label>Estagio do projeto</label>
					<div class="input-group">
						<select class="form-control " name="estagio" value="<?php echo set_value('estagio'); ?>" id="estagio">
							<option value="">Selecione uma opção</option>
							<option value="1">Concluido</option>
							<option value="2">Patente</option>
							<option value="3">Em desenvolvimento</option>
						</select>
					</div>
					<label class="error-estagio" id="error"><? echo form_error('estagio');?></label>
				</div>

				<div class="col-md-6">
					<label>Data de criação do projeto</label>
					<div class='input-group'>
						<input type='date' class="form-control" name="data_i" value="<?php echo set_value('data_i'); ?>" placeholder="05/08/2017" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
						</span>
					</div>
					<label class="error-data" id="error"><? echo form_error('datai');?></label>
				</div>
				<div class="col-md-6">
					<label>Descrição do projeto</label>
					<div class="input-group">
						<textarea class="form-control" id="descricao" rows="4"  name="descricao" value="<?php echo set_value('descricao'); ?>" placeholder="Escreva um preve descrição do seu projeto" maxlength="200"></textarea>
					</div>
					<label id="contadordescricao">200</label>
					<label class="error-descricao" id="error"><? echo form_error('descricao');?></label>
				</div>
				<div class="col-md-6">
					<label>Objetivo</label>
					<div class="input-group">
						<textarea class="form-control" rows="4" name="objetivo" id="objetivo" value="<?php echo set_value('objetivo'); ?>" placeholder="Escreva o objetivo do seu projeto" maxlength="500"></textarea>
					</div>
					<label id="contadorobjetivo">500</label>
					<label class="error-objetivo" id="error"><? echo form_error('objetivo');?></label>
				</div>

				<div class="col-md-6">
					<label>Categoria</label>
					<div class="input-group">
						<select class="form-control " name="categoria" value="<?php echo set_value('categoria'); ?>" id="categoria">
							<option value="">Selecione uma opção</option>
							<option value="Programaeprojetos">Programa e projetos</option>
							<option value="Vitrinetecnologica">Vitrine tecnologica</option>
						</select>
					</div>
					<label class="error-categoria" id="error"><? echo form_error('categoria');?></label>
				</div>
				<div class="col-md-6">
					<label>Palavra Chave</label>
					<div class="input-group">
						<input type="text" class="form-control form-success" id="palavrachave" value="<?php echo set_value('palavrachave'); ?>" placeholder="exemplo1;exemplo2" aria-describedby="basic-addon1">
					</div>
					<label class="error-palavra" id="error"></label>
				</div>
				<div class="col-md-12">
					<br>
					<button type="submit" class="btn btn-success col-md-12">Cadastrar projeto</button>
				</div>
			</div>
		</form>
	</div>
</div>
<br>


