<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model', 'login');

    }

    public function index(){
        
        //chama a model e executando meu metodo lista
        $data['title'] = 'Sign - up - CodeIgniter';
        $this->load->view('pages/login', $data);
        
    }

    public function store(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->login->store($email, $password);
        if($user){
            $this->session->set_userdata('logger_user', $user);
            redirect('dashboard');
        }else{

            redirect('login');
        }
    }

    public function logout(){
        $this->session->unset_userdata("logger_user");
        redirect('login');
    }
    
  

  


}