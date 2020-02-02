<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index(){
        //chamada do metodo da model
        $this->load->model('games_model', 'games');
        //chama a model e executando meu metodo lista
        $data['litas_de_games'] = $this->games->list();
        $data['title'] = 'Dashboard - Sistema de Produtos';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav-top', $data);
        $this->load->view('pages/Dashboard', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/js', $data);
        
    }

}