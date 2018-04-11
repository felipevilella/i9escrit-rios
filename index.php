<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>I9 Escritorio</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

	<link rel="stylesheet" type="text/css" href="css/slicknav.css">
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">


	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
	<script type="text/javascript" src="js/camera.min.js"></script>
	<script type="text/javascript" src="js/myscript.js"></script>
	<script src="js/sorting.js" type="text/javascript"></script>
	<script src="js/jquery.isotope.js" type="text/javascript"></script>
	
	<!-- depois passar para o js externo---->
	<script>
		jQuery(function(){
			jQuery('#camera_wrap_1').camera({
				transPeriod: 500,
				time: 3000,
				height: '490px',
				thumbnails: false,
				pagination: true,
				playPause: false,
				loader: false,
				navigation: false,
				hover: false
			});
		});
	</script>

</head>
<body>
	<div id="home">
		<div class="headerLine">
		  <?php
		   include("conexao/menu.php");
		   include("conexao/slide.php");
		  ?>
			
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 cBusiness">
					<h3>I9 Escritorio</h3>
					<h4>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</h4>
				</div>
			</div>
		</div>
		<?php
		  include("conexao/dados_contados_projetos.php");
		?>

		
	</div>


	<div id="about">
		<div class="line2">
			<div class="container">
				<div class="row Fresh">
					<div class="col-md-12">
						<span name="projects" id="projectss"></span>
						<h2>JOGOS DIGITAIS<br></h2>

					</div>
					<div class="col-md-12 Des">
						<i class="fa fa-heart"></i>
						<i class="fa fa-cog"></i>
						<i class="fa fa-tablet"></i>
					</div>

				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 wwa">
					<span name="about" ></span>
					<h4>Existem games com roteiros e momentos que nos marcam de um jeito...que nunca mais vão sair da nossa cabeça.</h4>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row team">
				<?php
					include("conexao/dados_jogos.php");
				?>

			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 hr1">
				
				</div>
			</div>
		</div>		
		

	</div>
	<div id="project">    	
		<div class="line3">
			<div class="container">
				<div id="project1" ></div>
				<div class="row Ama">
					<div class="col-md-12">
						<span name="projects" id="projectss"></span>
						<h3>Startups</h3>
						<p>Startups são empresas jovens, inovadores e com alto potencial de crescimento.</p>
					</div>
				</div>
			</div>
		</div>          


		<div class="container">

			<div class="row">
				<div class="portfolio_block columns3   pretty" data-animated="fadeIn">	
					
						<?php

						   include("conexao/dados_startup.php");

						?>

						</div>
					</div>
				</div>    
				
				<div id="contact">
					<div class="line5">					
						<div class="container">
							<div class="row Ama">
								<div class="col-md-12">
									<h3>Tem uma pergunta?</h3>
									<p>Entre em contato conosco!</p>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-xs-12 forma">
								<form>
									<input type="text" class="col-md-6 col-xs-12 name" name='name' placeholder='Nome*'/>
									<input type="text" class="col-md-6 col-xs-12 Email" name='Email' placeholder='Email*'/>
									<textarea type="text" class="col-md-12 col-xs-12 Message" name='Message' placeholder='Digite sua mensagem'></textarea>
									<div class="cBtn col-xs-12">
										<ul>
											<li class="send"><a href="#"><i class="fa fa-share"></i>Enviar Mensagem</a></li>
										</ul>
									</div>
								</form>
							</div>
							<div class="col-md-3 col-xs-12 cont">
								<ul>
									<li><i class="fa fa-home"></i>Rua dos Goitacazes, 1159 - Barro Preto, Belo Horizonte - MG, 30190-051</li>
									<li><a href="#"><i class="fa fa-envelope"></i>i9escritorios@una.br</li></a>


								</ul>
							</div>
						</div>
					</div>

					<div class="line7">
						<div class="container">
							<div class="row footer">
								<div class="col-md-12">
									<h3> Newsletter!</h3>
									<p>Escreva para o nosso e-mail da newsletter para obter notificações sobre novos projetos. Mantenha-se sempre atualizado!</p>
									<div class="fr">
										<div style="display: inline-block;">
											<input class="col-md-6 fEmail" name='Email' placeholder='Email'/>
											<a href="#" class="subS">Inscrever </a>
										</div>
									</div>
								</div>
								<div class="soc col-md-12">
									<ul>

										<li class="soc2"><a href="#"></a></li>

										<li class="soc6"><a href="#"></a></li>


									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="lineBlack">
						<div class="container">
							<div class="row downLine">
								<div class="col-md-12 text-right">
								</div>
								<div class="col-md-6 text-left copy">
									<p>Copyright &copy; 2017 I9 Escritorio</p>
								</div>
								

							</div>
						</div>
					</div>
				</div>		


				<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/jquery.slicknav.js"></script>
				<script src="js/contador.js"></script>


</body>

</html>