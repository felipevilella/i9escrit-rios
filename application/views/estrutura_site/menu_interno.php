<br><br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="card text-center">
				<div class="card-body">
					<?php
					if($email == "admin@i9escritorios.com.br"){
						echo"<h4 class='card-title'>Evento pedentes</h4>
						<h2 class='card-subtitle mb-2 text-muted' id='#numeroevento'>$quantevento</h2>
						<button class='btn btn-success col-md-12'>Visualizar</button>";
					}
					else{
						echo"<h4 class='card-title'>Meus eventos aprovados</h4>
						<h2 class='card-subtitle mb-2 text-muted' id='#numeroevento'>$quantevento</h2>
						<button class='btn btn-success col-md-12'>Visualizar</button>";
					}
					?>
				</div>
			</div>
		</div>


		<div class="col-md-4">
			<div class="card text-center">
				<div class="card-body">
					<?php
					if($email == "admin@i9escritorios.com.br"){
						echo"<h4 class='card-title'>Projeto pedentes</h4>
						<h2 class='card-subtitle mb-2 text-muted' id='#numeroevento'>$quantidadeprojeto</h2>
						<button class='btn btn-success col-md-12'>Visualizar</button>";
					}
					else{
						echo"<h4 class='card-title'>Meus projeto aprovados</h4>
						<h2 class='card-subtitle mb-2 text-muted' id='#numeroevento'>$quantidadeprojetousuario</h2>
						<button class='btn btn-success col-md-12'>Visualizar</button>";
					}
					?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card text-center">
				<div class="card-body">
					<?php
					if($email == "admin@i9escritorios.com.br"){
						echo"<h4 class='card-title'>Projetos cadastrados</h4>
						<h2 class='card-subtitle mb-2 text-muted' id='#numeroevento'>$totalprojeto</h2>
						<button class='btn btn-success col-md-12'>Visualizar</button>";
					}
					else{
						echo"<h4 class='card-title'>Evento/Projetos recusados</h4>
						<h2 class='card-subtitle mb-2 text-muted' id='#numeroevento'>$quantidadeeventoaprovados</h2>
						<button class='btn btn-success col-md-12'>Visualizar</button>";
					}
					?>
				</div>
			</div>
		</div>
		
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>