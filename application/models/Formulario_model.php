<?php

class Formulario_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}
	public function cadastro_projeto($dados){
		$this->db->insert("projeto",$dados);
	}
	public function cadastro_foto($dados){
		$this->db->insert("fotos",$dados);
	}
	public function cadastro_video($dados){
		$this->db->insert("video",$dados);
	}
	public function cadastro_funcionamento($dados){
		$this->db->insert("funcionamento",$dados);
	}
	public function cadastro_integrantes($dados){
		$this->db->insert("integrantes",$dados);
	}
	public function cadastro_usuario($dados){
		$this->db->insert("usuarios",$dados);
	}
	public function selecionar_ultimo_usuario(){
		$this->db->order_by("idUsuario", "desc");
		return $this->db->get("usuarios")->row_array();
	}
	public function cadastro_evento($dados){
		$this->db->insert("evento",$dados);
	}
	public function selecionar_ultimo_projeto(){
		$this->db->order_by('idprojeto' , 'desc');
		return $this->db->get("projeto")->row_array();
	}
	public function selecionar_ultimo_evento(){
		$this->db->order_by('idevento' , 'desc');
		return $this->db->get("evento")->row_array();
	}
}
