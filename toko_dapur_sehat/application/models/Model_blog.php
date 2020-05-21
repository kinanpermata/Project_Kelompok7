<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_blog extends CI_Model {

    public function tampil_data(){
        return $this->db->get('tb_blog');
    }

    public function tambah_blog($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_blog($where,$table){
       return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id){
        $result = $this->db->where('id_blog', $id)
                        ->limit(1)
                        ->get('tb_blog');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_blog($id_blog)
    {
        $result =$this->db->where('id_blog', $id_blog)->get('tb_blog');
        if($result->num_rows() > 0){
            return $result->result();
        } else{
            return false;
        }
    }
}

/* End model_barang.php */

?>