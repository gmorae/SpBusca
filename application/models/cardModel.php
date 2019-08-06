<?php

/**
 *
 * Model responsavel por: visualizar
 * @author Gabriel Moraes Martins
 * @link https://github.com/gmorae
 *
 */

class cardModel extends CI_Model
{

  public function exibir()
  {
    $sql = "SELECT *
        FROM card
        INNER JOIN users ON users.id = card.id_usuario and users.estado_pagamento = 0 ORDER BY cadastro asc";
    $rs = $this->db->query($sql);
    $m = $rs->result();
    $html = '';

    foreach ($m as $row) {
      $rua = strtolower($row->rua); //pega o nome
      $ruaa = explode(" ", $rua);  // ve oande tem espaço
      $ruaaa = implode("+", $ruaa); //tira e espaço e coloca +
      $cidade = strtolower($row->cidade);
      $cidadee = explode(" ", $cidade);
      $cidadeee = implode("+", $cidadee);
      $bairro = strtolower($row->bairro);
      $bairroo = explode(" ", $bairro);
      $bairrooo = implode("+", $bairroo);
      $estado = strtolower($row->estado);
      $estadoo = explode(" ", $estado);
      $estadooo = implode("+", $estadoo);
      $html .= '<div class="col-md-4">';
      $html .= "<div class='card my-4'>";
      $html .= "<div class='view overlay zoom'>";
      $html .= "<img class='card-img-top' src='" . base_url('/imagens/empresas/' . $row->imagem . '.png') . "' alt='Card image cap'>
                    </div>";
      $html .= '<div class="card-body">';
      if (empty($row->cidade) && empty($row->estado)) {
        '';
      } else {
        $html .= "<p class='text-right black-text ml-5'><i class='fas fa-map-marker-alt'></i> $row->cidade, $row->estado</p></a>";
      }

      $html .= "<h4 class='card-title' href='#$row->empresa'>$row->empresa</h4>";
      $html .= '<hr>';
      $html .= "<p class='card-text'>$row->descricao</p>";
      $html .= '<div class="text-center">';
      if ($row->whats > 1) {
        $html .= "<a class='px-3 fa-2x tw-ic' href='https://wa.me/55$row->whats' target='_blanck'><i class='fab fa-whatsapp black-text'></i></a>";
      } else {
        '';
      }
      if (empty($row->instagram)) {
        '';
      } else {
        $html .= "<a class='px-3 fa-2x in-ic' href='$row->instagram' target='_blanck' ><i class='fab fa-instagram black-text'></i></a>";
      }
      if (empty($row->facebook)) {
        '';
      } else {
        $html .= "<a class='px-3 fa-2x fb-ic' href='$row->facebook' target='_blanck' ><i class='fab fa-facebook-f black-text'></i></a>";
      }
      if (empty($row->cidade) && empty($row->estado)) {
        '';
      } else {
        $html .= "<a class='px-3 fa-2x tw-ic' data-toggle='modal' data-target='#$row->empresa'><i class='fas fa-map-marker-alt black-text'></i></a>";
      }
      $html .= "</div>";
      $html .= "<div class='text-right mt-3'>";
      if (empty($row->site)) {
        '';
      } else {
        $html .= "<a href='https://$row->site' target='_blanck' class='black-text d-flex justify-content-end'>
        <h5>Visite o site da $row->empresa
        <i class='fas fa-angle-double-right px-2x'></i>
        </h5>
        </a>";
      }
      $html .= '</div>';
      $html .= '</div>';
      $html .= '</div>';
      $html .= '</div>';
      $html .= "<div class='modal fade' id='$row->empresa' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
              aria-hidden='true'>
              <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'><i class='fas fa-map-marker-alt'></i> $row->rua, $row->bairro, $row->numero, $row->cidade, $row->estado</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>
                  <div class='modal-body mx-auto'>
                    <a href='https://maps.google.com?q=$ruaaa%2C+$row->numero+-+$bairrooo%2C+$estadooo+-+SP%2C+Brasil' target='_blanck'>
                        <img src=" . base_url('imagens/maps.png') . " style='width: 100px' class='image-fluid'>
                    </a>
                    
                  </div>
                </div>
              </div>
            </div>";
    }
    return $html;
  }


  public function pesquisar()
  {
    $resultado = $this->input->post("resultado");
    $sql = "SELECT *
        FROM card
        INNER JOIN users ON users.id = card.id_usuario WHERE empresa LIKE '%$resultado%' or descricao LIKE '%$resultado%' or cidade LIKE '%$resultado%' or estado LIKE '%$resultado%' or bairro LIKE '%$resultado%'";
    $rs = $this->db->query($sql);
    $m = $rs->result();
    $html = '';

    foreach ($m as $row) {
      $rua = strtolower($row->rua); //pega o nome
      $ruaa = explode(" ", $rua);  // ve oande tem espaço
      $ruaaa = implode("+", $ruaa); //tira e espaço e coloca +
      $cidade = strtolower($row->cidade);
      $cidadee = explode(" ", $cidade);
      $cidadeee = implode("+", $cidadee);
      $bairro = strtolower($row->bairro);
      $bairroo = explode(" ", $bairro);
      $bairrooo = implode("+", $bairroo);
      $estado = strtolower($row->estado);
      $estadoo = explode(" ", $estado);
      $estadooo = implode("+", $estadoo);
      $html .= '<div class="col-md-4">';
      $html .= "<div class='card my-4'>";
      $html .= "<div class='view overlay zoom'>";
      $html .= "<img class='card-img-top' src='" . base_url('/imagens/empresas/' . $row->imagem . '.png') . "' alt='Card image cap'>
                  </div>";
      $html .= '<div class="card-body">';
      $html .= "<p class='text-right black-text ml-5'><i class='fas fa-map-marker-alt'></i> $row->cidade, $row->estado</p></a>";
      $html .= "<h4 class='card-title' href='#$row->empresa'>$row->empresa</h4>";
      $html .= '<hr>';
      $html .= "<p class='card-text'>$row->descricao</p>";
      $html .= '<div class="text-center">';
      $html .= "<a class='px-3 fa-2x tw-ic' href='https://wa.me/$row->numero' target='_blanck'><i class='fab fa-whatsapp black-text'></i></a>";
      $html .= "<a class='px-3 fa-2x in-ic' href='https://instagram.com/$row->instagram' target='_blanck' ><i class='fab fa-instagram black-text'></i></a>";
      $html .= "<a class='px-3 fa-2x fb-ic' href='https://facebook.com/$row->facebook' target='_blanck' ><i class='fab fa-facebook-f black-text'></i></a>";
      $html .= "<a class='px-3 fa-2x tw-ic' data-toggle='modal' data-target='#rotas$row->id'><i class='fas fa-map-marker-alt black-text'></i></a>";
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
      $html .= "<div class='modal fade' id='rotas$row->id' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
            aria-hidden='true'>
            <div class='modal-dialog' role='document'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='exampleModalLabel'><i class='fas fa-map-marker-alt'></i> $row->cidade, $row->estado</h5>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                <div class='modal-body mx-auto'>
                  <a href='https://maps.google.com?q=$ruaaa%2C+$row->numero+-+$bairrooo%2C+$estadooo+-+SP%2C+Brasil' target='_blanck'>
                      <img src=" . base_url('imagens/maps.png') . " style='width: 100px' class='image-fluid'>
                  </a>
                  <a href='https://waze.com/ul?ll=$ruaaa%2C+578+-+$bairrooo%2C+$estadooo+-+SP%2C+Brasil&navigate=yes' target='_blanck'>
                      <img src=" . base_url('imagens/waze.png') . " style='width: 120px' class='ml-5'>
                  </a>
                </div>
              </div>
            </div>
          </div>";
    }
    return $html;
  }
}
