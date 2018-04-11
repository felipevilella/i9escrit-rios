<?php
$cd=$_GET["cd"];
$loc=substr($cd,0,1);
$id=substr($cd,1,90);

if($loc=="2"){
	include"visualizacao_projetos_bd.php";
	echo "<div class='col-md-12'>
	<h3>$nome_banco</h3><br><br>

	<div class='col-md-6'>
	<img src='imagem/$fotobanco'>
	</div>

	<div class='col-md-6'>
	<b> Descrição:</b><br><br>
	<p align='justify'>$descricaobanco<br><br></p>
	<b>Objetivo : </b><br><br>
	<p align='justify'>$objetivobanco</p>
	</div>

	<div class='col-md-12'><br>
	<div class='col-md-6'>
	<div style='position:relative;height:0;padding-bottom:56.21%''><iframe src='https://www.youtube.com/embed/$video_1?ecver=2' style='position:absolute;width:100%;height:100%;left:0' width='541' height='360' frameborder='0' allowfullscreen></iframe>
	</div>";
	if(empty($documentobanco)){
	echo "<form action='$documentobanco' target='_blank'>
	<button type='submit' class='btn btn-success btn-block' disabled>Ver documento </button> 
	</form>";
	}
	else{
	 echo "<form action='$documentobanco' target='_blank'>
	<button type='submit' class='btn btn-success btn-block'>Ver documento </button> 
	</form>";	
	}

	echo "</div>
	<div class='col-md-6'>
	<table>
	<tr><td><br><b>Estagio do projeto: </b>$patenteBanco</td></tr>
	<tr><td><b>Data de criação do projeto:</b> $databanco</td></tr>";
	if($quantidade>1){
		echo "<tr><td><br><b>Integrantes:</b></td></tr>
		<tr><td>$nomeintegrantesbanco - $emailbanco </td></tr>";
		$cont=0;
		while($cont<$aux1){
			echo "<tr><td>$nome_banco1[$cont] - $email_banco1[$cont] </td></tr>";
			$cont++;
		}
	}
	else{
		echo "<tr><td><br><b>Integrantes:</b></td></tr>
		<tr><td>$nomeintegrantesbanco - $emailbanco </td></tr>";
	}
	echo "</table>
	</div>
	</div>

	</div>
	<div class='col-md-3'></div>
    <div class='col-md-7'><br><br><b>Galeria:</b></br>
    
 <div id='myCarousel' class='carousel slide' data-ride='carousel'>
    <!-- Indicators -->
    <ol class='carousel-indicators'>
      <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
      <li data-target='#myCarousel' data-slide-to='1'></li>
      <li data-target='#myCarousel' data-slide-to='2'></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class='carousel-inner'>
      <div class='item active'>
        <img src='imagem/$fotobanco1'  style='width:100%;'>
      </div>

      <div class='item'>
        <img src='imagem/$fotobanco2' style='width:100%;'>
      </div>
    
      <div class='item'>
        <img src='imagem/$fotobanco3' style='width:100%;'>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class='left carousel-control' href='#myCarousel' data-slide='prev'>
      <span class='glyphicon glyphicon-chevron-left'></span>
      <span class='sr-only'>Previous</span>
    </a>
    <a class='right carousel-control' href='#myCarousel' data-slide='next'>
      <span class='glyphicon glyphicon-chevron-right'></span>
      <span class='sr-only'>Next</span>
    </a>
  </div>
</div>
<div class='col-md-2'></div>'
	</div>";
}

?>