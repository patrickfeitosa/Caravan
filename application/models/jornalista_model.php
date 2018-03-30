<?php

class Jornalista_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function cadastrar($data) {

        return $this->db->insert('tb_jornalistas', $data);
    }

    public function salvar_atualizacao($data, $id_jornalista) {

        $this->db->where('id_jornalista', $id_jornalista);
        return $this->db->update('tb_jornalistas', $data);
    }

    public function salvar_senha($id_jornalista, $senha_antiga, $senha_nova) {

        $this->db->select('senha');
        $this->db->where('id_jornalista', $id_jornalista);
        $data['senha'] = $this->db->get('tb_jornalistas')->result();
        $dados['senha'] = $senha_nova;

        if ($data['senha'][0]->senha == $senha_antiga) {
            $this->db->where('id_jornalista', $id_jornalista);
            $this->db->update('tb_jornalistas', $dados);
            return true;
        } else {

            return false;
        }
    }

    function get_jornalistas() {
        $this->db->select('*');
        return $this->db->get('tb_jornalistas')->result();
    }

    function get_jornalistas_like() {
        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('jornalista', $termo);
        return $this->db->get('tb_jornalistas')->result();
    }

    function get_jornalistas_nome($termo) {
        $this->db->select('*');
        $this->db->where('jornalista', $termo);
        return $this->db->get('tb_jornalistas')->result();
    }

}
