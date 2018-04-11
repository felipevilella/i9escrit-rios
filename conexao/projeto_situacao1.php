<?php
$cont=0;
$cont1=0;
while($cont<$aux){
	$cont1=$cont+1;
	if($categoria_banco["$cont"]=="Vitirne_da_inovacao"){
		$categoria_banco["$cont"]=" Vitrine da inovação";
	}
		if($categoria_banco["$cont"]=="Jogos_digitais"){
		$categoria_banco["$cont"]=" Jogos sDigitais";
	}

	if($aprovacao_banco[$cont]==0){
		echo "<tr>
		<td>$cont1</td>
		<td>$nome_banco[$cont]</td>
		<td>$categoria_banco[$cont]</td>
		<td>Pendente</td>";

		echo "</tr>";


	}


	if($aprovacao_banco[$cont]==1){
		echo "<tr>
		<td>$cont1</td>
		<td>$nome_banco[$cont]</td>
		<td>$categoria_banco[$cont]</td>
		<td>Aprovado</td>";

		echo "</tr>";


	}

	if($aprovacao_banco[$cont]==3){
		echo "<tr>
		<td>$cont1</td>
		<td>$nome_banco[$cont]</td>
		<td>$categoria_banco[$cont]</td>
		<td>Reprovado</td>";

		echo "</tr>";


	}

	$cont++;
}
?>