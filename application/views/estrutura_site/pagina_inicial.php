
<div class="wrapper">
	<div class="page-header section-dark" style="background-image: url('assets/imagens/fundo1.jpg')">
		<div class="filter"></div>
	</div>
</div>
<div class="container">
	<div class="tim-title"  id="programaeprojeto">
		<blockquote class="blockquote">
			<p class="mb-0"><h5>
				Programas e projetos
			</h5></p>
		</blockquote>
	</div>
	<div class="row">
		<?php foreach ($programaeprojetos as $key => $programaeprojetos):

			echo "<input type='hidden' id='idprojeto' value='".$programaeprojetos["idProjeto"]."'>";

		 ?>	
		<div class="col-12 col-sm-12 col-md-4">
			<?php
		echo "<a href='#'' id='Programa'><img src='assets/foto_projeto/".$programaeprojetos["caminho_foto"]."'  class='img-thumbnail img-responsive' alt='Rounded Image'></a>";
		?>
		</div>
		<?php endforeach ?>
			
		<div class="col-12 col-sm-12 col-md-4">
			<img src="<?php echo('assets/imagens/imagem.jpg');?>" class="img-thumbnail img-responsive" alt="Rounded Image">
		</div>
		
	</div>
</div>

<div class="container">
	<div class="tim-title" id="agendaeeventos">
		<blockquote class="blockquote">
			<p class="mb-0"><h3>
				Eventos
			</h5></p>
		</blockquote>
	</div>
	<div class="row">

		<?php
		$aux=0;
		foreach ($evento as $key => $evento): 
			if($aux<3){
				?>


				<div class="col-md-4">
					<div class="card mb-3">
						<?php
						echo "<img class='card-img-top' src='assets/foto_projeto/".$evento["caminho_foto"]."' alt='Card image cap'>";
						?>

						<div class="card-body">
							<h4 class="card-title"><?php echo $evento["nome"];?></h4>
							<p class="card-text"><?php echo $evento["descricao"];?></p><hr>
							<p><b>Data: <?php echo $evento["data_inicio"];?><br>Horario: <?php echo $evento["horario_incio"]." as ".$evento["horario_terminio"];?></b></p>
							<p class="card-text"><small class="text-muted"><a href="<?php echo $evento["url"];?>" target="_blank"><input type="button" class="btn btn-info  col-md-12" value="Visualizar"></a></small></p>
						</div>
					</div>
				</div>
				<?php 

			} 
			$aux++;
			 endforeach ?>

<!-- 		<div class="col-12 col-sm-12 col-md-4">
			<div class="card mb-3">
				<img class="card-img-top" src="<?php echo('assets/imagens/imagem.jpg');?>" alt="Card image cap">
				<div class="card-body">
					<h4 class="card-title"></h4>
					<p class="card-text"></p>
					<p class="card-text"><small class="text-muted"><a href=""><input type="button" class="btn btn-info  col-md-12" value="Visualizar"></a></small></p>
				</div>
			</div>
		</div> -->
		
	</div>
</div>



<!-- modal projetos -->
<div class="modal fade" id="modalprojeto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-notice">
		<div class="modal-content">
			<div class="modal-header no-border-header">
				<h5 class="modal-title" id="myModalLabel">TecnoLab</h5>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<div class="instruction">
					<div class="row">
						<div class="col-md-12">
							<div class="picture">
								<img src="<?php echo('assets/imagens/imagem1.jpg');?>"  class="img-rounded img-responsive">
								<br>
							</div>
						</div>
						<div class="col-md-12">
							<p> <strong>s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
							</div>

						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary btn-link" id="Visualizarprojeto" data-dismiss="modal">Visualizar</button>
				</div>
			</div>
		</div>
	</div>