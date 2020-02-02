<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('games_model', 'games');
        $this->load->model('login_model', 'login');
        if($this->login->isLoggout($_SESSION['logger_user']['id']) != FALSE){
            return true;
        }else{
            redirect('login');

        }
    }

    public function index(){
        //chamada do metodo da model

        $id = $_SESSION['logger_user']['id'];

        //chama a model e executando meu metodo lista
        $data['litas_de_games'] = $this->games->list($id);
        $data['title'] = 'Dashboard - Sistema de Produtos';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/Dashboard', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
        
    }

    public function listAjax(){
        $id = $this->input->get('id');
        $this->games->getList($id);
    }

}