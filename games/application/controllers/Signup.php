<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('users_model', 'users');

    }

    public function index(){
        
        //chama a model e executando meu metodo lista

        $data['title'] = 'Sign - up - CodeIgniter';

        $this->load->view('pages/signup', $data);
        
    }

    public function store(){
            $user = array(
                'name' => $this->input->post('name'),
                'country' => $this->input->post('country'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password'))
            );

        $this->users->store($user);

        redirect('login');
    }


}