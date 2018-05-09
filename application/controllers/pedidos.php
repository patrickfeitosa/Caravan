<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

    //Metodo para verificação de conta logada do Usuário
    public function verificar_sessao(){
        if ($this->session->userdata('logadoUsuario') == false) {
            redirect('login');
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
        $this->verificar_sessao();

        $idCidade = $this->input->post('inputCidades');
        $precoLocal = str_replace(',','.',preg_replace('#[^\d\,]#is','', $this->input->post('precoLocal')));
        $tipoPlano = $this->input->post('tipoPlano');
        $nomeCity = $this->input->post('nomeCidade');

        //Verificação se já existe a variavel criado na Sessão
        if(isset($_SESSION['itensCarrinho'])){
            $itenCarrinhoId = array_column($_SESSION['itensCarrinho'], 'idCidade');

            if(!in_array($idCidade, $itenCarrinhoId)){
                $contador = count($_SESSION['itensCarrinho']);

                $item_selecionado = array(
                'idCidade' => $idCidade,
                'precoLocal' => $precoLocal,
                'tipoPlano' => $tipoPlano,
                'nomeCidade' => $nomeCity
                );
    
                $_SESSION['itensCarrinho'][$contador] = $item_selecionado;
            } else {
                echo "<script>alert('Local já adicionado')</script>";
            }

        } else {
            $item_selecionado = array(
            'idCidade' => $idCidade,
            'precoLocal' => $precoLocal,
            'tipoPlano' => $tipoPlano,
            'nomeCidade' => $nomeCity
            );

            $_SESSION['itensCarrinho'][0] = $item_selecionado;
        }
        echo var_dump($_SESSION['itensCarrinho'][0]);
    }
}