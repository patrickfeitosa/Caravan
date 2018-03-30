<?php

class Veiculo_comunicacao_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    public function cadastrar($data){

                return $this->db->insert('tb_veiculos_comunicacao',$data);
  
                }
                
  
                
    public function salvar_atualizacao($data,$id_veiculo_comunicacao){

                  $this->db->where('id_veiculo_comunicacao',$id_veiculo_comunicacao);
               return $this->db->update('tb_veiculos_comunicacao',$data);
                 
                }
   
     function get_veiculos_comunicacao(){
          $this->db->select('*');
           return $this->db->get('tb_veiculos_comunicacao')->result();
}
  function get_veiculos_comunicacao_like(){
      $termo = $this->input->post('pesquisar');
          $this->db->select('*');
          $this->db->like('nome',$termo);
          
           return $this->db->get('tb_veiculos_comunicacao')->result();
     }
     
     
}
