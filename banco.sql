create database i9escritorios;
	use i9escritorios;

	create table usuarios(
		id int primary key not null auto_increment,
		nome varchar(40),
		usuario varchar(40),
		senha varchar(40),
		primeiro_acesso int,
		prioriedade varchar(40));
	create table projeto(
		id int primary key not null auto_increment,
		nome varchar(40),
		nome_integranteprincipal varchar(40),
		email varchar(40),
		video varchar(90),
		quantidade_integrantes int,
		foto_capa varchar(100),
		foto1_projeto varchar(100),
		foto2_projeto varchar(100),
		foto3_projeto varchar(100),
		hora_de_estagio varchar(100),
		documento_do_projeto varchar(100),
		patente varchar(90),
		descricao_do_projeto varchar(3000),
		objetivo varchar(3000),
		palavra_chave varchar(100),
		data varchar(40),
		aprovacao int,
		categoria varchar(20));
	
	create table integrante_projetos(
     id int primary key not null auto_increment,
     id_projeto int,
     nome varchar(80),
     email varchar(120),
	 foreign key(id_projeto) references projeto(id));

	create table email(
		id int primary key not null auto_increment ,
		email varchar(40),
		data date);

	create table contato(
		id int primary key not null auto_increment,
		email varchar(40),
		mensagem varchar(500)
		);
	create table newsletter(
       id int primary key not null auto_increment,
	   email varchar(40)	
	  );

 create table solicitacao(
      id int not null primary key auto_increment,
      url varchar(1000),
      usuario varchar(100),
      cont int,
      validar int,
      criptografia varchar(120));
