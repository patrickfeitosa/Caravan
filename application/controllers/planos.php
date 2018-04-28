<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Planos extends CI_Controller {

    public function index() {
        //Carregando o Model Responsável por alimentar os locais
        $this->load->model('local_model', 'local');

        //Carregando os locais disponíveis
        $data['locais'] = $this->local->get_locais(); 

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('pages/client/planos', $data);
        $this->load->view('includes/html_footer');
    }

}
