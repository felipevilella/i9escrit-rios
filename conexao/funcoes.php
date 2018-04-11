<?php
function busca_quantidade($email){
	
	$comando="select * from projeto where email='$email'";

	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$quantidade=$R["quantidade_integrantes"];
		return $quantidade;
		$aux++;
	}


}
function busca_id_sistema($email){
	$comando="select * from projeto where email='$email' order by id desc";

	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$id=$R["id"];
		return $id;
		$aux++;
	}
}
function busca_id($email){
	$comando="select * from projeto where email='$email' oder by id";

	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$id=$R["id"];
		return $id;
		$aux++;
	}
}


function dados_de_acesso_email($email){
	$comando="select * from usuarios where usuario='$email'";

	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$usuario=$R["usuario"];
		return $usuario;
		$aux++;
	}
}

function dados_de_acesso_senha($email){
	$comando="select * from usuarios where usuario='$email'";

	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$senhacrip=$R["senha"];
		return $senhacrip;
		$aux++;
	}
}
function dados_de_acesso_nome($email){
	$comando="select * from usuarios where usuario='$email'";

	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$nome=$R["nome"];
		return $nome;
		$aux++;
	}
}
function alterar_senha_login($email,$senha){

	$comando="update usuarios set senha='$senha',primeiro_acesso='1' where usuario='$email'";
	include"conexao.php";
	mysql_query($comando,$conexao)or die("erro ao alterar a senha");

	return true;
}

function alterar_senha_configuracao($email,$senha){

	$comando="update usuarios set senha='$senha' where usuario='$email'";
	include"conexao.php";
	mysql_query($comando,$conexao)or die("erro ao alterar a senha");

	return true;
}

function primeiro_acesso($email){
	$comando="select * from usuarios where usuario='$email'";
	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$primeiro_acesso=$R["primeiro_acesso"];
		return $primeiro_acesso;
		$aux++;
	}
}

function prioriedade_usuario($email){
	$comando="select * from usuarios where usuario='$email'";
	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$prioriedade=$R["prioriedade"];
		return $prioriedade;
		$aux++;
	}
}

function dados_confirmados($id){
	$comando="update projeto set aprovacao='1' where id='$id'";
	include("conexao.php");
	mysql_query($comando,$conexao) or die("erro ao confirmar");

}
function dados_recursados($id){
	$comando="update projeto set aprovacao='3' where id='$id'";
	include("conexao.php");
	mysql_query($comando,$conexao) or die("erro ao recusar");;

}
function projetos_aprovados(){
	$comando="select count(aprovacao) from projeto where aprovacao='1'";
	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$aprovacao=$R["count(aprovacao)"];
		return $aprovacao;
		$aux++;
	}
}
function projetos_aprovados_usuario($email){
	$comando="select count(aprovacao) from projeto where aprovacao='1' and email='$email'";
	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$aprovacao=$R["count(aprovacao)"];
		return $aprovacao;
		$aux++;
	}
}
function projetos_criado_usuario($email){
	$comando="select count(aprovacao) from projeto where email='$email'";
	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$aprovacao=$R["count(aprovacao)"];
		return $aprovacao;
		$aux++;
	}
}
function projetos_recusados(){
	$comando="select count(aprovacao) from projeto where aprovacao='3'";
	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$aprovacao=$R["count(aprovacao)"];
		return $aprovacao;
		$aux++;
	}
}
function projetos_pendentes(){
	$comando="select count(aprovacao) from projeto where aprovacao='0'";
	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$aprovacao=$R["count(aprovacao)"];
		return $aprovacao;
		$aux++;
	}
}
function projetos_variacao($email){
	$comando="select * from projeto where email='$email'";
	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$apr=$R["aprovacao"];
		return $apr;
		$aux++;
	}
}
function projetos_exclusao($email){
	$comando="delete from projeto where email='$email'";
	include 'conexao.php';
	mysql_query($comando,$conexao)or die("impossivel excluir");
	
}
function formulario_alteracao($id,$nome_banco,$nome_integrante,$emailbanco,$quantidade,$patentebanco,$descricaobanco,$objetivobanco,$databanco,$video,$tag){

	$comando="update projeto set nome='$nome_banco',nome_integranteprincipal='$nome_integrante',email='$emailbanco',quantidade_integrantes='$quantidade',descricao_do_projeto='$descricaobanco',objetivo='$objetivobanco',data='$databanco',video='$video',palavra_chave='$tag' where id='$id'";
	
	include"conexao.php";
	mysql_query($comando,$conexao) or die("impossivel alterar");
	
}
function formulario_alteracao_arquirvo($id,$nome_banco,$nome_integrante,$emailbanco,$quantidade,$patentebanco,$descricaobanco,$objetivobanco,$databanco,$video,$tag,$documento){


	$comando="update projeto set nome='$nome_banco',nome_integranteprincipal='$nome_integrante',email='$emailbanco',quantidade_integrantes='$quantidade',descricao_do_projeto='$descricaobanco',objetivo='$objetivobanco',data='$databanco',video='$video',palavra_chave='$tag',documento_do_projeto='$documento' where id='$id'";

    include"conexao.php";
	mysql_query($comando,$conexao) or die("impossivel alterar");
}
function formulario_alteracao_dados($nome,$email,$id){
	$comando="update integrante_projetos set nome='$nome',email='$email' where id='$id'";
	include"conexao.php";
	mysql_query($comando,$conexao) or die("impossivel alterar");
}
function formulario_insercao_dados($nome,$email,$id){
	$comando="insert into integrante_projetos (nome,email,id_projeto) values('$nome','$email','$id')";
	include"conexao.php";
	mysql_query($comando,$conexao) or die("impossivel cadastrar");
}

function contador_jogosdigitais(){
	$comando="select count(nome) from projeto where categoria='jogos_digitais' and aprovacao='1'";
	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$cont=$R["count(nome)"];
		return $cont;
		$aux++;
	}
}
function contador_vitrine(){
	$comando="select count(nome) from projeto where categoria='Vitirne_da_inovacao' and aprovacao='1'";
	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$cont=$R["count(nome)"];
		return $cont;
		$aux++;
	}
}
function contador_startups(){
	$comando="select count(nome) from projeto where categoria='Startups'and aprovacao='1'";
	include 'conexao.php';
	$rs=mysql_query($comando,$conexao)or die("impossivel localizar");
	$aux=0;
	while($aux<mysql_num_rows($rs)){
		$R=mysql_fetch_array($rs);
		$cont=$R["count(nome)"];
		return $cont;
		$aux++;
	}
}


?>
