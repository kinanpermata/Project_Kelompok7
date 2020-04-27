<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {
    public function data_food(){
        return $this->db->get_where("tb_barang", array('kategori' => 'Food'));
    }

    public function data_snack(){
        return $this->db->get_where("tb_barang", array('kategori' => 'Snack'));
    }

    public function data_kitchen(){
        return $this->db->get_where("tb_barang", array('kategori' => 'Kitchen'));
    }
}

?>