<?php

/**
 *
 * Controlador responsavel por: página de contato
 * @author Gabriel Moraes Martins
 * @link https://github.com/gmorae
 *
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Contato extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->view('common/header');
        $this->load->view('common/footer');
        $this->load->view('common/navbar');
    }

    public function index()
    {

        /**
         * Validação nos campos
         */
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nome', 'nome', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('assunto', 'assunto', 'trim|required');
        $this->form_validation->set_rules('mensagem', 'mensagem', 'trim|required');
        /**
         * Fim Validacoes
         */
        /**
         * Se a validação for correta execulta o email
         */
        if ($this->form_validation->run() == TRUE) {
            /**
             * Pega os campos via POST
             */
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $assunto = $this->input->post('assunto');
            $mensagem = $this->input->post('mensagem');
            /**
             * Configuração para enviar email
             */
            $senha = 'xxxx';
            $host = 'ssl://mail.tocadascoisas.com.br';
            $porta = 465;
            $user = 'atendimento@tocadascoisas.com.br';
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => $host,
                'smtp_user' => $user,
                'smtp_pass' => $senha,
                'smtp_port' => $porta,
                'mailtype'  => 'html',
                'charset'   => 'utf-8',
                'newline' => "\r\n",
            );
            /** 
             * Carrega a biblioteca
             * de email e coloca a configuração
             */
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            /**
             * o email de quem está enviando 
             */
            $this->email->from($email);
            /**
             * Para onde será enviada 
             */
            $this->email->to($user);
            /**
             * Assunto do email
             */
            $this->email->subject($assunto);
            /**
             * Mensagem que será enviada 
             */
            $this->email->message(
                "Nome: " . $nome . "\n\n" .
                    "Email: " . $email . "\n\n" .
                    "Assunto: " . $assunto . "\n\n" .
                    "Mensagem: " . $mensagem . "\n"
            );
            /**
             * Envio do email
             * O campo do botão deve ser submit 
             */
            $this->email->send();
        }
        $this->load->view('contato/form');
    }
}
