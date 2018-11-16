<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastroevento_controller extends CI_Controller {

	public function index(){

		$this->load->helper('url');
		$this->load->view("complementos_front/navbar2");
		$this->load->view("estrutura_site/cadastro_evento");
		$this->load->view("complementos_front/footer");
	}
	public function cadastrar_evento_usuario(){
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model("projetos_model");

		$dados["email"] = $this->session->usuario_session;
		$dados["nome"] = $this->session->nome_session;
		if(empty($dados["email"])){
			redirect(base_url('inicio'), 'refresh');
		}
		else{
			$this->load->view("complementos_front/navbar_usuario",$dados);
			$this->load->view("estrutura_site/cadastro_evento_usuario");
			$this->load->view("complementos_front/footer");
		}
	}
	public function cadastrar_evento(){
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->model("formulario_model");


		$dados["completo"]="";

		 //VALIDACAO DOS CAMPOs
		$this->form_validation->set_rules("nomeevento","nome projeto","required|min_length[3]");
		$this->form_validation->set_rules("datainicio","data inicio","required");
		$this->form_validation->set_rules("dataterminio","data terminio","required");
		$this->form_validation->set_rules("horarioinicio","horario de inicio","required");
		$this->form_validation->set_rules("horarioencerramento","horario de encerramento","required");
		$this->form_validation->set_rules("descricaoprojeto","descricao","required|min_length[20]|max_length[290]");
		$this->form_validation->set_rules("urlevento","url de envento","required");
		$this->form_validation->set_rules("nome0","nome","required|min_length[3]");
		$this->form_validation->set_rules("email0","e-mail","required|valid_email");


		if($this->form_validation->run() == false){
			$this->form_validation->error_array();
			print_r($this->form_validation->error_array());

			$this->load->view("complementos_front/navbar2",$dados);
			$this->load->view("estrutura_site/cadastro_evento");
			$this->load->view("complementos_front/footer");
		}
		else{
			$config['upload_path'] = './assets/foto_projeto/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '1400';
			$config['max_width'] = '1424';
			$config['max_height'] = '900';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('foto0')){
				$name = $this->upload->data();

				$usuario = array(
					'nome' =>$this->input->post('nome0') ,
					'usuario' => $this->input->post('email0'),
					'senha' => md5("@alterarsenha123"),
					'prioriedade' =>'usuario'
				);
				$this->formulario_model->cadastro_usuario($usuario);

				$usuario = $this->formulario_model->selecionar_ultimo_usuario();
				$evento = array(
					"nome"=>$this->input->post("nomeevento"),
					"url"=>$this->input->post("urlevento"),
					"descricao"=>$this->input->post("descricaoprojeto"),
					'fk_idUsuario'=>$usuario["idUsuario"]
				);
				$this->formulario_model->cadastro_evento($evento);

				$dadosevento = $this->formulario_model->selecionar_ultimo_evento();
				$funcionamento = array(
					"horario_incio"=>$this->input->post("horarioinicio"),
					"horario_terminio"=>$this->input->post("horarioencerramento"),
					"data_inicio"=>$this->input->post("datainicio"),
					"data_terminio"=>$this->input->post("dataterminio"),
					'fk_idEvento'=>$dadosevento["idEvento"]
				);
				$this->formulario_model->cadastro_funcionamento($funcionamento);
				$integrantes = array(
					'nome' =>$this->input->post('nome0') ,
					'email' => $this->input->post('email0'),
					'fk_idevento'=>$dadosevento["idEvento"]
				);
				$this->formulario_model->cadastro_integrantes($integrantes);
				$foto =array(
					'caminho_foto' => $name['file_name'],
					'fk_idEvento'=>$dadosevento["idEvento"]
				);
				$this->formulario_model->cadastro_foto($foto);


				$dados["completo"] = " Evento cadastrado com sucesso, e-mail enviado para".$this->input->post('email0').".";
			}
			else{
				$dados["completo"] = $this->upload->display_errors();
			}
			$this->load->view("complementos_front/navbar2",$dados);
			$this->load->view("estrutura_site/cadastro_evento");
			$this->load->view("complementos_front/footer");
		}
	}
	public function Dados_evento_usuario(){
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('file');
		$this->load->model("formulario_model");

		$this->load->model("projetos_model");

		$dados["email"] = $this->session->usuario_session;
		$dados["nome"] = $this->session->nome_session;

		$dados["completo"]="";

		 //VALIDACAO DOS CAMPOs
		$this->form_validation->set_rules("nomeevento","nome projeto","required|min_length[3]");
		$this->form_validation->set_rules("datainicio","data inicio","required");
		$this->form_validation->set_rules("dataterminio","data terminio","required");
		$this->form_validation->set_rules("horarioinicio","horario de inicio","required");
		$this->form_validation->set_rules("horarioencerramento","horario de encerramento","required");
		$this->form_validation->set_rules("descricaoprojeto","descricao","required|min_length[20]|max_length[290]");
		$this->form_validation->set_rules("urlevento","url de envento","required");



		if($this->form_validation->run() == false){
			$this->form_validation->error_array();
			print_r($this->form_validation->error_array());

			$this->load->view("complementos_front/navbar2",$dados);
			$this->load->view("estrutura_site/cadastro_evento");
			$this->load->view("complementos_front/footer");
		}
		else{
			$config['upload_path'] = './assets/foto_projeto/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '1400';
			$config['max_width'] = '1424';
			$config['max_height'] = '900';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('foto0')){
				$name = $this->upload->data();

			

				$usuario = $this->session->idusuario_session;
				$evento = array(
					"nome"=>$this->input->post("nomeevento"),
					"url"=>$this->input->post("urlevento"),
					"descricao"=>$this->input->post("descricaoprojeto"),
					'fk_idUsuario'=>$usuario
				);
				$this->formulario_model->cadastro_evento($evento);

				$dadosevento = $this->formulario_model->selecionar_ultimo_evento();
				$funcionamento = array(
					"horario_incio"=>$this->input->post("horarioinicio"),
					"horario_terminio"=>$this->input->post("horarioencerramento"),
					"data_inicio"=>$this->input->post("datainicio"),
					"data_terminio"=>$this->input->post("dataterminio"),
					'fk_idEvento'=>$dadosevento["idEvento"]
				);
				$this->formulario_model->cadastro_funcionamento($funcionamento);
				$integrantes = array(
					'nome' =>$dados["nome"],
					'email' => $dados["email"],
					'fk_idevento'=>$dadosevento["idEvento"]
				);
				$this->formulario_model->cadastro_integrantes($integrantes);
				$foto =array(
					'caminho_foto' => $name['file_name'],
					'fk_idEvento'=>$dadosevento["idEvento"]
				);
				$this->formulario_model->cadastro_foto($foto);


				$dados["completo"] = " Evento cadastrado com sucesso.";
			}
			else{
				$dados["completo"] = $this->upload->display_errors();
			}
			$this->load->view("complementos_front/navbar_usuario",$dados);
			$this->load->view("estrutura_site/cadastro_evento_usuario");
			$this->load->view("complementos_front/footer");
		}
	}


}
