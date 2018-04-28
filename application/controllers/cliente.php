<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function index(){
        //Controle para marcar a opção ativa do side menu
        $data['opcao'] = 'locais';

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_client', $data);    
        $this->load->view('pages/admin/main/pedido');
        $this->load->view('includes/html_footer_dashboard');
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

}