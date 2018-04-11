<?php
$cont=0;
include("dados_jogos_bd.php");
while($cont<$aux){
	echo "<div class='col-md-4 b1'>
	<a href='projeto?cd=2$idbanco[$cont]'><img class='img-responsive' src='imagem/$fotobanco[$cont]'></a>
	<h4><a href='projeto?cd=2$idbanco[$cont]'>$nome_banco[$cont]</a></h4>
	<h5>Ação</h5>
	<p>$descricaobanco[$cont] ...</p>
	<ul>

	</ul>
	</div>";
	$cont++;
}
?>
