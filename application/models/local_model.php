<?php
class Local_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    //Metodo para inserção de novo local
    function inserir_local($data) {
        return $this->db->insert('locais', $data);
    }

    //Metodo para atualização de local existente
    function salva_local($data, $id_local) {
        $this->db->where('IDLocal', $id_local);
        return $this->db->update('locais', $data);
    }

    //Metodo para seleção de todos os locais cadastrados
    function get_locais() {
        $this->db->select('*');
        return $this->db->get('locais')->result();
    }

    //Metodo para seleção de local com where **IMPLEMENTAR**
    function get_local($id_local) {
        $this->db->select('*');
        $this->db->where('IDLocal', $id_local);
        return $this->db->get('locais')->result();
    }

    //Metodo para deleção de local
    function deleta_local($id_local) {
        $this->db->where('IDLocal', $id_local);
        return $this->db->delete('locais');
    }
}