<?php

/**
 *
 * Controlador responsavel por: descrição
 * @author Gabriel Moraes Martins
 * @link https://github.com/gmorae
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller{

    public function index(){
        $this->load->view('common/header');
        $this->load->view('common/footer');
    }

}