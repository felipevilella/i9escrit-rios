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
$route["vervitrine"] ="inicio_controller/vitrine";
$route["cadastrarprojeto"] = "Formulario_controller/cadastro_formulario"; 


$route["validacao"] = "Login_controller/validacao";
