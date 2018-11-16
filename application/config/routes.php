<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'inicio_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route["vitrine_tecnologica"] = "vitrine_tecnologica";
$route["login"] = "Login_controller";
$route["formulario"] = "Formulario_controller";
$route["cadastrodeeventos"] = "Cadastroevento_controller";
$route["inicio"] = "inicio_controller";
$route["menu"] = "Login_controller/menu";
$route["verprojeto"] ="inicio_controller/projeto";
$route["vervitrine/(:num)"] ="inicio_controller/vitrine/$1";
$route["cadastrarprojeto"] = "Formulario_controller/cadastro_formulario"; 

$route["validacao"] = "Login_controller/validacao";

$route["projetospendentes"] = "Login_controller/projetos_pendentes";
$route["visualizarprojeto/(:num)"]["GET"] = "Login_controller/visualizar_projetos/$1";
$route["todosprojetos"] = "Login_controller/todos_projetos";

$route["Cadastrarevento"]  = "Cadastroevento_controller/cadastrar_evento";
$route["eventospendentes"] = "Login_controller/eventos_pendentes";
$route["visualizarevento/(:num)"]["GET"] = "Login_controller/visualizar_evento/$1";


$route["aprovarevento"] = "Login_controller/aprovar_evento";
$route["reprovarevento"] = "Login_controller/reprovar_evento";
$route["aprovarprojeto"] = "Login_controller/aprovar_projeto";
$route["reprovarprojeto"] = "Login_controller/reprovar_projeto";


$route["meuseventos"] = "Login_controller/meus_eventos";
$route["vereventousuario/(:num)"] = "Login_controller/visualizar_evento_usuario/$1";

$route["Cadastrareventousuario"]  = "Cadastroevento_controller/cadastrar_evento_usuario";

$route["cadastrarprojetousuario"] = "Formulario_controller/cadastrar_projeto_usuario";
$route["enviarDadosprojeto"] = "Formulario_controller/enviarDadosprojeto";

$route["meusprojetos"] = "Login_controller/meus_projetos";
$route["meusprojetos/(:num)"]["GET"] = "Login_controller/visualizar_projetos_usuario/$1";
$route["enviardadoseventos"]["POST"] = "Cadastroevento_controller/Dados_evento_usuario";

$route["buscarvitrine"] = "vitrine_tecnologica/buscar_vitrine";

