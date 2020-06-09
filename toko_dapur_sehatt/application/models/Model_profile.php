<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profile extends CI_Model {

    public function edit_user($where,$table){
       return $this->db->get_where($table,$where);
    }

    public function update_user($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    

}

/* End of file Model_profile.php */

?>