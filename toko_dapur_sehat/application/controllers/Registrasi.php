<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

    public function index()
    {

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('Register_form');
            $this->load->view('templates_admin/footer');
        } else {
           $nama        = $this->input->post('nama');
           $username    = $this->input->post('username');
           $password    = $this->input->post('password_1');
           $role_id     = '2';

           $data = array (
               'nama'       => $nama,
               'username'   => $username,
               'password'   => $password,
               'role_id'    => $role_id
           );

           $this->db->insert('tb_user', $data);
           $this->session->set_flashdata('pesan' ,'<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Register, Silahkan Login!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        
            redirect ('Auth/login');
        }

    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama', 'required', ['required' => 'Nama Wajib Diisi!']);
        $this->form_validation->set_rules('username','Username', 'required', ['required' => 'Username Wajib Diisi!']);
        $this->form_validation->set_rules('password_1','Password', 'required|matches[password_2]', ['required' => 'Password Wajib Diisi!', 'matches' => 'Password Tidak Cocok!']);
        $this->form_validation->set_rules('password_2','Password', 'required|matches[password_1]');
    }
}

/* End of file Register.php */

?>