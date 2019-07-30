<?php

/**
 *
 * Controlador responsavel por: descrição
 * @author Gabriel Moraes Martins
 * @link https://github.com/gmorae
 *
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Adm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(['ion_auth', 'form_validation']);
        $this->lang->load('auth');
        $data['title'] = 'Sistema administrador';
        $this->load->view('common/header', $data);
        $this->load->view('common/footer');
        $this->load->model('AdmModel', 'model');
        $group = 'admin';
        if (!$this->ion_auth->in_group($group)) {
            $this->session->set_flashdata('message', 'Acesso negado');
            redirect('/');
        }
        
    }
    public function index()
    {
        $this->load->view('common/navbar_adm');
        $data['soma'] = $this->model->somaUsuarios();
        $data['mensal'] = $this->model->somaMensal();
        $this->load->view('adm/home', $data);
        
    }

    public function ativar($id)
    { 
        $this->model->ativar($id);
        redirect('auth');
    }

    public function desativar($id)
    { 
        $this->model->desativar($id);
        redirect('auth');
    }
}
