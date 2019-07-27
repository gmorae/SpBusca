<?php

/**
 *
 * Controlador responsavel por: usuarios
 * @author Gabriel Moraes Martins
 * @link https://github.com/gmorae
 *
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Administrador extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $data['title'] = 'Gerenciamento de empresa ';
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->helper(['url', 'language']);
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
        $this->lang->load('auth');
        $group = 'members';
        if (!$this->ion_auth->in_group($group)) {
            $this->session->set_flashdata('message', 'Acesso negado, cadastre-se para ter o acesso');
            redirect('auth/create_user');
        }
        $this->load->view('common/footer');
        $this->load->view('common/header', $data);
        $this->load->view('common/footer');
        $this->load->model('UsuarioModel', 'model');
        $data['menu'] = $this->model->menu();
        $this->load->view('common/navbar_usuario', $data);
        
    }
    
    public function index()
    {
        $data['titulo'] = $this->model->mostraTitulo();
        $data['card'] = $this->model->card();
        $this->load->view('usuario/card', $data);
    }

    public function cadastro()
    { 
        $this->load->view('anuncie/form');
        $this->model->cadastro();
    }

    public function EditarImagem()
    {
        $data['input'] = $this->model->editarImagem();
        $data['titulo'] = '';
        $this->load->view('usuario/formEditavel', $data);
    }

    public function EditarTitulo()
    {
        $data['input'] = $this->model->editarTitulo();
        $data['titulo'] = 'Editar titulo';
        $this->load->view('usuario/formEditavel', $data);
    }

    public function EditarDescricao()
    {
        $data['input'] = $this->model->editarDescricao();
        $data['titulo'] = 'Editar ';
        $this->load->view('usuario/formEditavel', $data);
    }

    public function EditarRedeSocial()
    {
        $data['input'] = $this->model->editarRedesSocial();
        $data['titulo'] = '';
        $this->load->view('usuario/formEditavel', $data);
    }

    public function EditarSite()
    {
        $id = $this->ion_auth->user()->row()->id;
        $data['input'] = $this->model->editarSite();
        $data['titulo'] = '';
        $this->model->atualizar($id);
        $this->load->view('usuario/formEditavel', $data);
    }
    public function editarDados()
    {
        $id = $this->ion_auth->user()->row()->id;
        $this->model->editarDados($id);
        $this->load->view('auth/create_user');

    }
}
