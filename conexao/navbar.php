<?php

if($autorizacao=="usuario"){
	echo "<div class='navmenu' style='text-align: center;''>
	<ul id='menu'>
	<li class='active'>Bem vindo(a) $nome</li>
	<li><a href='projetos?6'>Projetos </a></li>
	<li><a href='novoprojeto?2'>Criar um novo projeto</a></li>
	<li><a href='logout'>Sair</a></li>
	</ul>
	</div>
	</div>";
}
else{
	
	echo "<div class='navmenu' style='text-align: center;''>
	<ul id='menu'>
	<li class='active'>Olá $nome</li>
	<li><a href='analise?analise'>Analise de projetos</a></li>
	<li><a href='projetos?1'>Projetos aprovado/recusado</a></li>
	<li><a href='logout'>Sair</a></li>
	</ul>
	</div>
	</div>";
}

?>

