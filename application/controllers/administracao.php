<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administracao extends CI_Controller {

    /* Metodo para controle de acesso */
    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('administracao');
        }
    }

    //Metodo para carregar as Views de Login
    public function login() {
        $this->load->view('includes/html_header');
        $this->load->view('pages/admin/main/admin');
        $this->load->view('includes/html_footer_admin');
    }

    //Metodo para realizar o login e salvar os dados na $_SESSION
    public function logar() {

        $userLogin = $this->input->post('userLogin');
        $userPassword = $this->input->post('passwordLogin');

        $this->db->select('*');
        $this->db->where('Senha', $userPassword);
        $this->db->where('Email', $userLogin);
        $this->db->where('flg_admin', 'true');
        $data['usuario'] = $this->db->get('usuario')->result();

        if (count($data['usuario']) == 1) {
            $dados['nome'] = $data['usuario'][0]->nome;
            $dados['id'] = $data['usuario'][0]->id;
            $dados['logado'] = true;
            $this->session->set_userdata($dados);
            redirect('administracao/home');
        } else {
            redirect('administracao/error');
        }
    }

    //Metodo para Eliminar os dados de login da $_SESSION
    public function logout() {
        $this->session->sess_destroy();
        redirect('administracao');
    }
    

    //Os metodos listados abaixo são para 
    public function home() {

        //Metodo para verificar atividade de usuário logado
        $this->verificar_sessao();

        $data['opcao'] = 'home';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/main_dashboard');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function extrato(){  

        //Metodo para verificar atividade de usuário logado
        $this->verificar_sessao();

        $data['opcao'] = 'extratos';      
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/extrato');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function clientes(){   

        //Metodo para verificar atividade de usuário logado
        $this->verificar_sessao();

        //Carregamento do Model para listar clientes na tableView
        $this->load->model('usuario_model', 'usuario');
        $dados['clientes'] = $this->usuario->get_clientes();         

        $data['opcao'] = 'clientes';       
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/cliente', $dados);
        $this->load->view('includes/html_footer_dashboard');
    }

    public function usuarios(){   

        //Metodo para verificar atividade de usuário logado
        $this->verificar_sessao();

        //Carregamento do Model para listar usuários na tableView
        $this->load->model('usuario_model', 'usuario');
        $dados['usuarios'] = $this->usuario->get_usuarios();         

        //Controle para marcar a opção ativa do side menu
        $data['opcao'] = 'usuarios'; 
        
        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/usuario', $dados);
        $this->load->view('includes/html_footer_dashboard');
    }

    public function locais(){    
        
        //Metodo para verificar atividade de usuário logado
        $this->verificar_sessao(); 

        //Carregamento do Model para listar locais na tableView
        $this->load->model('local_model', 'local');
        $dados['locais'] = $this->local->get_locais();  

        //Controle para marcar a opção ativa do side menu
        $data['opcao'] = 'locais';

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/locais-admin', $dados);
        $this->load->view('includes/html_footer_dashboard');
    }

    public function eventos(){  

        //Metodo para verificar atividade de usuário logado
        $this->verificar_sessao();

        //Carregamento do Model para listar eventos na tableView
        $this->load->model('evento_model', 'evento');
        $dados['eventos'] = $this->evento->get_eventos();  

        //Controle para marcar a opção ativa do side menu
        $data['opcao'] = 'eventos';

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/eventos-admin', $dados);
        $this->load->view('includes/html_footer_dashboard');
    }

    public function pedidos(){ 

        //Metodo para verificar atividade de usuário logado
        $this->verificar_sessao();

        $data['opcao'] = 'pedidos';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/pedido');
        $this->load->view('includes/html_footer_dashboard');
    }

    //Metodo para carregar as Views de Login
    public function error() {
        $data['msg'] = "Usuário ou Senha incorretos";
        $this->load->view('includes/html_header');
        $this->load->view('pages/admin/main/admin');
        $this->load->view('includes/msg_erro', $data);
        $this->load->view('includes/html_footer_admin');
    }    
    
}