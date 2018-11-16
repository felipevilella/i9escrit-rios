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
		$this->db->select("count(fk_idUsuario)");
		$this->db->where("fk_idUsuario",$id);
		return $this->db->get("projeto")->row_array();
	} 
	public function quantidadeeventoaprovados($id){
		$this->db->select("count(fk_idUsuario)");
		$this->db->where("fk_idUsuario",$id);
		return $this->db->get("evento")->row_array();
	} 

	public function todosprojetosparaaprovar(){
		$this->db->where("aprovado",3);
		return $this->db->get("projeto")->result_array();
	}
	public function projetosparaaprovar($id){
		$this->db->where("aprovado",3);
		return $this->db->get("projeto")->result_array();
	} 
	public function todoseventosparaaprovar(){
		$this->db->where("aprovacao",3);
		$this->db->join("funcionamento","evento.idevento = funcionamento.fk_idEvento");
		return $this->db->get("evento")->result_array();
	}
	public function todosprojetos(){
		return $this->db->get("projeto")->result_array();
	}
	public function buscarevento($id){
		$this->db->where("idEvento",$id);
		$this->db->join("funcionamento","evento.idevento = funcionamento.fk_idEvento");
		return $this->db->get("evento")->row_array();
	} 
	public function buscarprojeto($id){
		$this->db->where("idProjeto",$id);
		$this->db->join("video","Projeto.idProjeto = video.fk_idProjeto");
		return $this->db->get("projeto")->row_array();
	} 
	public function buscarfotoprojeto($id){
		$this->db->where("fk_idProjeto",$id);
		return $this->db->get("fotos")->result_array();
	} 
	public function buscarintegrantesprojeto($id){
		$this->db->where("fk_idProjeto",$id);
		return $this->db->get("integrantes")->result_array();
	} 
	public function buscarfotoevento($id){
		$this->db->where("fk_idEvento",$id);
		return $this->db->get("fotos")->result_array();
	} 
	public function buscarintegrantesevento($id){
		$this->db->where("fk_idEvento",$id);
		return $this->db->get("integrantes")->result_array();
	} 
	public function aprovarevento($id){
		$this->db->set("aprovacao","1");
		$this->db->where("idEvento",$id);
		$this->db->update("evento");
	}
	public function reprovarevento($id){
		$this->db->set("aprovacao","0");
		$this->db->where("idEvento",$id);
		$this->db->update("evento");
	}
	public function aprovarprojeto($id){
		$this->db->set("aprovado","1");
		$this->db->where("idProjeto",$id);
		$this->db->update("projeto");
	}
	public function reprovarprojeto($id){
		$this->db->set("aprovado","0");
		$this->db->where("idProjeto",$id);
		$this->db->update("projeto");
	}
	public function todoseventosaprovado(){
		$this->db->where("aprovacao",1);
		$this->db->join("funcionamento","evento.idevento = funcionamento.fk_idEvento");
		$this->db->join("fotos","evento.idevento = fotos.fk_idEvento");
		return $this->db->get("evento")->result_array();
	}

	public function projetosaprovados(){
		$this->db->where("aprovado",1);
		$this->db->where("categoria","Vitrinetecnologica");
		$this->db->join("fotos","projeto.idProjeto = fotos.fk_idProjeto");
		$this->db->group_by("fotos.fk_idProjeto");
		return $this->db->get("projeto")->result_array();
	} 
	public function projetoeprogramasaprovados(){
		$this->db->where("aprovado",1);
		$this->db->where("categoria","Programaeprojetos");
		$this->db->join("fotos","projeto.idProjeto = fotos.fk_idProjeto");
		$this->db->group_by("fotos.fk_idProjeto");
		return $this->db->get("projeto")->result_array();
	}
	public function meuseventos($idusuario){
		$this->db->join("funcionamento","evento.idevento = funcionamento.fk_idEvento");
		$this->db->where("fk_idUsuario",$idusuario);
		return $this->db->get("evento")->result_array();
	}
	public function meusprojetos($idusuario){
		$this->db->join("video","Projeto.idProjeto = video.fk_idProjeto");
		$this->db->where("fk_idUsuario",$idusuario);
		return $this->db->get("projeto")->result_array();
	}
	public function buscar_vitrine($busca){
		$this->db->like('nome', $busca);
		$this->db->where("aprovado","1");
		$this->db->where('categoria','Vitrinetecnologica');
		$this->db->join("fotos","projeto.idProjeto = fotos.fk_idProjeto");
		$this->db->group_by("fotos.fk_idProjeto");
		return $this->db->get("projeto")->result_array();
	}



	
} 


?>