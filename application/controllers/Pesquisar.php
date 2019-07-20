<?php

/**
 *
 * Controlador responsavel por: Mostrar todas as pesqiosas
 * @author Gabriel Moraes Martins
 * @link https://github.com/gmorae
 *
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Pesquisar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $resultado ['title'] = 'Pesquisa por: '.$this->input->post("resultado");
        $this->load->view('common/header', $resultado);
        $this->load->view('common/navbar');
        $this->load->model('cardModel');
    }
    public function index()
    {
    
        $data['card'] = $this->cardModel->pesquisar();
        $this->load->view('pesquisa', $data);
        $this->load->view('card', $data);
        $this->load->view('common/footer');

    }
}
