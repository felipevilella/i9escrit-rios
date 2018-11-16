<br><br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="card text-center">
				<div class="card-body">
					<?php
					if($email == "admin@i9escritorios.com.br"){
						echo"
						<form action='eventospendentes' method='post'>
						<h4 class='card-title'>Evento pedentes</h4>
						<h2 class='card-subtitle mb-2 text-muted' id='#numeroevento'>$quantevento</h2>
						<button type='submit' class='btn btn-success col-md-12'>Visualizar</button>
						</form>";
					}
					else{

						echo"
						<form action='meuseventos' method='post'>
						<h4 class='card-title'>Meus eventos </h4>
						<h2 class='card-subtitle mb-2 text-muted' id='#numeroevento'>$quantidadeeventoaprovados</h2>
						<button type='submit' class='btn btn-success col-md-12'>Visualizar</button>
						</form>";
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
						echo"
						<form action='projetospendentes' method='post'>
						<h4 class='card-title'>Projeto pedentes</h4>
						<h2 class='card-subtitle mb-2 text-muted' id='#numeroevento'>$quantidadeprojeto</h2>
						<button type='submit' class='btn btn-success col-md-12'>Visualizar</button>
						</form>";
					}
					else{
						echo"
						<form action='meusprojetos' method='post'>
						<h4 class='card-title'>Meus projeto </h4>
						<h2 class='card-subtitle mb-2 text-muted' id='#numeroevento'>$quantidadeprojetousuario</h2>
						<button type='submit' class='btn btn-success col-md-12'>Visualizar</button>
						</form>";
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
						echo"
						<form action ='todosprojetos' method='post'>
						<h4 class='card-title'>Projetos cadastrados</h4>
						<h2 class='card-subtitle mb-2 text-muted' id='#numeroevento'>$totalprojeto</h2>
						<button type='submit' class='btn btn-success col-md-12'>Visualizar</button>
						</form>";
					}
					else{
						echo"
						<p><img src=".base_url('assets/imagens/una.png')." width=38%></p> 
						";
					}
					?>
				</div>
			</div>
		</div>
		
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>