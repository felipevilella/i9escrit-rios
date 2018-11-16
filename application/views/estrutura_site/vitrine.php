<div class="pesquisa">
	<div class="col-sm-9">
		<div class="form-group">
			<input type="text" id="pesquisa" class="form-control form-control-success" placeholder="Digite o nome do projeto">
		</div>
		<label id="informacao"></label>
	</div>

</div>
<div class="container">
	<div class="row" id="painelvitrine">
		<?php foreach ($vitrine as $key => $vitrine): ?>

			
		<div class="col-12 col-sm-12 col-md-4">
			<div class="card" style="width: 20rem;">
				<?php echo "<input type='hidden' id='idvitrine' value='".$vitrine['idProjeto']."''>";?>
				<?php echo "<a href='#'' id='vitrine'><img class='card-img-top' src='assets/foto_projeto/".$vitrine["caminho_foto"]."'' alt='Card image cap'></a>"?>
				<div class="card-body">
					<p class="card-text"><?php echo $vitrine["descricao"];?></p>
				</div>
			</div>

		</div>
		<?php endforeach ?>
		
		<div class="col-12 col-sm-12 col-md-4">
			<div class="card" style="width: 20rem;">
				<img class="card-img-top" src="<?php echo('assets/imagens/imagem.jpg');?>" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
			</div>
		</div>
	
	</div>
</div>

