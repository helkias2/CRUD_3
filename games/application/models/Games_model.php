<?php

class Games_model extends CI_Model{

    public function list(){
        return $this->db->get('tb_games')->result_array();
    }

    public function store( array $games){
        print_r($games);
        $this->db->insert('tb_games', $games);
    }

}