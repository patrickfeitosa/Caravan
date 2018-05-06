<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

    //Metodo para verificação de conta logada do Usuário
    public function verificar_sessao(){
        if ($this->session->userdata('logadoUsuario') == false) {
            redirect('principal');
        }
    }

    //Metodo para inicio de Carrinho
    public function carrinho(){
        $this->verificar_sessao();

        //Carregando o Model responsavel pelo Controller
        $this->load->model('usuario_model', 'usuario');
        $dados['cliente'] = $this->usuario->get_cliente($_SESSION['idUsuario']);

        //Carregando as Views
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('pages/client/carrinho', $dados);
        $this->load->view('includes/html_footer');

    }

    public function adiciona_carrinho(){
        $data['idCidade'] = $this->input->post('inputCidades');
        $data['precoLocal'] = $this->input->post('precoLocal');

        $_SESSION['itensCarrinho'] = $data;

        echo var_dump($_SESSION['itensCarrinho']['precoLocal']);
    }
}