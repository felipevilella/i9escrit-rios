<?php
$cont=0;
$cont1=0;
while($cont<$aux){
	$cont1=$cont+1;
	if($categoria_banco["$cont"]=="Vitirne_da_inovacao"){
		$categoria_banco["$cont"]=" Vitrine da inovação";
	}

	if($aprovacao_banco[$cont]==1 && $autorizacao=="administrador"){
		echo "<tr>
		<td>$cont1</td>
		<td>$nome_banco[$cont]</td>
		<td>$categoria_banco[$cont]</td>
		<td>Aprovado</td>";
	}

	if($aprovacao_banco[$cont]==3 && $autorizacao=="administrador"){
		echo "<tr>
		<td>$cont1</td>
		<td>$nome_banco[$cont]</td>
		<td>$categoria_banco[$cont]</td>
		<td>Reprovado</td>";
	}
	echo "</tr>";

	$cont++;
}

?>