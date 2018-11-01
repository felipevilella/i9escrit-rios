<?php

class projetos_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}
	public function quantidadeprojeto(){
		$this->db->select("count(aprovado)");
		$this->db->where("aprovado",3);
		return $this->db->get("projeto")->row_array();
	} 
	public function quantidadeevento(){
		$this->db->select("count(aprovacao)");
		$this->db->where("aprovacao",3);
		return $this->db->get("evento")->row_array();
	} 
	public function totalprojeto(){
		$this->db->select("count(aprovado)");
		return $this->db->get("projeto")->row_array();
	}
	public function quantidadeprojetoaprovados($id){
		$this->db->select("count(aprovado)");
		$this->db->where("aprovado",1);
		$this->db->where("idProjeto",$id);
		return $this->db->get("projeto")->row_array();
	} 
	public function quantidadeeventoaprovados($id){
		$this->db->select("count(aprovacao)");
		$this->db->where("aprovacao",1);
		$this->db->where("idEvento",$id);
		return $this->db->get("evento")->row_array();
	} 

	public function todosprojetosparaaprovar($id){
		$this->db->where("aprovado",1);
		return $this->db->get("projeto")->result_array();
	} 
	public function todoseventosparaaprovar($id){
		$this->db->where("aprovado",1);
		return $this->db->get("evento")->result_array();
	}    
} 


?>