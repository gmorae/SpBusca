<?php

/**
 *
 * Model responsavel por: 
 * @author Gabriel Moraes Martins
 * @link https://github.com/gmorae
 *
 */

class cardModel extends CI_Model
{
    public $table = 'card';
    public $id_table = 'id_card';


    public function inserir()
    { }

    public function exibir()
    {
        $sql = "SELECT * FROM card";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= '<div class="col-md-4">';
            $html .= "<div class='card mt-5'>";
            $html .= "<div class='view overlay zoom'>";
            $html .= "<img class='card-img-top' src='https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg' alt='Card image cap'>
                    </div>";
            $html .= '<div class="card-body">';
            $html .= "<h4 class='card-title'>$row->empresa</h4><hr>";
            $html .= "<p class='card-text'>$row->descricao</p>";
            $html .= '<div class="text-center">';
            $html .= "<a class='px-3 fa-2x tw-ic' href='https://wa.me/$row->numero'><i class='fab fa-whatsapp black-text'></i></a>";
            $html .= "<a class='px-3 fa-2x in-ic' href='https://instagram.com/$row->instagram' ><i class='fab fa-instagram black-text'></i></a>";
            $html .= "<a class='px-3 fa-2x fb-ic' href='https://facebook.com/$row->facebook' ><i class='fab fa-facebook-f black-text'></i></a>";
            $html .= "</div>";
            $html .= "<div class='text-right mt-3'>";
            $html .= "<a href='https://$row->site' target='_blanck' class='black-text d-flex justify-content-end'>
                        <h5>Site 
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
}
