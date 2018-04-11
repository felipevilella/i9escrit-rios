<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Painel de acesso</h3><br>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<?php 
							$nome=$_SESSION['usuarioNome'];
							require_once("funcoes.php");
							$autorizacao=prioriedade_usuario($email);
							if($autorizacao=="administrador"){
								$projetos_pendentes=projetos_pendentes();
								if(empty($projetos_pendentes)){
									echo "
									<form action='projetos?2' method='post'>
									<div class='panel-title'><p align='center'><b>Projetos pedentes</b></p></div>
									<div class='col-md-12'><p align='center'><font size=15px>0</font></p></div>
									<button type=submit class='btn btn-success btn-block'>VERIFICAR</button>
									</form>
									";
								}
								else{
									echo "
									<form action='projetos?2' method='post'>
									<div class='panel-title'><p align='center'><b>Projetos pedentes</b></p></div>
									<div class='col-md-12'><p align='center'><font size=15px>$projetos_pendentes</font></p></div>
									<button type=submit class='btn btn-success btn-block'>VERIFICAR</button>
									</form>
									";	
								}

							}
							else{
								$email=$_SESSION["usuarioLogin"];
								$dados=projetos_aprovados_usuario($email);
								if(empty($dados)){
									echo "

									<form action='projetos?5' method='post'>
									<div class='panel-title'><p align='center'><b>Meus projetos</b></p></div>
									<div class='col-md-12'><p align='center'><font size=15px>0</font><font size=15px></font></p></div>
									<button type=submit class='btn btn-success btn-block' disabled>VERIFICAR</button>
									</form>
									";	
								}
								else{
									echo "
									
									<form action='projetos?5' method='post'>
									<div class='panel-title'><p align='center'><b>Meus projetos</b></p></div>
									<div class='col-md-12'><p align='center'><font size=15px>$dados</font></p></div>
									<button type=submit class='btn btn-success btn-block'>VERIFICAR</button>
									</form>
									";	
								}
							}
							?>
						</div>
					</div> 
				</div>

				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<?php 
							$nome=$_SESSION['usuarioNome'];
							require_once("conexao/funcoes.php");
							$autorizacao=prioriedade_usuario($email);
							if($autorizacao=="administrador"){
								$projetos_aprovados=projetos_aprovados();
								if(empty($projetos_aprovados)){
									echo "
									<form action='projetos?3' method='post'>
									<div class='panel-title'><p align='center'><b>Projetos aprovados</b></p></div>
									<div class='col-md-12'><p align='center'><font size=15px>0</font></p></div>
									<button type=submit class='btn btn-success btn-block'>VERIFICAR</button>
									</form>
									";
								}
								else{
									echo "
									<form action='projetos?3' method='post'>
									<div class='panel-title'><p align='center'><b>Projetos aprovados</b></p></div>
									<div class='col-md-12'><p align='center'><font size=15px>$projetos_aprovados</font></p></div>
									<button type=submit class='btn btn-success btn-block'>VERIFICAR</button>
									</form>
									";	
								}


							}else{
								$email=$_SESSION["usuarioLogin"];
								$dados=projetos_criado_usuario($email);
								if(empty($dados)){
									echo "

									<form action='projetos?6' method='post'>
									<div class='panel-title'><p align='center'><b>Projetos criados</b></p></div>
									<div class='col-md-12'><p align='center'><font size=15px>0</font></p></div>
									<button type=submit class='btn btn-success btn-block' disabled>VERIFICAR</button>
									</form>
									";	
								}
								else{
									echo "
									
									<form action='projetos?6' method='post'>
									<div class='panel-title'><p align='center'><b>Projetos criados</b></p></div>
									<div class='col-md-12'><p align='center'><font size=15px>$dados</font></p></div>
									<button type=submit class='btn btn-success btn-block'>VERIFICAR</button>
									</form>
									";	
								}
							}
							
							?>
						</div>
					</div> 

				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<?php 
							$nome=$_SESSION['usuarioNome'];
							require_once("conexao/funcoes.php");
							$autorizacao=prioriedade_usuario($email);
							if($autorizacao=="administrador"){
								$projetos_recusados=projetos_recusados();
								if(empty($projetos_recusados)){

									echo "
									<form action='projetos?4' method='post'>
									<div class='panel-title'><p align='center'><b>Projetos reprovados</b></p></div>
									<div class='col-md-12'><p align='center'><font size=15px>0</font></p></div>
									<button type=submit class='btn btn-success btn-block'>VISUALIZAR</button>
									</form>
									";
								}
								else{
									echo "
									<form action='projetos?4' method='post'>
									<div class='panel-title'><p align='center'><b>Projetos reprovados</b></p></div>
									<div class='col-md-12'><p align='center'><font size=15px>$projetos_recusados</font></p></div>
									<button type=submit class='btn btn-success btn-block'>VISUALIZAR</button>
									</form>
									";
								}

							}
							else{
								echo "
								<form action=projetos?6>
								<div class='panel-title'><p align='center'><b>Dados do usuario</b></p></div>
								<div class='col-md-12'><p align='center'><font size=3px><b>Nome:</b> $nome <br>
								<b>E-mail:</b> $email
								</font></p></div>
								
								</form>
								";
							}?>
						</div>
					</div> 
				</div>

			</div>
		</div>
	</div>