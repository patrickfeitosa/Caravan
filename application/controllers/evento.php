<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {

    public function adicionar_evento(){
        //Carregando o Model responsavel pelos Locais
        $this->load->model('local_model', 'local');
        $dados['locais'] = $this->local->get_locais();

        //Carregandos as Views para fazer a nova inserção
        $data['opcao'] = 'eventos';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/evento/adiciona_evento', $dados);
        $this->load->view('includes/html_footer_dashboard');
    }

    public function editar_evento($IDEvento){
        //Carregando o Model responsavel pelo Controller
        $this->load->model('evento_model', 'evento');
        $dados['eventos'] = $this->evento->get_evento($IDEvento); 
        
        //Carregando o Model responsavel pelos Locais
        $this->load->model('local_model', 'local');
        $dados['locais'] = $this->local->get_locais(); 


        //Controle para marcar a opção ativa do side menu
        $data['opcao'] = 'eventos';

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/evento/edita_evento', $dados);
        $this->load->view('includes/html_footer_dashboard');
    }

    public function salvar_evento(){        
        //Coletando dados do Post
        $data['IDLocal'] = $this->input->post('inputCidade');
        $data['Evento'] = $this->input->post('inputEvento');
        $data['Local_Evento'] = $this->input->post('inputLocal');
        $data['Preco_Evento'] = $this->input->post('inputPrecoEvento');
        $data['Data_Evento'] = $this->input->post('inputDataEvento');

        //Carregando o Model responsavel pelo Controller
        $this->load->model('evento_model', 'evento');


        //Realizando a inserção no banco de dados
        if($this->evento->inserir_evento($data)){
            redirect('administracao/evento/success');
        }else{
            redirect('administracao/evento/error');
        }
    }

    public function salvar_evento_edicao(){        
        //Coletando dados do Post
        $IDEvento = $this->input->post('inputId');
        $data['IDLocal'] = $this->input->post('inputCidade');
        $data['Evento'] = $this->input->post('inputEvento');
        $data['Local_Evento'] = $this->input->post('inputLocal');
        $data['Preco_Evento'] = $this->input->post('inputPrecoEvento');
        $data['Data_Evento'] = $this->input->post('inputDataEvento');

        //Carregando o Model responsavel pelo Controller
        $this->load->model('evento_model', 'evento');


        //Realizando a inserção no banco de dados
        if($this->evento->salva_evento($data, $IDEvento)){
            redirect('administracao/evento/success');
        }else{
            redirect('administracao/evento/error');
        }
    }

    public function excluir_evento($IDEvento){
        //Carregando o Model responsavel pelo Controller
        $this->load->model('evento_model', 'evento');

        //Fazendo validação e redirecionando a rota
        if($this->evento->deleta_evento($IDEvento)){
            redirect('administracao/evento/success');
        }else{
            redirect('administracao/evento/error');
        }
    }

    //Metodos para tratar as mensagens do CRUD    
    public function success(){
        //Carregamento do Model para listar locais na tableView
        $this->load->model('evento_model', 'evento');
        $dados['eventos'] = $this->evento->get_eventos();  

        //Controle para marcar a opção ativa do side menu
        $data['opcao'] = 'eventos';

        //Mensagem
        $data['msg'] = "Operação realizada com Sucesso!";

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);          
        $this->load->view('pages/admin/main/eventos-admin', $dados);   
        $this->load->view('includes/msg_sucesso', $data);   
        $this->load->view('includes/html_footer_dashboard');
    }

    public function error(){
        //Carregamento do Model para listar locais na tableView
        $this->load->model('evento_model', 'evento');
        $dados['eventos'] = $this->evento->get_eventos();  

        //Controle para marcar a opção ativa do side menu
        $data['opcao'] = 'eventos';

        //Mensagem
        $data['msg'] = "Erro ao realizar operação!";

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);          
        $this->load->view('pages/admin/main/eventos-admin', $dados); 
        $this->load->view('includes/msg_erro', $data);   
        $this->load->view('includes/html_footer_dashboard');
    }

}
