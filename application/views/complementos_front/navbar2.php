<!DOCTYPE html>
<html lan>

<head>
	<meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title> I9 Escritorios</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/paper-kit.css?v=2.1.0');?>" rel="stylesheet"/>

    <link href="<?php echo base_url('http://fonts.googleapis.com/css?family=Montserrat:400,300,700')?>"; rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/nucleo-icons.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" />
</head>
<body>
	   <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url("inicio"); ?>" id="logo"><img src="<?php echo base_url('assets/imagens/logo.png');?>"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">                
                    <li class="nav-item">
                        <a href="<?php echo base_url("inicio"); ?>"  class="nav-link">INICIO</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo base_url("formulario"); ?>"  class="nav-link">FORMULARIO DE INSCRIÇÃO </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo base_url("cadastrodeeventos"); ?>"  class="nav-link">CADASTRO DE EVENTOS</a>
                    </li>

                    <li class="nav-item">
                        <a href="#"  class="nav-link" data-toggle="modal" data-target="#myModal">ACESSSO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 
