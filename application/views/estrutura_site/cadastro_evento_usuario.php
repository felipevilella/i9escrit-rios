 <div class="container">
 	<br><br><br><br><br>
 	<h5><?php
 	if(!empty($completo)){
 		echo $completo;
 	}
 	?></h5>
 	<form action="enviardadoseventos" method="post" enctype="multipart/form-data">
 	<div class="row">
 		<div class="col-md-12 center">
 			<h4>Cadastre o seu evento </h4><hr>
 		</div>
 		<div class="col-md-6">
 			<label>Nome do evento</label>
 			<div class="input-group">
 				<input type="text" class="form-control form-success" name="nomeevento" placeholder="Nome do evento" aria-describedby="basic-addon1">
 			</div>
 		</div>
 		<div class="col-md-6">
 			<label>Foto (568 X 416)</label>
 			<div class='input-group' >
 				<span class='btn btn-success btn-file '><span class='fileinput-new'>Adicionar foto</span><span class='fileinput-exists'></span><input type='file' name='foto0'></span>	
 			</div>
 		</div>
 	</div>
 	<div class="row" id="integeventos">
 		<div class='col-md-6' id='nome0'>
 			<label>Nome</label>
 			<div class='input-group'>
 				<input type='text' class='form-control form-success' value="<?php echo($nome);?>" name='nome0' id='nome0' placeholder='Digite o nome' aria-describedby='basic-addon1' disabled>

 			</div>
 			<label class='error-nome0' id='error'></label>
 		</div>
 		<div class='col-md-6 ' id='email0'>
 			<label>Email</label>
 			<div class='input-group'>
 				<input type='text' class='form-control form-success' name='email0' id="email0" value="<?php echo($email);?>"  placeholder='E-mail de contato' aria-describedby='basic-addon1' disabled>
 			</div>
 			<label class='error-email0' id='error'></label>
 		</div>
 	</div>
 	<div class="row">



 		<div class="col-md-6">
 			<label>Data de inicio</label>
 			<div class='input-group'>
 				<input type='date' class="form-control" name="datainicio" placeholder="05/08/2017" />
 				<span class="input-group-addon">
 					<span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
 				</span>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<label>Data de  encerramento</label>
 			<div class='input-group'>
 				<input type='date' class="form-control" name="dataterminio" placeholder="05/08/2017" />
 				<span class="input-group-addon">
 					<span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
 				</span>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<label>Horario de inicio</label>
 			<div class='input-group'>
 				<input type='time' class="form-control" name="horarioinicio" placeholder="05/08/2017" />
 				<span class="input-group-addon">
 					<span class=""><i class="" aria-hidden="true"></i></span>
 				</span>
 			</div>
 		</div>
 		<div class="col-md-6">
 			<label>Horario de encerramento</label>
 			<div class='input-group'>
 				<input type='time' class="form-control" name="horarioencerramento" placeholder="05/08/2017" />
 				<span class="input-group-addon">
 					<span class=""><i class="" aria-hidden="true"></i></span>
 				</span>
 			</div>
 		</div>

 		<div class="col-md-12">
 			<label>Url do evento</label>
 			<div class="input-group">
 				<input type="text" class="form-control form-success" name="urlevento" placeholder="https://www.sympla.com.br/gamecup__369444" aria-describedby="basic-addon1">
 			</div>
 		</div>
 		<div class="col-md-12">
 			<label>Descrição do evento</label>
 			<div class="input-group">
 				<textarea class="form-control" rows="4"  name="descricaoprojeto" placeholder="Escreva um preve descrição do seu projeto" maxlength="290"></textarea>
 			</div>
 		</div>
 		<div class="col-md-12">
 			<br>
 			<button type="submiy"  class="btn btn-success col-md-12">Cadastrar evento</button>

 		</div>
 	</div>
 </div>
 <br>


