<div class="container">
	<div class="row">
		<br><br><br><br><br><br><br>
		<div class="verprojeto">

			<div class="col-md-12">
				<div class="card card-pricing">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<h3><?php echo $projetos["nome"]?></h3><hr>
							</div>
							<div class="col-md-12 ">
								<p align="justify">
									<h6>Objetivo</h6>
									<?php echo $projetos["objetivo"];?></p><br><br>
								</div>
								<div class="col-md-6">
									<p align="justify">
										<h6>Descrição</h6>
										<?php echo $projetos["descricao"];?></p>
									</p><br><br>
									<h6>Integrantes</h6>
									<?php foreach ($integrantes as $key => $integrantes) {
										echo "<b>Nome:</b>".$integrantes["nome"]."<br>";
										echo "<b>e-mail:</b>".$integrantes["email"]."<br>";
									} ?></p>
								</div>
								<div class="col-md-6">
									<?php $video = explode("/", $projetos["urlvideo"]);
									echo "	<iframe width='100%'' height='315' src='https://www.youtube.com/embed/".$video[3]."' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
									?>
								</div>


								<div class="col-md-12">
									<br><br>
									<div class="card card-raised page-carousel">
										<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner" role="listbox">
												<?php
												$cont = 0;
												foreach ($fotos as $key => $fotos) {
													if($cont == 0){
														echo "<div class='carousel-item active'>
														<img class='d-block img-fluid' src='".base_url("assets/foto_projeto/".$fotos["caminho_foto"])."' alt='First slide'>
														</div>";
													}
													else{
														echo "<div class='carousel-item'>
														<img class='d-block img-fluid' src='".base_url("assets/foto_projeto/".$fotos["caminho_foto"])."' alt='First slide'>
														</div>";
													}
													$cont++;

												}
												?>

											</div>

											<a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
												<span class="fa fa-angle-left"></span>
												<span class="sr-only">anterior</span>
											</a>
											<a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
												<span class="fa fa-angle-right"></span>
												<span class="sr-only">proximo</span>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<?php echo "<input type='hidden' id='id' value='".$projetos["idProjeto"]."'>" ?>;
									<div class="row">
										<div class="col-md-6">
											<button id="confirmarprojeto" class="btn btn-warning col-md-12"> Desativar </button>
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