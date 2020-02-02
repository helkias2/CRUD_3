<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

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
     
        //chama a model e executando o metodo
        $id = $_SESSION['logger_user']['id'];

        
        $data['litas_de_games'] = $this->games->list($id);
        $data['title'] = 'Games - Sistema de Produtos';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/Games', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
    }

    public function new(){

        $data['title'] = "Games - CodeIgNiter";

        $this->load->view('templates/header');
        $this->load->view('templates/nav-top');
        $this->load->view('pages/form-games');
        $this->load->view('templates/footer');
        $this->load->view('templates/js');
    }

    public function store(){
        
        //Nao preciso passa addslashes do php
        $games = array(
           
            'name' => trim($this->input->post('name')),
            'description' => trim($this->input->post('description')),
            'price' => trim($this->input->post('price')),
            'developer' => trim($this->input->post('developer')),
            'release_date' => $this->input->post('release_date'),
            'user_id' => $_SESSION['logger_user']['id']
        );

        $this->games->store($games);
        
    redirect('/');
    }

    public function edit($id){
        

        $data['game'] = $this->games->show($id);
        $data['title'] = "Games - CodeIgNiter";

        $this->load->view('templates/header');
        $this->load->view('templates/nav-top');
        $this->load->view('pages/form-games', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/js');

    }

    public function update($id){


        $games = array(
            'name' => trim($this->input->post('name')),
            'description' => trim($this->input->post('description')),
            'price' => trim($this->input->post('price')),
            'developer' => trim($this->input->post('developer')),
            'release_date' => $this->input->post('release_date')
        );
        $this->games->update($id, $games);

        redirect('games');
    }

    public function delete($id){

        $this->games->delete($id);

        redirect('games');
    }



}