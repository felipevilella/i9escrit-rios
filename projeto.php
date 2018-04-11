
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
		<div class="headerLine1">
			<?php
			include("conexao/menu.php");
			?>
			<div class="container">
				<div class="row wrap">
					<div class="col-md-12 gallery"> 

					</div>
				</div>
			</div>
		</div>
		<div id="news">
			

			<div class="container">
				<div class="row news">
					<?php 
					include("conexao/projeto_visualizar.php")

					?>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12 cBusiness">
							<br><br><br><br>
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
		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.slicknav.js"></script>
		<script src="js/contador.js"></script>
	</body>

	</html>