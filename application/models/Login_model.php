<?php
class Login_model extends CI_Model{
	
	function __construct(){
		$this->load->database();
	}

	public function validacao($usuario,$senha) {
		$this->db->where("usuario",$usuario);
		$this->db->where("senha",$senha);
		return $this->db->get("usuarios")->row_array();
	}
	public function session($usuario,$nome,$senha,$idUsuario){
		$this->load->library('session');
		$this->session->set_userdata('usuario_session',$usuario);
		$this->session->set_userdata('senha_session',$senha);
		$this->session->set_userdata('nome_session',$nome);
		$this->session->set_userdata('idusuario_session',$idUsuario);
	}

}