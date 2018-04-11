<?php
$cont=1;
while ($cont<$funcao) {
		echo "<label class='col-md-12 col-xs-12'> Nome </label>
			<input type='text' class='col-md-9 col-xs-12' name='nome_integrante$cont' placeholder='Nome de um integrante do grupo' required>
			<label class='col-md-12 col-xs-12'> E-mail </label>
			<input type=email' class='col-md-9 col-xs-12' name='Email$cont' placeholder='Email' required>";
 
      $cont++;
}
echo "<input type='hidden' name=cont value='$cont'>";

?>