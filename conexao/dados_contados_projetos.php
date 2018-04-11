<div class="container">
<?php
require_once("conexao/funcoes.php");
$jogos_digitais=contador_jogosdigitais();
$startup=contador_startups();
$vitrine=contador_vitrine();
	echo "<div class='row'>
		<div class='col-md-4 project'>
			<h3 id='counter'>0</h3>
			<input type=hidden id='jd' value='$jogos_digitais'>
			<h4>Jogos Digitais</h4>

		</div>
		<div class='col-md-4 project'>
			<h3 id='counter1'>0</h3>
			<input type=hidden id='sp' value='$startup'>
			<h4>Startup</h4>
		</div>
		<div class='col-md-4 project'>
			<h3 id='counter2' style='margin-left: 20px;'>0</h3>
			<input type=hidden id='vi' value='$vitrine'>
			<h4 style='margin-left: 20px;'>Vitrine da inovação</h4>
			<p></p>
		</div>
	</div>";
	?>
</div>