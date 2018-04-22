<?php
class Usuario_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    //Metodo para inserção de novo local
    function inserir_usuario($data) {
        return $this->db->insert('usuario', $data);
    }

    //Metodo para atualização de local existente
    function salva_usuario($data, $id_usuario) {
        $this->db->where('IDUsuario', $id_usuario);
        return $this->db->update('usuario', $data);

    }

    //Metodo para seleção de todos os locais cadastrados
    function get_usuarios() {
        $this->db->select('*');
        return $this->db->get('usuario')->result();
    }

    //Metodo para seleção de local com where **IMPLEMENTAR**
    function get_usuario($id_usuario) {
        $this->db->select('*');
        $this->db->where('IDUsuario', $id_usuario);
        return $this->db->get('usuario')->result();
    }

    //Metodo para deleção de local
    function deleta_usuario($id_usuario) {
        $this->db->where('IDUsuario', $id_usuario);
        return $this->db->delete('usuario');
    }
}