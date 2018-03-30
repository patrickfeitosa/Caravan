<?php

class Saida_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function cadastrar($data) {
        return $this->db->insert('tb_saidas', $data);
    }

    public function salvar_atualizacao($data, $id_saida) {

        $this->db->where('id_saida', $id_saida);
        return $this->db->update('tb_saidas', $data);
    }

    function get_saidas() {
        $this->db->select('*');
        return $this->db->get('tb_saidas')->result();
    }

    function get_saidas_like() {
        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('placa', $termo);
        return $this->db->get('tb_saidas')->result();
    }

    function get_saidas_comodato($termo) {
        $this->db->select('*');
        $this->db->from('tb_saidas');
        $this->db->where('numero_comodato', $termo);
        $this->db->join('tb_veiculos', 'tb_saidas.placa = tb_veiculos.placa');
        $this->db->join('tb_jornalistas', 'tb_saidas.responsavel = tb_jornalistas.jornalista');
        return $this->db->get()->result();
    }

    function get_saidas_interna($id_saida) {
        $this->db->select('*');
        $this->db->from('tb_saidas');
        $this->db->where('id_saida', $id_saida);
        $this->db->join('tb_veiculos', 'tb_saidas.placa = tb_veiculos.placa');
        $this->db->join('tb_jornalistas', 'tb_saidas.responsavel = tb_jornalistas.jornalista');
        return $this->db->get()->result();
    }

    function get_saidas_view() {
        $this->db->select('*');
        $this->db->from('tb_saidas');
        $this->db->join('tb_jornalistas', 'tb_saidas.responsavel = tb_jornalistas.jornalista');
        return $this->db->get()->result();
    }

    function get_saidas_relatorio($where) {
        $this->db->select('*');
        $this->db->from('tb_saidas');
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function cadastrar_anexo($data) {
        return $this->db->insert('tb_anexos', $data);
    }

    public function get_anexos($termo) {
        $this->db->select('*');
        $this->db->from('tb_anexos');
        $this->db->where('id_saida', $termo);
        return $this->db->get()->result();
    }

    public function salvar_anexos($id_saida, $id_anexo, $data) {
        $this->db->where('id_saida', $id_saida);
        $this->db->where('id_anexo', $id_anexo);
        return $this->db->update('tb_anexos', $data);
    }

    public function excluindo_anexo($id_anexo) {
        $this->db->where('id_anexo', $id_anexo);
        $this->db->delete('tb_anexos');
    }

}
