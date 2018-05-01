<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Local extends CI_Controller {

    public function index() {
        //Metodo padrão da classe
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('pages/client/local');
        $this->load->view('includes/html_footer');
    }

    public function adicionar_local(){
        //Carregandos as Views para fazer a nova inserção
        $data['opcao'] = 'locais';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/local/adiciona_local');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function editar_local($IDLocal){
        //Carregando o Model responsavel pelo Controller
        $this->load->model('local_model', 'local');
        $dados['locais'] = $this->local->get_local($IDLocal);  

        //Controle para marcar a opção ativa do side menu
        $data['opcao'] = 'locais';

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/local/edita_local', $dados);
        $this->load->view('includes/html_footer_dashboard');

    }

    public function salvar_local(){        
        //Coletando dados do Post
        $data['nomePais'] = $this->input->post('inputNomePais');
        $data['nomeCity'] = $this->input->post('inputCidade');
        $data['precoLocal'] = $this->input->post('inputPreco');

        //Carregando o Model responsavel pelo Controller
        $this->load->model('local_model', 'local');


        //Realizando a inserção no banco de dados
        if($this->local->inserir_local($data)){
            redirect('administracao/local/success');
        }else{
            redirect('administracao/local/error');
        }
    }

    public function salvar_local_edicao(){        
        //Coletando dados do Post
        $IDLocal = $this->input->post('inputId');
        $data['nomePais'] = $this->input->post('inputNomePais');
        $data['nomeCity'] = $this->input->post('inputCidade');
        $data['precoLocal'] = $this->input->post('inputPreco');

        //Carregando o Model responsavel pelo Controller
        $this->load->model('local_model', 'local');


        //Realizando a inserção no banco de dados
        if($this->local->salva_local($data, $IDLocal)){
            redirect('administracao/local/success');
        }else{
            redirect('administracao/local/error');
        }
    }

    public function excluir_local($IDLocal){
        //Carregando o Model responsavel pelo Controller
        $this->load->model('local_model', 'local');

        //Fazendo validação e redirecionando a rota
        if($this->local->deleta_local($IDLocal)){
            redirect('administracao/local/success');
        }else{
            redirect('administracao/local/error');
        }
    }

    //Metodos para tratar as mensagens do CRUD    
    public function success(){
        //Carregamento do Model para listar locais na tableView
        $this->load->model('local_model', 'local');
        $dados['locais'] = $this->local->get_locais();  

        //Controle para marcar a opção ativa do side menu
        $data['opcao'] = 'locais';

        //Mensagem
        $data['msg'] = "Operação realizada com Sucesso!";

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);          
        $this->load->view('pages/admin/main/locais-admin', $dados);   
        $this->load->view('includes/msg_sucesso', $data);   
        $this->load->view('includes/html_footer_dashboard');
    }

    public function error(){
         //Carregamento do Model para listar locais na tableView
        $this->load->model('local_model', 'local');
        $dados['locais'] = $this->local->get_locais();  

        //Controle para marcar a opção ativa do side menu
        $data['opcao'] = 'locais';

        //Mensagem
        $data['msg'] = "Erro ao realizar operação!";

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);          
        $this->load->view('pages/admin/main/locais-admin', $dados);   
        $this->load->view('includes/msg_erro', $data);   
        $this->load->view('includes/html_footer_dashboard');
    }

    public function visualizar_local($IDLocal){
        
        //Carregando o Model responsavel pelo Controller
        $this->load->model('local_model', 'local');
        echo json_encode($this->local->get_local($IDLocal));  
    }    

}
