<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    //Metodo para verificação de conta logada do Usuário
    public function verificar_sessao(){
        if ($this->session->userdata('logadoUsuario') == false) {
            redirect('principal');
        }
    }

    //Metodo para realizar o login e salvar os dados na $_SESSION
    public function logar() {

        $userLogin = $this->input->post('loginEmail');
        $userPassword = $this->input->post('loginSenha');

        $this->db->select('*');
        $this->db->where('Senha', $userPassword);
        $this->db->where('Email', $userLogin);
        $this->db->where('flg_admin', 'false');
        $data['usuario'] = $this->db->get('usuario')->result();

        if (count($data['usuario']) == 1) {
            $dados['nomeUsuario'] = $data['usuario'][0]->Nome;
            $dados['idUsuario'] = $data['usuario'][0]->IDUsuario;
            $dados['logadoUsuario'] = true;
            $this->session->set_userdata($dados);            
            redirect('principal');
        } else {
            redirect('principal');
        }
    }

    //Metodo para Eliminar os dados de login da $_SESSION
    public function logout() {
        $this->session->sess_destroy();
        redirect('principal');
    }

    public function cadastrar(){
        //Coletando dados do Post
        $data['Nome'] = $this->input->post('inputNome');
        $data['Cpf'] = $this->input->post('inputCPF');
        $data['Email'] = $this->input->post('inputEmail');
        $data['Senha'] = $this->input->post('inputSenha');
        $data['Endereco'] = $this->input->post('inputEndereco');
        $data['Cidade'] = $this->input->post('inputCidade');
        $data['Estado'] = $this->input->post('inputEstado');
        $data['CEP'] = $this->input->post('inputCEP');
        $data['flg_admin'] = "false";

        //Carregando o Model responsavel pelo Controller
        $this->load->model('usuario_model', 'usuario');


        //Realizando a inserção no banco de dados
        if($this->usuario->inserir_usuario($data)){
            redirect('inscricao/success');
        }else{
            redirect('inscricao/error');
        }
    }

    //Metodo para carregar perfil
    public function carregar_perfil(){
        //Metodo para verificar atividade de usuário logado
        $this->verificar_sessao();

        //Carregando o Model responsavel pelo Controller
        $this->load->model('usuario_model', 'usuario');
        $dados['cliente'] = $this->usuario->get_cliente($_SESSION['idUsuario']);

        $data['opcaoCliente'] = 'home';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_client', $data);
        $this->load->view('pages/client/profile-side/main', $dados);
        $this->load->view('includes/html_footer_dashboard');
    }

    //Metodo para Editar perfil
    public function editar_perfil(){
        //Metodo para verificar atividade de usuário logado
        $this->verificar_sessao();

        //Carregando o Model responsavel pelo Controller
        $this->load->model('usuario_model', 'usuario');
        $dados['cliente'] = $this->usuario->get_cliente($_SESSION['idUsuario']);

        $data['opcaoCliente'] = 'editar';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_client', $data);
        $this->load->view('pages/client/profile-side/editar_perfil', $dados);
        $this->load->view('includes/html_footer_dashboard');
    }

    //Metodo para Salvar a Alteração do Perfil
    public function salvar_cliente_edicao(){
        $this->verificar_sessao();
        
        $id_usuario = $this->input->post('IDUsuario');

        //Editando $_SESSION (Apenas por garantia)
        $_SESSION['nomeUsuario'] = $this->input->post('inputNome');
        
        //Coletando dados do Post
        $data['Nome'] = $this->input->post('inputNome');
        $data['Cpf'] = $this->input->post('inputCPF');
        $data['Email'] = $this->input->post('inputEmail');
        $data['Senha'] = $this->input->post('inputSenha');
        $data['Endereco'] = $this->input->post('inputEndereco');
        $data['Cidade'] = $this->input->post('inputCidade');
        $data['Estado'] = $this->input->post('inputEstado');
        $data['CEP'] = $this->input->post('inputCEP');
        $data['flg_admin'] = "false";

        //Carregando o Model responsavel pelo Controller
        $this->load->model('usuario_model', 'usuario');

        //Realizando a inserção no banco de dados
        if($this->usuario->salva_usuario($data, $id_usuario)){
            redirect('cliente/success');
        }else{
            redirect('cliente/error');
        } 
    }

    /* Funções para Alimentar requisições Ajax*/
    public function visualizar_cliente($IDUsuario){
        
        //Carregando o Model responsavel pelo Controller
        $this->load->model('usuario_model', 'usuario');
        echo json_encode($this->usuario->get_cliente($IDUsuario));  
    }    

    //Metodos para tratar as mensagens do CRUD
    public function success(){
        //Metodo para verificar atividade de usuário logado
        $this->verificar_sessao();

        //Carregando o Model responsavel pelo Controller
        $this->load->model('usuario_model', 'usuario');
        $dados['cliente'] = $this->usuario->get_cliente($_SESSION['idUsuario']);

        //Controle para marcar a opção ativa do side menu
        $data['opcaoCliente'] = 'home';

        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_client', $data);
        $this->load->view('pages/client/profile-side/main', $dados);     
        $this->load->view('includes/html_footer_dashboard');

        echo "<script type='text/javascript'>alert('Operação realizada com sucesso');</script>";
   

    }

    public function error(){
        //Metodo para verificar atividade de usuário logado
        $this->verificar_sessao();

        //Carregando o Model responsavel pelo Controller
        $this->load->model('usuario_model', 'usuario');
        $dados['cliente'] = $this->usuario->get_cliente($_SESSION['idUsuario']);

        //Controle para marcar a opção ativa do side menu
        $data['opcaoCliente'] = 'home';

        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_client', $data);
        $this->load->view('pages/client/profile-side/main', $dados);     
        $this->load->view('includes/html_footer_dashboard');

        echo "<script type='text/javascript'>alert('Erro ao realizar Operação');</script>";
    }
    
}