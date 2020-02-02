<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

    public function index(){
        //chamada do metodo da model
        $this->load->model('games_model', 'games');
        //chama a model e executando o metodo
        $data['litas_de_games'] = $this->games->list();
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

        print_r($_POST);

  

        $games = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price'),
            'developer' => $this->input->post('developer'),
            'release_date' => $this->input->post('release_date')
        );
        $this->load->model('games_model', 'games');
        $this->games->store($games);
        
    redirect('/');
    }



}