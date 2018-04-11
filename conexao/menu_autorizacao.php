		<?php

		include 'seguranca.php';
		protegePagina();
		$email=$_SESSION['usuarioLogin'];
		$nome=$_SESSION['usuarioNome'];
		require_once("funcoes.php");
		$autorizacao=prioriedade_usuario($email);
		include("conexao/navbar.php");

		?>