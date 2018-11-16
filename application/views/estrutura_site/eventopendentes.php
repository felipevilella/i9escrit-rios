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
							echo "<tr><td>".$eventos_una["nome"]."</td>";
								echo "<td>".$eventos_una["data_inicio"]."  |  ".$eventos_una["data_terminio"]."</td>";
								echo "<td>".$eventos_una["horario_incio"]."-".$eventos_una["horario_terminio"]."</td>";
								echo "<td>Pendente</td>";
								echo "<td><button class='btn btn-success' id='visualizarevento'>Visualizar</button>";
								echo "<input type='hidden' id='idevento' value='".$eventos_una["idEvento"]."'</td></tr>";
							}
							?>
						
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>