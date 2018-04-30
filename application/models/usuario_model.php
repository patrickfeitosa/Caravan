<?php
class Usuario_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    //Metodo para inserção de novo usuário
    function inserir_usuario($data) {
        return $this->db->insert('usuario', $data);
    }

    //Metodo para atualização de usuário existente
    function salva_usuario($data, $id_usuario) {
        $this->db->where('IDUsuario', $id_usuario);
        return $this->db->update('usuario', $data);

    }

    //Metodo para seleção de todos os usuários cadastrados
    function get_usuarios() {
        $this->db->select('*');
        $this->db->where('flg_admin', 'true');
        return $this->db->get('usuario')->result();
    }

    //Metodo para seleção de local com where
    function get_usuario($id_usuario) {
        $this->db->select('*');
        $this->db->where('IDUsuario', $id_usuario);
        return $this->db->get('usuario')->result();
    }

    //Metodo para deleção de usuário
    function deleta_usuario($id_usuario) {
        $this->db->where('IDUsuario', $id_usuario);
        return $this->db->delete('usuario');
    }

    //Metodo para seleção de todos os clientes

    function get_clientes(){
        $this->db->select('*');
        $this->db->where('flg_admin', 'false');
        return $this->db->get('usuario')->result();
    }

    function get_cliente($id_usuario){
        $this->db->select('*');
        $this->db->where('IDUsuario', $id_usuario);
        return $this->db->get('usuario')->result();
    }
}