<?php
$conexao=@mysql_connect("localhost","root","") or die("impossivel localizar a conexão");
$banco=mysql_select_db("i9escritorios",$conexao) or die("impossivel conectar ao banco");
?>