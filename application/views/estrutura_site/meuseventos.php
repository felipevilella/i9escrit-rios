<br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-pricing">
				<div class="card-body">
					<table class="table">
						<tr><td>Nome</td><td>Data</td><td>Horario</td><td>Situação</td><td>Ação</td></tr>
						
							<?php
							foreach ($eventos as $key => $eventos_una) {
								if($eventos_una["aprovacao"] == "0"){
									$Situacao = "reprovado";
								}
								else if($eventos_una["aprovacao"] == "1"){
									$Situacao = "aprovado";
								}
								else if($eventos_una["aprovacao"] == "3"){
									$Situacao = "pendente";
								}
								echo "<tr><td>".$eventos_una["nome"]."</td>";
								echo "<td>".$eventos_una["data_inicio"]."  |  ".$eventos_una["data_terminio"]."</td>";
								echo "<td>".$eventos_una["horario_incio"]."-".$eventos_una["horario_terminio"]."</td>";
								echo "<td>".$Situacao."</td>";
								

								if($eventos_una["aprovacao"] == "0"){
									echo "<td><button class='btn btn-success' id='visualizareventousuario' disabled>Visualizar</button>";
								}
								else if($eventos_una["aprovacao"] == "1"){
									echo "<td><button class='btn btn-success' id='visualizareventousuario'>Visualizar</button>";
								}
								else if($eventos_una["aprovacao"] == "3"){
									echo "<td><button class='btn btn-primary' id='visualizareventousuario' disabled> Em avaliação</button>";
								}
								echo "<input type='hidden' id='idevento' value='".$eventos_una["idEvento"]."'</td></tr>";
							}
							?>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>