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
									<li><a href="index">Inicio </a></li>
									<li class="active"><a href="vitrine">Vitrine Da Inovação</a></li>
									<li class=""><a href="formulario?2">Formulario de inscrição</a></li>
									
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
		<div id="news">
			<div class="container">
				<div class="row footer">
					<div class="col-md-12">
						<div class="fr ">
							<div style="display: inline-block;">
								<form action="vitrine?3" method="post">
									<input class="col-md-5 fEmail" type="search" name="buscar" placeholder='pesquisar..'/>
									<button type="submit" class=" btn btn-primary subS">Buscar </button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row news">
					<?php 
                       include("conexao/vitrine_dados.php")
					  
					?>

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
				<script>
					$(document).ready(function(){
						$(".bhide").click(function(){
							$(".hideObj").slideDown();
				$(this).hide(); //.attr()
				return false;
			});
						$(".bhide2").click(function(){
							$(".container.hideObj2").slideDown();
				$(this).hide(); // .attr()
				return false;
			});

						$('.heart').mouseover(function(){
							$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
						}).mouseout(function(){
							$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
						});

						function sdf_FTS(_number,_decimal,_separator)
						{
							var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
							var separator=(typeof(_separator)!='undefined')?_separator:'';
							var r=parseFloat(_number)
							var exp10=Math.pow(10,decimal);
							r=Math.round(r*exp10)/exp10;
							rr=Number(r).toFixed(decimal).toString().split('.');
							b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
							r=(rr[1]?b+'.'+rr[1]:b);

							return r;
						}

						setTimeout(function(){
							$('#counter').text('0');
							$('#counter1').text('0');
							$('#counter2').text('0');
							setInterval(function(){

								var curval=parseInt($('#counter').text());
								var curval1=parseInt($('#counter1').text().replace(' ',''));
								var curval2=parseInt($('#counter2').text());
								if(curval<=707){
									$('#counter').text(curval+1);
								}
								if(curval1<=12280){
									$('#counter1').text(sdf_FTS((curval1+20),0,' '));
								}
								if(curval2<=245){
									$('#counter2').text(curval2+1);
								}
							}, 2);

						}, 500);
					});
				</script>

			</body>

			</html>