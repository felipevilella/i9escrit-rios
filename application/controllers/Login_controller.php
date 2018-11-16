<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller{
	
	public function index(){
		$this->load->helper("url");
		$this->load->view("complementos_front/navbar");
		$this->load->view("estrutura_site/login");
		$this->load->view("complementos_front/footer");
		
	}
	public function validacao(){
		$this->load->helper("url");
		$this->load->model("login_model");

		$usuario = $this->input->post("usuario");
		$senha = md5($this->input->post("senha"));

		$autenticacao = $this->login_model->validacao($usuario,$senha);
		if(!empty($autenticacao)){
			$this->login_model->session($autenticacao["usuario"],$autenticacao["nome"],$autenticacao["senha"],$autenticacao["idUsuario"]);
			echo json_encode(array("confirmado"=>"ok"));

		}
		else{
			echo json_encode(array("mensagem"=>"Email ou senha invalida, tente novamente!"));
		}

	}
	public function menu(){
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("projetos_model");

		$usuario = $this->session->usuario_session;
		if(empty($usuario)){
			redirect(base_url('inicio'), 'refresh');
		}
		else{
			$dados["nome"] = $this->session->nome_session;	
			$dados["email"] = $this->session->usuario_session;	
			## Contadores de projetos ###
			$quantidadeprojeto = $this->projetos_model->quantidadeprojeto();
			$quantevento = $this->projetos_model->quantidadeevento();
			$totalprojeto = $this->projetos_model->totalprojeto();

			## Quantidade de projetos
			$quantidadeprojetousuario = $this->projetos_model->quantidadeprojetoaprovados($this->session->idusuario_session);
			$quantidadeeventoaprovados = $this->projetos_model->quantidadeeventoaprovados($this->session->idusuario_session);
			
			### Validação das quantidades ###
			if(!empty($quantidadeprojeto["count(aprovado)"])){
				$dados["quantidadeprojeto"] = $quantidadeprojeto["count(aprovado)"];
			}
			else{
				$dados["quantidadeprojeto"] = 0;
			}

			if(!empty($quantevento["count(aprovacao)"])){
				$dados["quantevento"] = $quantevento["count(aprovacao)"];
			}
			else{
				$dados["quantevento"] = 0;
			}

			if(!empty($totalprojeto["count(aprovado)"])){
				$dados["totalprojeto"] = $totalprojeto["count(aprovado)"];
			}
			else{
				$dados["totalprojeto"] = 0;
			}

			if(!empty($quantidadeprojetousuario["count(fk_idUsuario)"])){
				$dados["quantidadeprojetousuario"] = $quantidadeprojetousuario["count(fk_idUsuario)"];
			}
			else{
				$dados["quantidadeprojetousuario"] = 0;
			}

			if(!empty($quantidadeeventoaprovados["count(fk_idUsuario)"])){
				$dados["quantidadeeventoaprovados"] = $quantidadeeventoaprovados["count(fk_idUsuario)"];
			}
			else{
				$dados["quantidadeeventoaprovados"] = 0;
			}
			
			### Chamando view ###
			$this->load->view("complementos_front/navbar_usuario",$dados);
			$this->load->view("estrutura_site/menu_interno");
		}
		$this->load->view("complementos_front/footer");
		
	}
	public function projetos_pendentes(){
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("projetos_model");

		$usuario = $this->session->usuario_session;
		if(empty($usuario)){
			redirect(base_url('inicio'), 'refresh');
		}
		else{
			$dados["nome"] = $this->session->nome_session;	
			$dados["email"] = $this->session->usuario_session;	
			$dados["projetos"] = $this->projetos_model->todosprojetosparaaprovar();
			$this->load->view("complementos_front/navbar_usuario",$dados);
			$this->load->view("estrutura_site/projetospendentes");
			$this->load->view("complementos_front/footer");
		}
	}
	public function eventos_pendentes(){
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("projetos_model");

		$usuario = $this->session->usuario_session;
		if(empty($usuario)){
			redirect(base_url('inicio'), 'refresh');
		}
		else{
			$dados["nome"] = $this->session->nome_session;	
			$dados["email"] = $this->session->usuario_session;	
			$dados["eventos"] = $this->projetos_model->todoseventosparaaprovar();
			$this->load->view("complementos_front/navbar_usuario",$dados);
			$this->load->view("estrutura_site/eventopendentes");
			$this->load->view("complementos_front/footer");
		}
	}

	public function visualizar_projetos($id){
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("projetos_model");

		$usuario = $this->session->usuario_session;
		if(empty($usuario)){
			redirect(base_url('inicio'), 'refresh');
		}
		else{

			$dados["nome"] = $this->session->nome_session;	
			$dados["email"] = $this->session->usuario_session;	
			
			$dados["projetos"] = $this->projetos_model->buscarprojeto($id);
			$dados["integrantes"] = $this->projetos_model->buscarintegrantesprojeto($id);
			$dados["fotos"] = $this->projetos_model->buscarfotoprojeto($id);

			$this->load->view("complementos_front/navbar_usuario",$dados);
			$this->load->view("estrutura_site/verprojeto");
			$this->load->view("complementos_front/footer");
		}
	}
	public function visualizar_evento($id){
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("projetos_model");

		$usuario = $this->session->usuario_session;
		if(empty($usuario)){
			redirect(base_url('inicio'), 'refresh');
		}
		else{

			$dados["nome"] = $this->session->nome_session;	
			$dados["email"] = $this->session->usuario_session;	
			
			$dados["evento"] = $this->projetos_model->buscarevento($id);

			$dados["integrantes"] = $this->projetos_model->buscarintegrantesevento($id);
			$dados["fotos"] = $this->projetos_model->buscarfotoevento($id);

			
			$this->load->view("complementos_front/navbar_usuario",$dados);
			$this->load->view("estrutura_site/verevento");
			$this->load->view("complementos_front/footer");
		}
	}
	public function aprovar_evento(){
		$this->load->model("projetos_model");
		$id = $this->input->post("idevento"); 
		$this->projetos_model->aprovarevento($id);
	}
	public function reprovar_evento(){
		$this->load->model("projetos_model");
		$id = $this->input->post("idevento"); 
		$this->projetos_model->reprovarevento($id);
	}

	public function aprovar_projeto(){
		$this->load->model("projetos_model");
		$id = $this->input->post("idprojeto"); 
		$this->projetos_model->aprovarprojeto($id);
	}
	public function reprovar_projeto(){
		$this->load->model("projetos_model");
		$id = $this->input->post("idprojeto"); 
		$this->projetos_model->reprovarprojeto($id);
	}
	public function todos_projetos(){
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("projetos_model");

		$usuario = $this->session->usuario_session;
		if(empty($usuario)){
			redirect(base_url('inicio'), 'refresh');
		}
		else{
			$dados["nome"] = $this->session->nome_session;	
			$dados["email"] = $this->session->usuario_session;	
			$dados["projetos"] = $this->projetos_model->todosprojetos();
			$this->load->view("complementos_front/navbar_usuario",$dados);
			$this->load->view("estrutura_site/todosprojetos");
			$this->load->view("complementos_front/footer");
		}
	}
	public function meus_eventos(){
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("projetos_model");

		$usuario = $this->session->usuario_session;
		if(empty($usuario)){
			redirect(base_url('inicio'), 'refresh');
		}
		else{
			$dados["nome"] = $this->session->nome_session;	
			$dados["email"] = $this->session->usuario_session;	
			$dados["eventos"] = $this->projetos_model->meuseventos($this->session->idusuario_session);
			$this->load->view("complementos_front/navbar_usuario",$dados);
			$this->load->view("estrutura_site/meuseventos");
			$this->load->view("complementos_front/footer");
		}
	}
	public function visualizar_evento_usuario($id){
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("projetos_model");

		$usuario = $this->session->usuario_session;
		if(empty($usuario)){
			redirect(base_url('inicio'), 'refresh');
		}
		else{

			$dados["nome"] = $this->session->nome_session;	
			$dados["email"] = $this->session->usuario_session;	
			
			$dados["evento"] = $this->projetos_model->buscarevento($id);

			$dados["integrantes"] = $this->projetos_model->buscarintegrantesevento($id);
			$dados["fotos"] = $this->projetos_model->buscarfotoevento($id);

			
			$this->load->view("complementos_front/navbar_usuario",$dados);
			$this->load->view("estrutura_site/vereventousuario");
			$this->load->view("complementos_front/footer");
		}
	}
		public function meus_projetos(){
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("projetos_model");

		$usuario = $this->session->usuario_session;
		if(empty($usuario)){
			redirect(base_url('inicio'), 'refresh');
		}
		else{
			$dados["nome"] = $this->session->nome_session;	
			$dados["email"] = $this->session->usuario_session;	
			$dados["projetos"] = $this->projetos_model->meusprojetos($this->session->idusuario_session);
			$this->load->view("complementos_front/navbar_usuario",$dados);
			$this->load->view("estrutura_site/meusprojetos");
			$this->load->view("complementos_front/footer");
		}
	}
	public function visualizar_projetos_usuario($id){
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("projetos_model");

		$usuario = $this->session->usuario_session;
		if(empty($usuario)){
			redirect(base_url('inicio'), 'refresh');
		}
		else{

			$dados["nome"] = $this->session->nome_session;	
			$dados["email"] = $this->session->usuario_session;	
			
			$dados["projetos"] = $this->projetos_model->buscarprojeto($id);
			$dados["integrantes"] = $this->projetos_model->buscarintegrantesprojeto($id);
			$dados["fotos"] = $this->projetos_model->buscarfotoprojeto($id);

			$this->load->view("complementos_front/navbar_usuario",$dados);
			$this->load->view("estrutura_site/verprojetousuario");
			$this->load->view("complementos_front/footer");
		}
	}
}

