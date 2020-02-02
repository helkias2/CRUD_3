<?php

class Login_model extends CI_Model{

    public function store($email, $password){

        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        return $this->db->get('tb_users')->row_array();
    }

    public function isLoggout($id){
        $this->db->where('id', $id);
        $rult = $this->db->get('tb_users')->result();
        if($rult){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}