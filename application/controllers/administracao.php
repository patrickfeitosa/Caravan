<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administracao extends CI_Controller {

    public function login() {
        $this->load->view('includes/html_header');
        $this->load->view('pages/admin/admin');
        $this->load->view('includes/html_footer_admin');
    }
    
    public function home() {
        $data['opcao'] = 'home';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main_dashboard');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function extrato(){  
        $data['opcao'] = 'extratos';      
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/extrato');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function clientes(){   
        $data['opcao'] = 'clientes';       
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/cliente');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function locais(){        
        $data['opcao'] = 'locais';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/locais-admin');
        $this->load->view('includes/html_footer_dashboard');
    }
}