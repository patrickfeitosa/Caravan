<?php

class Usuario_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function cadastrar($data) {

        return $this->db->insert('tb_usuarios', $data);
    }

    public function salvar_atualizacao($data, $id) {

        $this->db->where('id', $id);
        return $this->db->update('tb_usuarios', $data);
    }

    public function salvar_senha($id, $senha_antiga, $senha_nova) {

        $this->db->select('senha');
        $this->db->where('id', $id);
        $data['senha'] = $this->db->get('tb_usuarios')->result();
        $dados['senha'] = $senha_nova;

        if ($data['senha'][0]->senha == $senha_antiga) {
            $this->db->where('id', $id);
            $this->db->update('tb_usuarios', $dados);
            return true;
        } else {

            return false;
        }
    }

    function get_usuarios() {
        $this->db->select('*');
        return $this->db->get('tb_usuarios')->result();
    }

    function get_usuarios_like() {
        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('nome', $termo,'after');

        return $this->db->get('tb_usuarios')->result();
    }

}
