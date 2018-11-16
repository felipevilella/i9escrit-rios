<div class="container">
	<div class="row">
		<br><br><br><br><br><br><br>
		<div class="verprojeto">

			<div class="col-md-12">
				<div class="card card-pricing">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<h3><?php echo $evento["nome"];?></h3><hr>
							</div>
							<div class="col-md-12 ">
								<div class="row">
								<div class="col-md-6">
									<p align="justify">
										<h6>Descrição</h6>
										<?php 
										echo $evento["descricao"];
										echo "<a href=".$evento["url"]." target = '_blank'> Ver pagina evento </a>";
										?>

									</p><br>
										<p align="justify">
											<h6> Horario:</h6> <?php echo $evento["horario_incio"]." as ". $evento["horario_terminio"];?><br>
											<h6> data:</h6> <?php echo $evento["data_inicio"]." ate ". $evento["data_terminio"];?>
										</p>
									</p><br><br>
									<h6>Integrantes</h6>
									<?php foreach ($integrantes as $key => $integrantes) {
										echo "<b>Nome:</b>".$integrantes["nome"]."<br>";
										echo "<b>e-mail:</b>".$integrantes["email"]."<br>";
									} ?></p>
								</div>
								<div class="col-md-6">
									<?php
									foreach ($fotos as $key => $fotos) {
									echo "<img class='d-block img-fluid' src='".base_url("assets/foto_projeto/".$fotos["caminho_foto"])."' alt='First slide'>
										</div>";
									}
									?>
								</div>
								
								<div class="col-md-12">
									<?php echo "<input type='hidden' id='id' value='".$evento["idEvento"]."'>" ?>;
									<br>
									<div class="row">
										<div class="col-md-6">
											<button id="confirmarevento" class="btn btn-success col-md-12"> Aprovar</button>
										</div>
										<div class="col-md-6">
											<button id="Recusarevento" class="btn btn-warning col-md-12"> Recusar</button>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>