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
	<!--script type="text/javascript" src="js/jquery.nav.js"></script-->

</head>
<body>

	<!--home start-->

	<div id="home">
		<div class="headerLine1">
			<div id="menuF" class="default">
				<div class="container">
					<div class="row">
						<div class="logo col-md-4">
							<div>
								<a href="#">
									<img src="images/logo.png">
								</a>
							</div>
						</div>
						<div class="col-md-8">
							<div class="navmenu" style="text-align: center;">
								<ul id="menu">
									<li class="active" ><a href="index">Pagina inicial</a></li>
									
									<!--li><a href="#features">Features</a></li-->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row wrap">
					<div class="col-md-12 gallery"> 
					</div>
				</div>
			</div>
		</div>

		<div id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                         
						<div class="col-md-12 col-xs-12 forma usuario" >
							 <form action="validacao" method="post">
							 <label>E-mail</label>
                             <input type="email" name="usuario" placeholder="Digite seu e-mail">
                             <label>Senha</label>
                             <input type="password" name="senha" placeholder="***********">
                             <br><br><button type="submit" class="btn btn-success">Entrar</button>
                          
                             <br><br><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 cBusiness">
				<br><br><br><br>
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
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#menu').slicknav();

	});
</script>

<script type="text/javascript">
	$(document).ready(function(){

		var $menu = $("#menuF");

		$(window).scroll(function(){
			if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
				$menu.fadeOut('fast',function(){
					$(this).removeClass("default")
					.addClass("fixed transbg")
					.fadeIn('fast');
				});
			} else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
				$menu.fadeOut('fast',function(){
					$(this).removeClass("fixed transbg")
					.addClass("default")
					.fadeIn('fast');
				});
			}
		});
	});
    //jQuery
</script>

</body>

</html>