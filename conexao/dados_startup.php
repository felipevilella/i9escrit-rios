<?php
$cont=0;
include("dados_startup_bd.php");
while($cont<$aux){
echo "<div class='element col-sm-4  gall branding'>
	<a href='projeto?cd=2$idbanco[$cont]'><img class='img-responsive picsGall' src='imagem/$fotobanco[$cont]'/>
	</a>
	<div class='view project_descr '>
		<h3><a href='projeto?cd=2$idbanco[$cont]'>$nome_banco[$cont]</a></h3>
		<ul>
			<li><p>$descricaobanco[$cont] ...</p></li></ul>
		</div>
	</div>";

$cont++;

}
?>