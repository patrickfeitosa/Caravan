<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administracao extends CI_Controller {

    public function login() {
        $this->load->view('includes/html_header');
        $this->load->view('pages/admin/main/admin');
        $this->load->view('includes/html_footer_admin');
    }
    
    public function home() {
        $data['opcao'] = 'home';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/main_dashboard');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function extrato(){  
        $data['opcao'] = 'extratos';      
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/extrato');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function clientes(){   
        $data['opcao'] = 'clientes';       
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/cliente');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function usuarios(){   
        $data['opcao'] = 'usuarios';       
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/usuario');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function locais(){        
        $data['opcao'] = 'locais';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/locais-admin');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function eventos(){        
        $data['opcao'] = 'eventos';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/eventos-admin');
        $this->load->view('includes/html_footer_dashboard');
    }

    public function pedidos(){        
        $data['opcao'] = 'pedidos';
        $this->load->view('includes/html_header');
        $this->load->view('includes/html_sidebar_admin', $data);
        $this->load->view('pages/admin/main/pedido');
        $this->load->view('includes/html_footer_dashboard');
    }
}