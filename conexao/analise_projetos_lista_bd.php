<?php
$cont=0;
$cont1=0;
while($cont<$aux){
	$cont1=$cont+1;
	if($categoria_banco["$cont"]=="Vitirne_da_inovacao"){
		$categoria_banco["$cont"]=" Vitrine da inovação";
	}

	if($aprovacao_banco[$cont]==0){
		echo "<tr>
		<td>$cont1</td>
		<td>$nome_banco[$cont]</td>
		<td>$categoria_banco[$cont]</td>
		<td><form action='analise?2' method=post>

		<input type=hidden name=id value='$id_banco[$cont]'>
		<input type=hidden name=quantidade value='$quantidade_banco[$cont]'>

		<button type=submit class='btn btn-primary btn-block'>Visualizar</button>
		</form></td>
		<td><form action='analise?1' method=post>
		<input type=hidden name=id value='$id_banco[$cont]''>
		<button type='submit' class='btn btn-success btn-block'>Aprovar</button>
		</form></td>
		<td>
		<form action='analise?3' method=post>
		<input type=hidden name=id value='$id_banco[$cont]'>
		<button type='submit' class='btn btn-danger btn-block'>Reprovar</button>
		</form></td>
		</tr>";
	}
	$cont++;
}

?>