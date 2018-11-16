<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario_controller extends CI_Controller {

	public function index(){
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->view("complementos_front/navbar2");
		$this->load->view("estrutura_site/formulario_inscricao");
		$this->load->view("complementos_front/footer");
		$this->load->model("formulario_model");
	}
	public function cadastrar_projeto_usuario(){
		$this->load->library('form_validation');
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
			$this->load->view("estrutura_site/cadastro_projeto_usuario");
			$this->load->view("complementos_front/footer");
			$this->load->model("formulario_model");
		}
	}
	public function enviarDadosprojeto(){
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->model("formulario_model");

		$this->load->library('session');
		$this->load->model("projetos_model");

		$dados["email"] = $this->session->usuario_session;
		$dados["nome"] = $this->session->nome_session;

		$dados["completo"]="";

		 //VALIDACAO DOS CAMPOs
		$this->form_validation->set_rules("nomeprojeto","nome projeto","required|min_length[3]");
		$this->form_validation->set_rules("quantidade","quantidade integrantes","required");
		$this->form_validation->set_rules("video","video",'required');
		$this->form_validation->set_rules("data_i","data","required");
		$this->form_validation->set_rules("descricao","descricao","required|min_length[20]|max_length[400]");
		$this->form_validation->set_rules("objetivo","objetivo","required|min_length[20]|max_length[500]");
		$this->form_validation->set_rules("categoria","categoria","required");
		$this->form_validation->set_rules("quantidadefotos","quantidade","required");
		$this->form_validation->set_rules("estagio","estagio","required");

		 //validando nome do usuario e email por quantidade
		if($this->input->post("quantidade") == 2){

		
			$this->form_validation->set_rules("nome1","nome","required|min_length[3]");
			$this->form_validation->set_rules("email1","e-mail","required|valid_email");
		}
		if($this->input->post("quantidade") == 3){

			
			$this->form_validation->set_rules("nome1","nome","required|min_length[3]");
			$this->form_validation->set_rules("email1","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome2","nome","required|min_length[3]");
			$this->form_validation->set_rules("email2","e-mail","required|valid_email");
		}
		if($this->input->post("quantidade") == 4){

			
			$this->form_validation->set_rules("nome1","nome","required|min_length[3]");
			$this->form_validation->set_rules("email1","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome2","nome","required|min_length[3]");
			$this->form_validation->set_rules("email2","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome3","nome","required|min_length[3]");
			$this->form_validation->set_rules("email3","e-mail","required|valid_email");

		}
		if($this->input->post("quantidade") == 5){

			
			$this->form_validation->set_rules("nome1","nome","required|min_length[3]");
			$this->form_validation->set_rules("email1","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome2","nome","required|min_length[3]");
			$this->form_validation->set_rules("email2","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome3","nome","required|min_length[3]");
			$this->form_validation->set_rules("email3","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome4","nome","required|min_length[3]");
			$this->form_validation->set_rules("email4","e-mail","required|valid_email");

		}


	
		$idusuario = $this->session->idusuario_session;




		if($this->form_validation->run() == false){
			$this->form_validation->error_array();
			print_r($this->form_validation->error_array());
		}
		else{

			$config['upload_path'] = './assets/foto_projeto/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '1400';
			$config['max_width'] = '1424';
			$config['max_height'] = '900';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			$projeto = array(
				"nome"=>$this->input->post("nomeprojeto"),
				"categoria"=>$this->input->post("categoria"),
				"palavrachave"=>$this->input->post("palavrachave"),
				"data"=>$this->input->post("data_i"),
				"descricao"=>$this->input->post("descricao"),
				"objetivo"=>$this->input->post("objetivo"),
				'fk_idUsuario'=>$idusuario
			);
			$this->formulario_model->cadastro_projeto($projeto);
			$dadosprojeto = $this->formulario_model->selecionar_ultimo_projeto();
			if($this->input->post("quantidade") == 2){
				
				$integrantes1 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->session->nome_session ,
					'email' =>  $this->session->usuario_session);
				$this->formulario_model->cadastro_integrantes($integrantes1);
				
				$integrantes2 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome1') ,
					'email' => $this->input->post('email1'));
				$this->formulario_model->cadastro_integrantes($integrantes2);
			}


			if($this->input->post("quantidade") == 3){
				
				$integrantes1 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->session->nome_session ,
					'email' =>  $this->session->usuario_session);
				$this->formulario_model->cadastro_integrantes($integrantes1);
				
				$integrantes2 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome1') ,
					'email' => $this->input->post('email1'));
				$this->formulario_model->cadastro_integrantes($integrantes2);


				$integrantes3 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome2') ,
					'email' => $this->input->post('email2'));
				$this->formulario_model->cadastro_integrantes($integrantes3);
			}

			if($this->input->post("quantidade") == 4){
				
				$integrantes1 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->session->nome_session ,
					'email' =>  $this->session->usuario_session);
				$this->formulario_model->cadastro_integrantes($integrantes1);
				
				$integrantes2 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome1') ,
					'email' => $this->input->post('email1'));
				$this->formulario_model->cadastro_integrantes($integrantes2);


				$integrantes3 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome2') ,
					'email' => $this->input->post('email2'));
				$this->formulario_model->cadastro_integrantes($integrantes3);

				$integrantes4 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome3') ,
					'email' => $this->input->post('email3'));
				$this->formulario_model->cadastro_integrantes($integrantes4);

				$integrantes5 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome4') ,
					'email' => $this->input->post('email4'));
				$this->formulario_model->cadastro_integrantes($integrantes5);
			}

			$video = array(
				'fk_idProjeto' =>$dadosprojeto['idProjeto'],
				'urlvideo' => $this->input->post('video')
			);
			$this->formulario_model->cadastro_video($video);


			if($this->input->post("quantidadefotos") == 2){	
				if ($this->upload->do_upload('foto0')){
					
					$name0 = $this->upload->data();
					$foto0 =array(
						'caminho_foto' => $name0['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],
						
					);
					$this->formulario_model->cadastro_foto($foto0);
				}
				else
					echo $this->upload->display_errors();

				if ($this->upload->do_upload('foto1')){
					$name1 = $this->upload->data();
					$foto1 =array(
						'caminho_foto' => $name1['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],

					);
					$this->formulario_model->cadastro_foto($foto1);
				}
				
				else
					echo $this->upload->display_errors();
				
				
			}
			if($this->input->post("quantidadefotos") == 3){	
				if ($this->upload->do_upload('foto0')){
					echo 'Arquivo salvo com sucesso.';
					$name0 = $this->upload->data();
					$foto0 =array(
						'caminho_foto' => $name0['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],
						
					);
					$this->formulario_model->cadastro_foto($foto0);
				}
				else
					echo $this->upload->display_errors();

				if ($this->upload->do_upload('foto1')){
					$name1 = $this->upload->data();
					$foto1 =array(
						'caminho_foto' => $name1['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],

					);
					$this->formulario_model->cadastro_foto($foto1);
					echo 'Arquivo salvo com sucesso.';
				}
				
				else
					echo $this->upload->display_errors();

				if ($this->upload->do_upload('foto2')){
					$name2 = $this->upload->data();
					$foto2 =array(
						'caminho_foto' => $name2['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],

					);
					$this->formulario_model->cadastro_foto($foto2);
					echo 'Arquivo salvo com sucesso.';
				}
				
				else
					echo $this->upload->display_errors();
				
				
			}
			if($this->input->post("quantidadefotos") == 4){	
				if ($this->upload->do_upload('foto0')){
					echo 'Arquivo salvo com sucesso.';
					$name0 = $this->upload->data();
					$foto0 =array(
						'caminho_foto' => $name0['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],
						
					);
					$this->formulario_model->cadastro_foto($foto0);
				}
				else
					echo $this->upload->display_errors();

				if ($this->upload->do_upload('foto1')){
					$name1 = $this->upload->data();
					$foto1 =array(
						'caminho_foto' => $name1['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],

					);
					$this->formulario_model->cadastro_foto($foto1);
					echo 'Arquivo salvo com sucesso.';
				}
				
				else
					echo $this->upload->display_errors();

				if ($this->upload->do_upload('foto2')){
					$name2 = $this->upload->data();
					$foto2 =array(
						'caminho_foto' => $name2['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],

					);
					$this->formulario_model->cadastro_foto($foto2);
					echo 'Arquivo salvo com sucesso.';
				}
				
				else
					echo $this->upload->display_errors();


				if ($this->upload->do_upload('foto3')){
					$name3 = $this->upload->data();
					$foto3 =array(
						'caminho_foto' => $name3['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],

					);
					$this->formulario_model->cadastro_foto($foto3);
					echo 'Arquivo salvo com sucesso.';
				}
				
				else
					echo $this->upload->display_errors();
				

			}



			$dados["completo"] = " Projeto cadastrado com sucesso";

		}
		$this->load->view("complementos_front/navbar_usuario",$dados);
		$this->load->view("estrutura_site/cadastro_projeto_usuario");
		$this->load->view("complementos_front/footer");
		$this->load->model("formulario_model");
	}
	public function cadastro_formulario(){
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->model("formulario_model");

		$dados["completo"]="";

		 //VALIDACAO DOS CAMPOs
		$this->form_validation->set_rules("nomeprojeto","nome projeto","required|min_length[3]");
		$this->form_validation->set_rules("quantidade","quantidade integrantes","required");
		$this->form_validation->set_rules("video","video",'required');
		$this->form_validation->set_rules("data_i","data","required");
		$this->form_validation->set_rules("descricao","descricao","required|min_length[20]|max_length[200]");
		$this->form_validation->set_rules("objetivo","objetivo","required|min_length[20]|max_length[500]");
		$this->form_validation->set_rules("categoria","categoria","required");
		$this->form_validation->set_rules("quantidadefotos","quantidade","required");
		$this->form_validation->set_rules("estagio","estagio","required");

		 //validando nome do usuario e email por quantidade
		if($this->input->post("quantidade") == 2){

			$this->form_validation->set_rules("nome0","nome","required|min_length[3]");
			$this->form_validation->set_rules("email0","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome1","nome","required|min_length[3]");
			$this->form_validation->set_rules("email1","e-mail","required|valid_email");
		}
		if($this->input->post("quantidade") == 3){

			$this->form_validation->set_rules("nome0","nome","required|min_length[3]");
			$this->form_validation->set_rules("email0","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome1","nome","required|min_length[3]");
			$this->form_validation->set_rules("email1","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome2","nome","required|min_length[3]");
			$this->form_validation->set_rules("email2","e-mail","required|valid_email");
		}
		if($this->input->post("quantidade") == 4){

			$this->form_validation->set_rules("nome0","nome","required|min_length[3]");
			$this->form_validation->set_rules("email0","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome1","nome","required|min_length[3]");
			$this->form_validation->set_rules("email1","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome2","nome","required|min_length[3]");
			$this->form_validation->set_rules("email2","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome3","nome","required|min_length[3]");
			$this->form_validation->set_rules("email3","e-mail","required|valid_email");

		}
		if($this->input->post("quantidade") == 5){

			$this->form_validation->set_rules("nome0","nome","required|min_length[3]");
			$this->form_validation->set_rules("email0","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome1","nome","required|min_length[3]");
			$this->form_validation->set_rules("email1","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome2","nome","required|min_length[3]");
			$this->form_validation->set_rules("email2","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome3","nome","required|min_length[3]");
			$this->form_validation->set_rules("email3","e-mail","required|valid_email");
			$this->form_validation->set_rules("nome4","nome","required|min_length[3]");
			$this->form_validation->set_rules("email4","e-mail","required|valid_email");

		}


		$usuario = array(
			'nome' =>$this->input->post('nome0') ,
			'usuario' => $this->input->post('email0'),
			'senha' => md5("@alterarsenha123"),
			'prioriedade' =>'usuario'
		);
		$idusuario = $this->formulario_model->selecionar_ultimo_usuario();
		$this->formulario_model->cadastro_usuario($usuario);



		if($this->form_validation->run() == false){
			$this->form_validation->error_array();
			print_r($this->form_validation->error_array());
		}
		else{

			$config['upload_path'] = './assets/foto_projeto/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '1400';
			$config['max_width'] = '1424';
			$config['max_height'] = '900';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);


			$projeto = array(
				"nome"=>$this->input->post("nomeprojeto"),
				"categoria"=>$this->input->post("categoria"),
				"palavrachave"=>$this->input->post("palavrachave"),
				"data"=>$this->input->post("data_i"),
				"descricao"=>$this->input->post("descricao"),
				"objetivo"=>$this->input->post("objetivo"),
				'fk_idUsuario'=>$idusuario["idUsuario"]
			);
			$this->formulario_model->cadastro_projeto($projeto);
			$dadosprojeto = $this->formulario_model->selecionar_ultimo_projeto();

			if($this->input->post("quantidade") == 2){
				
				$integrantes1 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome0') ,
					'email' => $this->input->post('email0'));
				$this->formulario_model->cadastro_integrantes($integrantes1);
				
				$integrantes2 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome1') ,
					'email' => $this->input->post('email1'));
				$this->formulario_model->cadastro_integrantes($integrantes2);
			}


			if($this->input->post("quantidade") == 3){
				
				$integrantes1 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome0') ,
					'email' => $this->input->post('email0'));
				$this->formulario_model->cadastro_integrantes($integrantes1);
				
				$integrantes2 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome1') ,
					'email' => $this->input->post('email1'));
				$this->formulario_model->cadastro_integrantes($integrantes2);


				$integrantes3 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome2') ,
					'email' => $this->input->post('email2'));
				$this->formulario_model->cadastro_integrantes($integrantes3);
			}

			if($this->input->post("quantidade") == 4){
				
				$integrantes1 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome0') ,
					'email' => $this->input->post('email0'));
				$this->formulario_model->cadastro_integrantes($integrantes1);
				
				$integrantes2 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome1') ,
					'email' => $this->input->post('email1'));
				$this->formulario_model->cadastro_integrantes($integrantes2);


				$integrantes3 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome2') ,
					'email' => $this->input->post('email2'));
				$this->formulario_model->cadastro_integrantes($integrantes3);

				$integrantes4 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome3') ,
					'email' => $this->input->post('email3'));
				$this->formulario_model->cadastro_integrantes($integrantes4);

				$integrantes5 = array(
					'fk_idProjeto' =>$dadosprojeto['idProjeto'],
					'nome' =>$this->input->post('nome4') ,
					'email' => $this->input->post('email4'));
				$this->formulario_model->cadastro_integrantes($integrantes5);
			}

			$video = array(
				'fk_idProjeto' =>$dadosprojeto['idProjeto'],
				'urlvideo' => $this->input->post('video')
			);
			$this->formulario_model->cadastro_video($video);


			if($this->input->post("quantidadefotos") == 2){	
				if ($this->upload->do_upload('foto0')){
					
					$name0 = $this->upload->data();
					$foto0 =array(
						'caminho_foto' => $name0['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],
						
					);
					$this->formulario_model->cadastro_foto($foto0);
				}
				else
					echo $this->upload->display_errors();

				if ($this->upload->do_upload('foto1')){
					$name1 = $this->upload->data();
					$foto1 =array(
						'caminho_foto' => $name1['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],

					);
					$this->formulario_model->cadastro_foto($foto1);
				}
				
				else
					echo $this->upload->display_errors();
				
				
			}
			if($this->input->post("quantidadefotos") == 3){	
				if ($this->upload->do_upload('foto0')){
					echo 'Arquivo salvo com sucesso.';
					$name0 = $this->upload->data();
					$foto0 =array(
						'caminho_foto' => $name0['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],
						
					);
					$this->formulario_model->cadastro_foto($foto0);
				}
				else
					echo $this->upload->display_errors();

				if ($this->upload->do_upload('foto1')){
					$name1 = $this->upload->data();
					$foto1 =array(
						'caminho_foto' => $name1['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],

					);
					$this->formulario_model->cadastro_foto($foto1);
					echo 'Arquivo salvo com sucesso.';
				}
				
				else
					echo $this->upload->display_errors();

				if ($this->upload->do_upload('foto2')){
					$name2 = $this->upload->data();
					$foto2 =array(
						'caminho_foto' => $name2['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],

					);
					$this->formulario_model->cadastro_foto($foto2);
					echo 'Arquivo salvo com sucesso.';
				}
				
				else
					echo $this->upload->display_errors();
				
				
			}
			if($this->input->post("quantidadefotos") == 4){	
				if ($this->upload->do_upload('foto0')){
					echo 'Arquivo salvo com sucesso.';
					$name0 = $this->upload->data();
					$foto0 =array(
						'caminho_foto' => $name0['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],
						
					);
					$this->formulario_model->cadastro_foto($foto0);
				}
				else
					echo $this->upload->display_errors();

				if ($this->upload->do_upload('foto1')){
					$name1 = $this->upload->data();
					$foto1 =array(
						'caminho_foto' => $name1['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],

					);
					$this->formulario_model->cadastro_foto($foto1);
					echo 'Arquivo salvo com sucesso.';
				}
				
				else
					echo $this->upload->display_errors();

				if ($this->upload->do_upload('foto2')){
					$name2 = $this->upload->data();
					$foto2 =array(
						'caminho_foto' => $name2['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],

					);
					$this->formulario_model->cadastro_foto($foto2);
					echo 'Arquivo salvo com sucesso.';
				}
				
				else
					echo $this->upload->display_errors();


				if ($this->upload->do_upload('foto3')){
					$name3 = $this->upload->data();
					$foto3 =array(
						'caminho_foto' => $name3['file_name'],
						'fk_idProjeto'=>$dadosprojeto['idProjeto'],

					);
					$this->formulario_model->cadastro_foto($foto3);
					echo 'Arquivo salvo com sucesso.';
				}
				
				else
					echo $this->upload->display_errors();
				

			}

			
			/* dados de envio para o email*/
			/*
			$assunto="Dados de acesso I9 escritorios";
			$mensagem="

			Olá, $nomeusuariobanco<br>
			Agradecemos ao cadastro do seu projeto no nosso sistema, foi gerado os dados de acesso para as futuras modificações e novas inclusões.<br>

			<h5><b>Dados de acesso:<b></h5>
			Usuario:". $this->input->post('email0')."<br>
			Senha: @alterarsenha123<br><br><br>
			acesse: <a href='www.i9escritorio.una.br/acesso'>www.i9escritorio.una.br/acesso</a> para ativar a sua conta. <br>

			<h7>Nossa equipe está verificando seu projeto, em breve retornaremos com mais informações</h7>

			<h3><b>I9Escritorio</b></h3>
			<h7>Centro Universitario Una-UNA</h7>
			";

		$headers =  "Content-Type:text/html; charset=UTF-8\n";
        $headers .= "From:  i9escritorios.com.br\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
        $headers .= "X-Sender: i9escritorios@i9escritorios.com.br \n"; //email do servidor //que enviou
        $headers .= "X-Mailer: PHP  v".phpversion()."\n";
        $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
        $headers .= "Return-Path: dados@foruna.br  \n"; //caso a msg //seja respondida vai para  este email.
        $headers .= "MIME-Version: 1.0\n";

        mail($email, $assunto, $mensagem, $headers);  //função que faz o envio do email.*/

        $dados["completo"] = " Projeto cadastrado com sucesso, e-mail enviado para".$this->input->post('email0').".";

    }
    $this->load->view("complementos_front/navbar2",$dados);
    $this->load->view("estrutura_site/formulario_inscricao");
    $this->load->view("complementos_front/footer");
    $this->load->model("formulario_model");
}
}
