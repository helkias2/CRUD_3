<?php

class Users_model extends CI_Model{

    //Metodo de lista
    // public function store(){
        //result_array = pegar todos os dados da tabela
        // return $this->db->get('tb_games')->result_array();
    // }

    // //Metodo inserir dados
    public function store( array $games){
        $this->db->insert('tb_users', $games);
    }

    // //Metodo de Editar dados
    // public function show($id){
    //     //row_array - retorna linha selecionada
    //    return $this->db->get_where('tb_games', array('id' => $id))->row_array();

    // }
    
}