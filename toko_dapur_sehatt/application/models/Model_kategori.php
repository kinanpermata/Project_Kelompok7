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
    
    public function data_kids(){
        return $this->db->get_where("tb_barang", array('kategori' => 'Kids'));
    }

    public function data_info(){
        return $this->db->get_where("tb_blog", array('kategori_blog' => 'Info'));
    }

    public function data_resep(){
        return $this->db->get_where("tb_blog", array('kategori_blog' => 'Resep'));
    }

    
}

?>