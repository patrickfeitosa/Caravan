<?php

class Manutencao_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function cadastrar($data) {

        return $this->db->insert('tb_manutencaos', $data);
    }

    public function salvar_atualizacao($data, $id_manutencao) {

        $this->db->where('id_manutencao', $id_manutencao);
        return $this->db->update('tb_manutencaos', $data);
    }

    function get_manutencaos() {
        $this->db->select('*');
        return $this->db->get('tb_manutencaos')->result();
    }

    function get_manutencaos_like() {
        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('placa', $termo);

        return $this->db->get('tb_manutencaos')->result();
    }
    
    
    function get_manutecoes_relatorio($where) {
        $this->db->select('*');
        $this->db->from('tb_manutencaos');
        $this->db->where($where);
        return $this->db->get()->result();
    }

}
