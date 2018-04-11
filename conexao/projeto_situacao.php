<?php
$cont=0;
$cont1=0;
while($cont<$aux){
	$cont1=$cont+1;
	if($categoria_banco["$cont"]=="Vitirne_da_inovacao"){
		$categoria_banco["$cont"]=" Vitrine da inovação";
	}

	if($aprovacao_banco[$cont]==1 && $autorizacao=="usuario"){
		echo "<tr>
		<td>$cont1</td>
		<td>$nome_banco[$cont]</td>
		<td>$categoria_banco[$cont]</td>";

		if($aprovacao_banco[$cont]==1 && $autorizacao=="administrador"){
			echo "<td>Aprovado</td>";
		}
		if($aprovacao_banco[$cont]==1 && $autorizacao=="usuario" ){
			echo "<td>Aprovado</td>
			<td><form action='projetos?8' method='post'>
			<input type=hidden name='id' value=$id_banco[$cont]>
			<button type='submit' class='btn btn-success' >Alterar</button></form></td>
			<td><form action='projetos?9' method='post'>
			<input type=hidden name='id' value=$id_banco[$cont]>
			<button type='submit' class='btn btn-danger' >Excluir</button></td>";
		}
	}

	echo "</tr>";

	$cont++;
}

?>