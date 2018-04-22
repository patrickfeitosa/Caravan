<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    /* Metodo para controle de acesso */
    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('administracao');
        }
    }

    //Metodo principal
    public function index() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('pages/client/principal');
        $this->load->view('includes/html_footer');
    }

    //Metodo para inserir novo usuario
    public function adicionar_usuario(){
        $this->verificar_sessao();

        $data['opcao'] = 'usuarios';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/usuario/adiciona_usuario');
        $this->load->view('includes/html_footer_dashboard');
    }

    //Metodo para carregar View de edição
    public function editar_usuario($IDUsuario){
        $this->verificar_sessao();

        //Carregando o Model responsavel pelo Controller
        $this->load->model('usuario_model', 'usuario');
        $dados['usuario'] = $this->usuario->get_usuario($IDUsuario);  

        //Controle para marcar a opção ativa do side menu
        $data['opcao'] = 'usuarios';

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/usuario/edita_usuario', $dados);
        $this->load->view('includes/html_footer_dashboard');
    }

    //Metodo para exclusão de usuário
    public function excluir_usuario($IDUsuario){
        $this->verificar_sessao();

        //Carregando o Model responsavel pelo Controller
        $this->load->model('usuario_model', 'usuario');

        //Fazendo validação e redirecionando a rota
        if($this->usuario->deleta_usuario($IDUsuario)){
            redirect('administracao/usuario/success');
        }else{
            redirect('administracao/usuario/error');
        }
    }

    //Metodo para salvar novo usuario
    public function salvar_usuario(){
        $this->verificar_sessao();

        //Coletando dados do Post
        $data['Nome'] = $this->input->post('inputNome');
        $data['Cpf'] = $this->input->post('inputCPF');
        $data['Email'] = $this->input->post('inputEmail');
        $data['Senha'] = $this->input->post('inputSenha');
        $data['Endereco'] = $this->input->post('inputEndereco');
        $data['Cidade'] = $this->input->post('inputCidade');
        $data['Estado'] = $this->input->post('inputEstado');
        $data['CEP'] = $this->input->post('inputCEP');
        $data['flg_admin'] = "true";

        //Carregando o Model responsavel pelo Controller
        $this->load->model('usuario_model', 'usuario');


        //Realizando a inserção no banco de dados
        if($this->usuario->inserir_usuario($data)){
            redirect('administracao/usuario/success');
        }else{
            redirect('administracao/usuario/error');
        }
    }

    //Metodo para salvar edição
    public function salvar_usuario_edicao(){
        $this->verificar_sessao();
        
        $id_usuario = $this->input->post('IDUsuario');
        
        //Coletando dados do Post
        $data['Nome'] = $this->input->post('inputNome');
        $data['Cpf'] = $this->input->post('inputCPF');
        $data['Email'] = $this->input->post('inputEmail');
        $data['Senha'] = $this->input->post('inputSenha');
        $data['Endereco'] = $this->input->post('inputEndereco');
        $data['Cidade'] = $this->input->post('inputCidade');
        $data['Estado'] = $this->input->post('inputEstado');
        $data['CEP'] = $this->input->post('inputCEP');
        $data['flg_admin'] = "true";

        //Carregando o Model responsavel pelo Controller
        $this->load->model('usuario_model', 'usuario');


        //Realizando a inserção no banco de dados
        if($this->usuario->salva_usuario($data, $id_usuario)){
            redirect('administracao/usuario/success');
        }else{
            redirect('administracao/usuario/error');
        }
        
    }


    //Metodos para tratar as mensagens do CRUD
    public function success(){
        //Carregamento do Model para listar usuários na tableView
        $this->load->model('usuario_model', 'usuario');
        $dados['usuarios'] = $this->usuario->get_usuarios();  

        //Controle para marcar a opção ativa do side menu
        $data['opcao'] = 'usuarios';

        //Mensagem
        $data['msg'] = "Operação realizada com Sucesso!";

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);          
        $this->load->view('pages/admin/main/usuario', $dados);   
        $this->load->view('includes/msg_sucesso', $data);   
        $this->load->view('includes/html_footer_dashboard');
    }

    public function error(){
        //Carregamento do Model para listar usuários na tableView
        $this->load->model('usuario_model', 'usuario');
        $dados['usuarios'] = $this->usuario->get_usuarios();   

        //Controle para marcar a opção ativa do side menu
        $data['opcao'] = 'usuarios';

        //Mensagem
        $data['msg'] = "Erro ao realizar operação!";

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);          
        $this->load->view('pages/admin/main/usuario', $dados);  
        $this->load->view('includes/msg_erro', $data);   
        $this->load->view('includes/html_footer_dashboard');
    }
}
