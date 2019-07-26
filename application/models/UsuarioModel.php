<?php

/**
 *
 * Model responsavel por: descrição
 * @author Gabriel Moraes Martins
 * @link https://github.com/gmorae
 *
 */
defined('BASEPATH') or exit('No direct script access allowed');

class UsuarioModel extends CI_Model
{

    public function menu()
    {

        $id = $this->ion_auth->user()->row()->id;
        $sql = "SELECT * from card INNER JOIN users ON users.id = card.id_usuario and users.id = $id";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            if ($row->id_usuario != $id) {
                $html .= "<li class='nav-item'>
                            <a class='nav-link waves-effect waves-light' href='" . base_url('administrador/cadastro') . "'>
                                <button class='btn btn-outline-white btn-sm my-0' type='submit'>cadastrar empresa<i class='far fa-building'></i></button>
                            </a>
                        </li>";
            } else {
                $html .= "";
            }
        }
        return $html;
    }

    public function verifica()
    {
        $id = $this->ion_auth->user()->row()->id;
        $sql = "SELECT * from users";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $php = '';
        foreach ($m as $row) {
            if ($row->estado_publicado == '0') {
                $php .= redirect('administrador/cadastro');
            } else {
                $php .= redirect('administrador');
            }
        }
        return $php;
    }

    private function nome_arquivo($nomeImagem)
    {

        $n = strtolower($nomeImagem); //pega o nome do usuario
        $v = explode(" ", $n);  // ve oande tem espaço
        $s = implode("_", $v); //tira e espaço e coloca _ 
        return $s . '_' . date('dmy'); // retorna nome_do_usuario e a data atual com o horario
    }

    public function cadastro()
    {
        if (!sizeof($_POST)) return;
        $empresa = $this->input->post("empresa");
        $descricao = $this->input->post("descricao");
        $whatsapp = $this->input->post("whatsapp");
        $facebook = $this->input->post("facebook");
        $instagram = $this->input->post("instagram");
        $site = $this->input->post("site");
        $id_usuario = $this->ion_auth->user()->row()->id;
        $nomeImagem = $this->input->post('nomeImagem'); //pega o nome que o usuario colocou no formulario 
        $nome_arquivo = $this->nome_arquivo($nomeImagem); // pega o nome e coloca n=em uma variavel
        $config['upload_path']          = './imagens/empresas/'; //caminho de onde vai o arquivo
        $config['allowed_types']        = 'png'; // Tipos dos arquivos gif|jpg|png
        $config['max_size']             = 5000; // tamanho em quilobites
        $config['file_name']            = $nome_arquivo . '.png'; // nome que o arquivo vai ficar .png
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('arquivo')) {
            echo 'arquivo enviado com sucesso';
        } else {
            echo 'arquivo não enviado';
        }
        $sql = "INSERT INTO card(id_usuario,empresa,descricao ,facebook, instagram, site, imagem) 
        VALUES ('$id_usuario','$empresa', '$descricao', '$facebook', '$instagram', '$site', '$nome_arquivo')";
        $this->db->query($sql);
        $update = "UPDATE  users SET last_name =  '1' WHERE  users.id = $id_usuario";
        $this->db->query($update);
        redirect('administrador'); 
    }
    public function mostraTitulo()
    {
        $id = $this->ion_auth->user()->row()->id;
        $sql = "SELECT estado_publicacao from card INNER JOIN users ON users.id = card.id_usuario and users.id = $id";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            if ($row->estado_publicacao == '0') {
                $html .= "<div class='row'>
                            <div class='col-6'>
                                <div class='text-center'>
                                    <p class='h3'>
                                        Conteúdos editáveis
                                    </p>
                                </div>
                            </div>
                            <div class='col-6'>
                                <div class='text-center'>
                                    <p class='h3'>
                                        Conteúdo publicado
                                    </p>
                                </div>
                            </div>
                        </div>";
            } else {
                $html .= "<div class='text-center'>
                            <p class='h3'>
                                Cadastre sua empresa
                            </p>
                        </div>";
            }
        }
        return $html;
    }
    public function card()
    {
        $id = $this->ion_auth->user()->row()->id;
        $sql = "SELECT *
            FROM card
            INNER JOIN users ON users.id = card.id_usuario
            and users.id = $id";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<div class='card my-4'>";
            $html .= "<div class='view overlay zoom'>";
            $html .= "<img class='card-img-top' src='".base_url('imagens/empresas/'.$row->imagem.'.png')."' alt='Card image cap'>
                    </div>";
            $html .= '<div class="card-body">';
            $html .= "<h4 class='card-title' href='#$row->empresa'>$row->empresa</h4><hr>";
            $html .= "<p class='card-text'>$row->descricao</p>";
            $html .= '<div class="text-center">';
            $html .= "<a class='px-3 fa-2x tw-ic' href='https://wa.me/$row->numero'><i class='fab fa-whatsapp black-text'></i></a>";
            $html .= "<a class='px-3 fa-2x in-ic' href='https://instagram.com/$row->instagram' ><i class='fab fa-instagram black-text'></i></a>";
            $html .= "<a class='px-3 fa-2x fb-ic' href='https://facebook.com/$row->facebook' ><i class='fab fa-facebook-f black-text'></i></a>";
            $html .= "</div>";
            $html .= "<div class='text-right mt-3'>";
            $html .= "<a href='https://$row->site' target='_blanck' class='black-text d-flex justify-content-end'>
                            <h5>Visite o site da $row->empresa
                                <i class='fas fa-angle-double-right px-2x'></i>
                            </h5>
                        </a>";
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }
        return $html;
    }

    public function editarImagem()
    { }

    public function editarTitulo()
    {
        $id = $this->ion_auth->user()->row()->id;
        $sql = "SELECT *
            FROM card
            INNER JOIN users ON users.id = card.id_usuario
            and users.id = $id";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<div class='md-form'>
                        <input type='text' id='form1' class='form-control' value='$row->empresa' placeholder='Nome da empresa   '>
                    </div>";
        }
        return $html;
    }

    public function editarDescricao()
    { }

    public function editarRedesSocial()
    { }

    public function editarSite()
    { }

    public function editarDados()
    { }
}
