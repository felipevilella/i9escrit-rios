<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller{
	
	public function index(){
		$this->load->helper("url");

		$this->load->view("complementos_front/navbar");
		$this->load->view("estrutura_site/login");
		$this->load->view("complementos_front/footer");
		
	}
}

