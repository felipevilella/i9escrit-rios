<?php
if(isset($_GET["2"])){ 

	include("conexao/dadosvitrine_bd.php");

	$cont1=0;

	if($cont1<$cont){
		echo "<div class='col-md-6  text-left'>
		<a href='projeto?cd=2$id_banco[$cont1]'><img class='img-responsive picsGall' src='imagem/$imagem_capa_banco[$cont1]'/></a>
		<h3><a href='projeto?cd=2$id_banco[$cont1]'>$titulo_banco[$cont1]</a></h3>
		<ul>
		<li><i class='fa fa-calendar'></i>$data_banco[$cont1]</li>
		</ul>
		<p>$descricao_banco[$cont1]...<a class='readMore' href='projeto?cd=2$id_banco[$cont1]'>  Visualizar <i class='fa fa-angle-right'></i></a></p>
		<hr class='hrNews'>
		</div>

		</div>
		</div>";
		$cont1++;
	}


}

if(isset($_GET["3"])){ 


	$busca=$_POST["buscar"];

	include("conexao/vitrine_dados_busca.php");

	$cont1=0;
	if($cont==0){
		include("conexao/dadosvitrine_bd.php");

		$cont1=0;

		if($cont1<$cont){
			echo "
            <div class='col-md-12 text-center'><h4> Projeto inexistente</h4><br><br><br></div>
			<div class='col-md-6  text-left'>
			<a href='projeto?cd=2$id_banco[$cont1]'><img class='img-responsive picsGall' src='imagem/$imagem_capa_banco[$cont1]'/></a>
			<h3><a href='projeto?cd=2$id_banco[$cont1]'>$titulo_banco[$cont1]</a></h3>
			<ul>
			<li><i class='fa fa-calendar'></i>$data_banco[$cont1]</li>
			</ul>
			<p>$descricao_banco[$cont1]...<a class='readMore' href='projeto?cd=2$id_banco[$cont1]'>  Visualizar <i class='fa fa-angle-right'></i></a></p>
			<hr class='hrNews'>
			</div>

			</div>
			</div>";
			$cont1++;
		}
	}

	if($cont1<$cont){
		echo "<div class='col-md-6  text-left'>
		<a href='projeto?cd=2$id_banco[$cont1]'><img class='img-responsive picsGall' src='imagem/$imagem_capa_banco[$cont1]'/></a>
		<h3><a href='projeto?cd=2$id_banco[$cont1]'>$titulo_banco[$cont1]</a></h3>
		<ul>
		<li><i class='fa fa-calendar'></i>$data_banco[$cont1]</li>
		</ul>
		<p>$descricao_banco[$cont1]...<a class='readMore' href='projeto?cd=2$id_banco[$cont1]'>  Visualizar <i class='fa fa-angle-right'></i></a></p>
		<hr class='hrNews'>
		</div>

		</div>
		</div>";
		$cont1++;
	}


}


?>