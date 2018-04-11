<?php
$cont=0;
$cont1=0;
while($cont<$aux){
	$cont1=$cont+1;
	if($categoria_banco["$cont"]=="Vitirne_da_inovacao"){
		$categoria_banco["$cont"]=" Vitrine da inovação";
	}


		echo "<tr>
		<td>$cont1</td>
		<td>$nome_banco[$cont]</td>
		<td>$categoria_banco[$cont]</td>";
		if($aprovacao_banco[$cont]==0){
		echo "<td>Pendente</td>";
		}
		if($aprovacao_banco[$cont]==1){
		echo "<td>Aprovado</td>";
		}

		if($aprovacao_banco[$cont]==3){
		echo "<td>Reprovado</td>";
		}
		echo "</tr>";

	$cont++;
}

?>