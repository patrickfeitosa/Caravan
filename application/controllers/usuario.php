<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function index() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('pages/client/principal');
        $this->load->view('includes/html_footer');
    }

    public function adicionar_usuario(){
        $data['opcao'] = 'usuarios';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/usuario/adiciona_usuario');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function editar_usuario(){
        $data['opcao'] = 'usuarios';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/usuario/adiciona_usuario');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function excluir_usuario(){
        $data['opcao'] = 'usuarios';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/usuario/adiciona_usuario');
        $this->load->view('includes/html_footer_dashboard');
    }

}
