<?php

/**
 *
 * Model responsavel por: descrição
 * @author Gabriel Moraes Martins
 * @link https://github.com/gmorae
 *
 */
defined('BASEPATH') or exit('No direct script access allowed');

class AdmModel extends CI_Model
{

    public function somaUsuarios()
    {
        $sql = "SELECT count(id_card) 
        FROM card";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }

    public function somaMensal()
    {
        $sql = "SELECT count(id_card) * 30,00 
        FROM card";
        $rs = $this->db->query($sql);
        return $rs->result_array()[0];
    }

    public function ativar($id)
    {   
        $sql = "UPDATE  users SET estado_pagamento =  '0' WHERE  users.id = $id";
        $this->db->query($sql);
    }

    public function desativar($id)
    {
        $sql = "UPDATE  users SET estado_pagamento =  '1' WHERE  users.id = $id";
        $this->db->query($sql);
    }
}
