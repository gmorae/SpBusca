<?php

/**
 *
 * Controlador responsavel por: descrição
 * @author Gabriel Moraes Martins
 * @link https://github.com/gmorae
 *
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Anuncie extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $data['title'] = 'SpBusca | Anuncie sua empresa';
        $this->load->view('common/header', $data);
        $this->load->view('common/footer');
        $this->load->view('common/navbar');
        $this->load->model('');
    }

    public function index()
    {
        $this->load->view('anuncie/titulo');
        $this->load->view('common/rodape');
    }
    
}
