<?php
class Evento_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    //Metodo para inserção de novo evento
    function inserir_evento($data) {
        return $this->db->insert('eventos', $data);
    }

    //Metodo para atualização de evento existente
    function salva_evento($data, $id_evento) {
        $this->db->where('IDEvento', $id_evento);
        return $this->db->update('eventos', $data);
    }

    //Metodo para seleção de todos os eventos cadastrados
    function get_eventos() {
        $this->db->select('*');
        $this->db->from('eventos');
        $this->db->join('locais', 'eventos.IDLocal = locais.IDLocal');
        return $this->db->get()->result();
    }

    //Metodo para seleção de evento com where
    function get_evento($id_evento) {
        $this->db->select('*');
        $this->db->where('IDEvento', $id_evento);
        return $this->db->get('eventos')->result();
    }

    //Metodo para deleção de local
    function deleta_evento($id_evento) {
        $this->db->where('IDEvento', $id_evento);
        return $this->db->delete('eventos');
    }
}