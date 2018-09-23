<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario_controller extends CI_Controller {

	public function index(){

		$this->load->helper('url');
		$this->load->view("complementos_front/navbar2");
		$this->load->view("estrutura_site/formulario_inscricao");
		$this->load->view("complementos_front/footer");
	}


}
