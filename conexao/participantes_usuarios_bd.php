<?php

$comando="select * from integrante_projetos where id_projeto='$id'";
include("conexao.php");
$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
$aux=0;
$idbanco=array();
$nomebanco=array();
$emailbanco=array();
while($aux<mysql_num_rows($rs)){
	$R=mysql_fetch_array($rs);
	$idbanco[$aux]=$R["id"];
	$nomebanco[$aux]=$R["nome"];
	$emailbanco[$aux]=$R["email"];
	$aux++;
}



?>