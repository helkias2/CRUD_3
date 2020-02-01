<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    public function index(){
        $this->load->model('games_model', 'games');
        $data['litas_de_games'] = $this->games->list();
        $data['title'] = 'Dashboard - Sistema de Produtos';
        $this->load->view('pages/Dashboard', $data);
    }

}