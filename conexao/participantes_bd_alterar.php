<?php
$cont=1;
$quant=0;
include "participantes_usuarios_bd.php";
while ($cont<$funcao) {

		echo "<label class='col-md-12 col-xs-12'> Nome </label>";
		if($quant<$aux){
			echo "
		
			<input type='hidden' value='$idbanco[$quant]' name=id$cont>
			<input type='text' class='col-md-9 col-xs-12' name='nome_integrante$cont' placeholder='Nome de um integrante do grupo' value='$nomebanco[$quant]' required>
			<label class='col-md-12 col-xs-12'> E-mail </label>
			<input type=email' class='col-md-9 col-xs-12' name='Email$cont' placeholder='Email' value='$emailbanco[$quant]' required>";
         }
         else{
         	echo "
         	<inpuy type=hidden name='cont' value=$cont>
         	<input type='text' class='col-md-9 col-xs-12' name='nome_integrante$cont' placeholder='Nome de um integrante do grupo' required>
			<label class='col-md-12 col-xs-12'> E-mail </label>
			<input type=email' class='col-md-9 col-xs-12' name='Email$cont' placeholder='Email' required>";
         }

      $cont++;
      $quant++;
}

echo "<input type=hidden name=cont value=$quant>";

?>