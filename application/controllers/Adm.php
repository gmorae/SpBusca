<?php

/**
 *
 * Controlador responsavel por: descrição
 * @author Gabriel Moraes Martins
 * @link https://github.com/gmorae
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library(['ion_auth', 'form_validation']);
        $this->lang->load('auth');
        $data ['title'] = 'Sistema administrador';
        $this->load->view('common/header', $data);
        $this->load->view('common/footer');
        $this->load->model('AdmModel', 'model');
    }
    public function index(){
        $this->load->view('common/navbar_adm');
        $data ['soma'] = $this->model->somaUsuarios();
        $data ['mensal'] = $this->model->somaMensal();
        $this->load->view('adm/home', $data);
    }


}