<?php

class Multa_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function cadastrar($data) {

        return $this->db->insert('tb_multas', $data);
    }

    public function salvar_atualizacao($data, $id_multa) {

        $this->db->where('id_multa', $id_multa);
        return $this->db->update('tb_multas', $data);
    }

    function get_multas() {
        $this->db->select('*');
        return $this->db->get('tb_multas')->result();
    }

    function get_multas_like() {
        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('placa', $termo);

        return $this->db->get('tb_multas')->result();
    }

    function get_multas_relatorio($where) {
        $this->db->select('*');
        $this->db->from('tb_multas');
        $this->db->where($where);
        return $this->db->get()->result();
    }

}
