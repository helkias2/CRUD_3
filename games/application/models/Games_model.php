<?php

class Games_model extends CI_Model{

    //Metodo de lista
    public function list($id){
        //result_array = pegar todos os dados da tabela
        // return $this->db->get('tb_games')->result_array();
        return $this->db->get_where('tb_games', array('user_id' => $id))->result_array();
    }

    public function getList($id){
        //result_array = pegar todos os dados da tabela
        // return $this->db->get('tb_games')->result_array();
        return $this->db->get_where('tb_games', array('id' => $id))->row_array();
    }

    //Metodo inserir dados
    public function store( array $games){
        $this->db->insert('tb_games', $games);
    }

    //Metodo de Editar dados
    public function show($id){
        //row_array - retorna linha selecionada
       return $this->db->get_where('tb_games', array('id' => $id))->row_array();

    }
    public function update($id, $games){
        $this->db->where('id', $id);
        return $this->db->update('tb_games', $games);

    }

    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('tb_games');
    }
}