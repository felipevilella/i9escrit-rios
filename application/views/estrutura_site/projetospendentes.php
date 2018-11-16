<br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-pricing">
				<div class="card-body">
					<table class="table">
						<tr><td>Nome</td><td>Categoria</td><td>Situação</td><td>Ação</td></tr>
						
							<?php
							foreach ($projetos as $key => $projeto_una) {
								echo "<tr><td>".$projeto_una["nome"]."</td>";
								echo "<td>".$projeto_una["categoria"]."</td>";
								echo "<td>Pendente</td>";
								echo "<td><button class='btn btn-success' id='visualizar'>Visualizar</button>";
								echo "<input type='hidden' id='idProjeto' value='".$projeto_una["idProjeto"]."'</td></tr>";


							}
							?>
					
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>