<?php
class cadastro{
	
	function __construct(){

	}
	public function GetId(){
		return $this->Id;
	}
	public function SetId($id){
		$this->Id=$id;
	}

	public function GetNome(){
		return $this->Nome;
	}
	public function SetNome($Nome){
		$this->Nome = $Nome;
	}
	public function GetNomeintegrantes(){
		return $this->Nomeintegrantes;
	}
	public function SetNomeintegrantes($Nomeintegrantes){
		$this->Nomeintegrantes = $Nomeintegrantes;
	}
	public function GetQuantidade(){
		return $this->Quantidade;
	}

	public function SetQuantidade($Quantidade){
		$this->Quantidade=$Quantidade;
	}
	public function GetEmail(){
		return $this->Email;
	}
	public function SetEmail($Email){
		$this->Email=$Email;
	}
	public function GetFoto(){
		return $this->Foto;
	}
	public function SetFoto($Foto){
		$this->Foto=$Foto;
	}
	public function GetFoto1(){
		return $this->Foto1;
	}
	public function SetFoto1($Foto1){
		$this->Foto1=$Foto1;
	}
	public function GetFoto2(){
		return $this->Foto2;
	}
	public function SetFoto2($Foto2){
		$this->Foto2=$Foto2;
	}

	public function GetFoto3(){
		return $this->Foto3;
	}
	public function SetFoto3($Foto3){
		$this->Foto3=$Foto3;
	}
	public function SetVideo($Video){
		$this->Video=$Video;
	}
	public function GetVideo(){
		return $this->Video;
	}
	public function GetHora_estagio(){
		return $this->Hora_estagio;
	}
	public function SetHora_estagio($Hora_estagio){
		$this->Hora_estagio=$Hora_estagio;
	}
	public function GetDocumentacao_projeto(){
		return $this->Documento_projeto;
	}
	public function SetDocumentacao_projeto($Documento_projeto){
		$this->Documento_projeto=$Documento_projeto;
	}
	public function GetPatente(){
		return $this->Patente;
	}
	public function SetPatente($Patente){
		$this->Patente=$Patente;
	}
	public function GetDescricao_projeto(){
		return $this->Descricao_projeto;
	}

	public function SetDescricao_projeto($Descricao_projeto){
		$this->Descricao_projeto=$Descricao_projeto;
	}
	public function GetObjetivo(){
		return $this->Objetivo;
	}
	public function SetObjetivo($Objetivo){
		$this->Objetivo=$Objetivo;
	}
	public function GetPalavra_chave(){
		return $this->Palavra_chave;
	}
	public function SetPalavra_chave($Palavra_chave){
		$this->Palavra_chave=$Palavra_chave;
	}
	public function GetData(){
		return $this->Data;
	}
	public function setData($Data){
		$this->Data=$Data;
	}
	public function GetCategoria(){
		return $this->Categoria;
	}

	public function SetCategoria($Categoria){
		$this->Categoria=$Categoria;
	}
	public function SetAprovacao($aprovacao){
		$this->Aprovacao=$aprovacao;
	}
	public function GetAprovacao(){
		return $this->Aprovacao;
	}
	public function SetNome_integrante_projetos($Integrantes){
		$this->Integrantes=$Integrantes;
	}
	public function GetNome_integrante_projetos(){
		return $this->Integrantes;
	}
	public function SetEmail_integrante_projetos($Integrantes_email){
		$this->Integrantes_email=$Integrantes_email;
	}
	public function GetEmail_integrante_projetos(){
		return $this->Integrantes_email;
	}


}


?>