<?php
class Local_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    public function inserir_local($data) {
        return $this->db->insert('locais', $data);
    }
}