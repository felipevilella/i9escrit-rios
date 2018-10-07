<div class="formulario_inscricao">
 <div class="container">
 	<br><br><br><br><br>
 	<div class="row">
 		
 			<div class="col-md-12 center">
 				<h4>Cadastre o seu projeto </h4><hr>
 			</div>
 			<div class="col-md-6">
 				<label>Nome projeto</label>
 				<div class="input-group">
 					<input type="text" class="form-control form-success" id="nomeprojeto" placeholder="nome do projeto" aria-describedby="basic-addon1">
 				</div>
 				<label class="error-nome" id="error"></label>
 			</div>
 			<div class="col-md-6">
 				<label>Quatidade de integrantes</label>
 				<div class="input-group">
 					<select class="form-control " name="quantintegrantes" id="quantintegrantes">
 						<option value="">Selecione uma opção</option>
 						<option value="2">2</option>
 						<option value="3">3</option>
 						<option value="4">4</option>
 						<option value="5">5</option>
 					</select>
 				</div>
 				<label class="error-quantidade" id="error"></label>
 			</div>
 		</div>
 		<div class="row" id="listintegrantes">

 		</div>
 		<div class="row">
 			<div class="col-md-6">
 				<label>Video</label>
 				<div class="input-group">
 					<input type="text" class="form-control form-success" id="video" placeholder="Digite a url do video" aria-describedby="basic-addon1">
 				</div>
 				<label class="error-video" id="error"></label>
 			</div>

 			<div class="col-md-6">
 				<label>Fotos</label>
 				<div class="input-group">
 					<select class="form-control " name="quantidadefotos" id="quantifotos">
 						<option value="">Selecione uma opção</option>
 						<option value="2">2</option>
 						<option value="3">3</option>
 						<option value="4">4</option>
 					</select>
 				</div>
 				<label class="error-qfoto" id="error"></label>
 			</div>
 		</div>
 		<div class="row" id="quantidadefotos">

 		</div>
 		<div class="row">
 			<div class="col-md-6">
 				<label>Estagio do projeto</label>
 				<div class="input-group">
 					<select class="form-control " name="estagio" id="estagio">
 						<option value="">Selecione uma opção</option>
 						<option value="1">Concluido</option>
 						<option value="2">Patente</option>
 						<option value="3">Em desenvolvimento</option>
 					</select>
 				</div>
 				<label class="error-estagio" id="error"></label>
 			</div>

 			<div class="col-md-6">
 				<label>Data de criação do projeto</label>
 				<div class='input-group'>
 					<input type='date' class="form-control" id="datacriacao" placeholder="05/08/2017" />
 					<span class="input-group-addon">
 						<span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
 					</span>
 				</div>
 				<label class="error-data" id="error"></label>
 			</div>
 			<div class="col-md-6">
 				<label>Descrição do projeto</label>
 				<div class="input-group">
 					<textarea class="form-control" rows="4"  id="descricaoprojeto" placeholder="Escreva um preve descrição do seu projeto" maxlength="200"></textarea>
 				</div>
 				<label id="contadordescricao">200</label>
 				<label class="error-descricao" id="error"></label>
 			</div>
 			<div class="col-md-6">
 				<label>Objetivo</label>
 				<div class="input-group">
 					<textarea class="form-control" rows="4" id="obetivoprojeto" placeholder="Escreva o objetivo do seu projeto" maxlength="500"></textarea>
 				</div>
 				<label id="contadorobjetivo">500</label>
 				<label class="error-objetivo" id="error"></label>
 			</div>

 			<div class="col-md-6">
 				<label>Categoria</label>
 				<div class="input-group">
 					<select class="form-control " name="categoria" id="categoria">
 						<option value="">Selecione uma opção</option>
 						<option value="Programaeprojetos">Programa e projetos</option>
 						<option value="Vitrinetecnologica">Vitrine tecnologica</option>
 					</select>
 				</div>
 				<label class="error-categoria" id="error"></label>
 			</div>
 			<div class="col-md-6">
 				<label>Palavra Chave</label>
 				<div class="input-group">
 					<input type="text" class="form-control form-success" id="palavrachave" placeholder="exemplo1;exemplo2" aria-describedby="basic-addon1">
 				</div>
 				<label class="error-palavra" id="error"></label>
 			</div>
 			<div class="col-md-12">
 				<br>
 				<input  type="button" id="cadastroprojeto" class="btn btn-success col-md-12" value='Cadastrar projeto'>

 			</div>
 		</div>
 	</div>
 </div>
 <br>


