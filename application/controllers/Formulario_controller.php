<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario_controller extends CI_Controller {

	public function index(){

		$this->load->helper('url');
		$this->load->view("complementos_front/navbar2");
		$this->load->view("estrutura_site/formulario_inscricao");
		$this->load->view("complementos_front/footer");
	}
	public function cadastro_formulario(){
		 $this->load->library('form_validation');
		 $this->load->helper('url');

		 //VALIDACAO DOS CAMPOs
		 $this->form_validation->set_rules("nomeprojeto","nome projeto","required|min_length[3]");
		 $this->form_validation->set_rules("quantidade","quantidade integrantes","required");
		 $this->form_validation->set_rules("video","video",'required');
		 $this->form_validation->set_rules("data_i","data","required");
		 $this->form_validation->set_rules("descricao","descricao","required|min_length[20]|max_length[200]");
		 $this->form_validation->set_rules("objetivo","objetivo","required|min_length[20]|max_length[200]");
		 $this->form_validation->set_rules("categoria","categoria","required");
		 $this->form_validation->set_rules("quantidadefotos","quantidade","required");
		 $this->form_validation->set_rules("estagio","estagio","required");
		 
		 //validando nome do usuario e email por quantidade
		 if($this->input->post("quantidade") == 2){

		 	$this->form_validation->set_rules("nome0","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email0","e-mail","required|valid_email");
		 	$this->form_validation->set_rules("nome1","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email1","e-mail","required|valid_email");
		 }
		 if($this->input->post("quantidade") == 3){

		 	$this->form_validation->set_rules("nome0","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email0","e-mail","required|valid_email");
		 	$this->form_validation->set_rules("nome1","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email1","e-mail","required|valid_email");
		 	$this->form_validation->set_rules("nome2","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email2","e-mail","required|valid_email");
		 }
		  if($this->input->post("quantidade") == 4){

		 	$this->form_validation->set_rules("nome0","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email0","e-mail","required|valid_email");
		 	$this->form_validation->set_rules("nome1","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email1","e-mail","required|valid_email");
		 	$this->form_validation->set_rules("nome2","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email2","e-mail","required|valid_email");
		 	$this->form_validation->set_rules("nome3","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email3","e-mail","required|valid_email");

		 }
		  if($this->input->post("quantidade") == 5){

		 	$this->form_validation->set_rules("nome0","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email0","e-mail","required|valid_email");
		 	$this->form_validation->set_rules("nome1","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email1","e-mail","required|valid_email");
		 	$this->form_validation->set_rules("nome2","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email2","e-mail","required|valid_email");
		 	$this->form_validation->set_rules("nome3","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email3","e-mail","required|valid_email");
		 	$this->form_validation->set_rules("nome4","nome","required|min_length[3]");
		 	$this->form_validation->set_rules("email4","e-mail","required|valid_email");
		 	
		 }
		 if($this->input->post("quantidadefotos") == 2){
		 	$this->form_validation->set_rules("foto0","foto","required");
		 	$this->form_validation->set_rules("foto1","foto","required");
		 }
		 if($this->input->post("quantidadefotos") == 2){
		 	$this->form_validation->set_rules("foto0","foto","required");
		 	$this->form_validation->set_rules("foto1","foto","required");
		 	$this->form_validation->set_rules("foto2","foto","required");
		 }
		 if($this->input->post("quantidadefotos") == 2){
		 	$this->form_validation->set_rules("foto0","foto","required");
		 	$this->form_validation->set_rules("foto1","foto","required");
		 	$this->form_validation->set_rules("foto2","foto","required");
		 	$this->form_validation->set_rules("foto3","foto","required");
		 }



		 
		 if($this->form_validation->run() == false){
		 	echo json_encode($this->form_validation->error_array());
		 }
		 else{
		 	/*$data_quebrada = explode("-", $this->input->post("data_i"));
		 	print_r($data_quebrada);
		 	*/$projeto = array(
		 		"nome"=>$this->input->post("nomeprojeto"),
		 		"categoria"=>$this->input->post("categoria"),
		 		"palavrachave"=>$this->input->post("palavrachave"),
		 		"data"=>$this->input->post("data_i"),
		 		"descricao"=>$this->input->post("descricao"),
		 		"objetivo"=>$this->input->post("objetivo")
		 	);
		 	print_r($projeto);
		 }
	}
}
