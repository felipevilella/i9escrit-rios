<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastroevento_controller extends CI_Controller {

	public function index(){

		$this->load->helper('url');
		$this->load->view("complementos_front/navbar2");
		$this->load->view("estrutura_site/cadastro_evento");
		$this->load->view("complementos_front/footer");
	}


}
