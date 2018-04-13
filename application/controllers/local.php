<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Local extends CI_Controller {

    public function index() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('pages/client/local');
        $this->load->view('includes/html_footer');
    }

    public function adicionar_local(){
        $data['opcao'] = 'locais';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/local/adiciona_local');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function salvar_local(){        
        //Coletando dados do Post
        $data['nomePais'] = $this->input->post('inputNome');
        $data['nomeCity'] = $this->input->post('inputCidade');
        $data['precoLocal'] = $this->input->post('inputPreco');

        //Carregando o Model responsavel pelo Controller
        $this->load->model('local_model', 'local');


        //Realizando a inserção no banco de dados
        if($this->local->inserir_local($data)){
            echo 'Local cadastrado com sucesso';
        }else{
            echo 'Deu erro ai carai';
        }
    }

}
