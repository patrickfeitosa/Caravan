<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'principal';
$route['planos'] = "planos/index";
$route['inscricao'] = "inscricao/index";
$route['contato'] = "contato/index";
$route['local'] = "local/index";
$route['administracao'] = "administracao/login";
$route['cliente/acessar'] = "cliente/logar";
$route['cliente'] = "cliente/index";

/* Rotas de Administração */

    $opcoes = [
            'local',
            'evento',
            'cliente',
            'usuario',
            'pedidos'
        ];

    foreach($opcoes as $op){
        /* Rotas de CRUD */
        $route['administracao/'.$op.'/novo'] = $op."/adicionar_".$op;
        $route['administracao/'.$op.'/editar/(:num)'] =  $op."/editar_".$op."/$1";
        $route['administracao/'.$op.'/salvar'] =  $op."/salvar_".$op."/$1";
        $route['administracao/'.$op.'/salvar_edicao'] =  $op."/salvar_".$op."_edicao";
        $route['administracao/'.$op.'/excluir/(:num)'] =  $op."/excluir_".$op."/$1";

        /* Rotas de UI */
        $route['administracao/'.$op.'/success'] = $op.'/success';
        $route['administracao/'.$op.'/error'] = $op.'/error';      
        
        /* Rota exclusiva para tratativa de Ajax */
        $route['administracao/'.$op.'/visualizar/(:num)'] =  $op."/visualizar_".$op."/$1";  

    }

/* Rotas para Locais (Client View)*/

$route['404_override'] = '';
$route['translate_uri_dashes'] = true;
