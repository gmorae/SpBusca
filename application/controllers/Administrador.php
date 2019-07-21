<?php

/**
 *
 * Controlador responsavel por: usuarios
 * @author Gabriel Moraes Martins
 * @link https://github.com/gmorae
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
		$this->load->view('common/footer');
        $id = $this->ion_auth->user()->row()->id;
        $data ['title'] = 'Gerenciamento de empresa ';
        
        $this->load->view('common/header',$data);
        $this->load->view('common/footer');
        $this->load->model('UsuarioModel', 'model');
        //id do usuario
    }
    public function index(){
        $this->load->view('common/navbar_usuario');
        $data ['card'] = $this->model->card();
        $this->load->view('usuario/card', $data);
    }

    public function EditarImagem(){
        
    }

    public function EditarTexto(){
        
    }

    public function EditarDescricao(){
        
    }

    public function EditarRedeSocial(){
        
    }

    public function EditarSite(){
        
    }

}