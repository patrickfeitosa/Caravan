<?php

class Veiculo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function cadastrar($data) {

        return $this->db->insert('tb_veiculos', $data);
    }

    public function salvar_atualizacao($data, $id_veiculo) {

        $this->db->where('id_veiculo', $id_veiculo);
        return $this->db->update('tb_veiculos', $data);
    }

    function get_veiculos() {
        $this->db->select('*');
        return $this->db->get('tb_veiculos')->result();
    }

    function get_veiculos_like() {
        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('placa', $termo);

        return $this->db->get('tb_veiculos')->result();
    }

    function get_veiculos_placa($termo) {         
        $this->db->select('*');
        $this->db->where('placa', $termo);    
        return $this->db->get('tb_veiculos')->result();
    }

}
