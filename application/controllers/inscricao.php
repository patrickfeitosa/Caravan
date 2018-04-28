<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inscricao extends CI_Controller {

    public function index() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('pages/client/inscricao');
        $this->load->view('includes/html_footer');
    }

    //Metodos para tratar as mensagens do CRUD
    public function success(){
        //Mensagem
        $data['msg'] = "Operação realizada com Sucesso!";

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('includes/msg_sucesso_inscricao', $data);
        $this->load->view('includes/html_footer');
    }

    public function error(){
        //Mensagem
        $data['msg'] = "Erro ao realizar operação!";

        //Carregando as views
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('includes/msg_erro_inscricao', $data);
        $this->load->view('includes/html_footer');
    }

}
