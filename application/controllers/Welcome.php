<?php

/**
 *
 * Controlador responsavel por: descrição
 * @author Gabriel Moraes Martins
 * @link https://github.com/gmorae
 *
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$data ['title'] = 'SpBusca | Home';
        $this->load->view('common/header', $data);
		$this->load->view('common/footer');
		$this->load->view('common/navbar');
		// $this->load->view('botao/subir');
		$this->load->model('CardModel', 'model');
	}
	
	public function index()
	{
		$this->load->view('pesquisa');
		$data ['card']= $this->model->pesquisar();
		$data['card'] = $this->model->exibir();
		$this->load->view('card', $data);
		$this->load->view('common/rodape');
	}
}
