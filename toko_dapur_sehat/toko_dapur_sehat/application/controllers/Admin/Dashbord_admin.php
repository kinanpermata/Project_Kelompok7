<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord_admin extends CI_Controller {
    public function index(){
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/Dashbord');
        $this->load->view('templates_admin/footer');
    }
    
}

/* End of file Dashbord_admin.php */

?>