<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio_controller extends CI_Controller {

	public function index(){

		$this->load->helper('url');
		$this->load->view("complementos_front/navbar");
		$this->load->view("estrutura_site/pagina_inicial");
		$this->load->view("complementos_front/footer");
	}
	public function projeto(){
		$this->load->helper('url');
		$this->load->view("complementos_front/navbar");
		$this->load->view("estrutura_site/projeto");
		$this->load->view("complementos_front/footer");
	}
	public function vitrine(){
		$this->load->helper('url');
		$this->load->view("complementos_front/navbar");
		$this->load->view("estrutura_site/vervitrine");
		$this->load->view("complementos_front/footer");
	}


}


?> 