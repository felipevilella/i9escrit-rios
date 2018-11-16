<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vitrine_tecnologica extends CI_Controller{

	public function index(){
		$this->load->helper("url");
		$this->load->model("projetos_model");

		$dados["vitrine"] = $this->projetos_model->projetosaprovados();
		$this->load->view("complementos_front/navbar2",$dados);
		$this->load->view("estrutura_site/vitrine");
		$this->load->view("complementos_front/footer");
	}
	public function buscar_vitrine(){
		$this->load->model("projetos_model");
		$pesquisa = $this->input->post("pesquisaDados");
		$retorno = $this->projetos_model->buscar_vitrine($pesquisa);
		if(!empty($retorno)){
			echo  json_encode(array("retorno"=>$retorno));
		}
		else{
			echo json_encode(array("retorno"=>"vazio"));
		}
		
	}
}

?>