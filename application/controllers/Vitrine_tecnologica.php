<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vitrine_tecnologica extends CI_Controller{

	public function index(){
		$this->load->helper("url");

		$this->load->view("complementos_front/navbar2");
		$this->load->view("estrutura_site/vitrine");
		$this->load->view("complementos_front/footer");
	}
}

?>