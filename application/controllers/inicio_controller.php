<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio_controller extends CI_Controller {

	public function index(){

		$this->load->helper('url');
		$this->load->model("projetos_model");

		$dados["evento"] = $this->projetos_model->todoseventosaprovado();
		$dados["programaeprojetos"] = $this->projetos_model->projetoeprogramasaprovados();
		$this->load->view("complementos_front/navbar",$dados);
		$this->load->view("estrutura_site/pagina_inicial");
		$this->load->view("complementos_front/footer");
	}
	public function projeto(){
		$this->load->helper('url');
		$this->load->view("complementos_front/navbar");
		$this->load->view("estrutura_site/projeto");
		$this->load->view("complementos_front/footer");
	}
	public function vitrine($id){
		$this->load->helper('url');
		$this->load->model("projetos_model");

		$dados["projetos"] = $this->projetos_model->buscarprojeto($id);
		$dados["integrantes"] = $this->projetos_model->buscarintegrantesprojeto($id);
		$dados["fotos"] = $this->projetos_model->buscarfotoprojeto($id);
		
		$this->load->view("complementos_front/navbar",$dados);
		$this->load->view("estrutura_site/vervitrine");
		$this->load->view("complementos_front/footer");
	}


}


?> 