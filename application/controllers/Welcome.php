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
		$this->load->view('common/header');
		$this->load->view('common/footer');
	}
	
	public function index()
	{
		$this->load->model('cardModel');
		$data ['card'] = $this->cardModel->exibir();
		$this->load->view('card', $data);
	}
}
