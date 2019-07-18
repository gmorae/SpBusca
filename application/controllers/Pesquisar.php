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
        $this->load->view('common/header');
        $this->load->view('common/footer');
        $this->load->view('common/navbar');
        $this->load->model('cardModel');
    }
    public function index()
    {
        $data['card'] = $this->cardModel->pesquisar();
        $this->load->view('pesquisa', $data);
        $this->load->view('card', $data);
    }
}
