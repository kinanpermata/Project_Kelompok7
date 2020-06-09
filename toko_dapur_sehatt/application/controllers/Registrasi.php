<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

    public function index()
    {

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('Register_form');
            $this->load->view('templates/footer');
        } else {
           $nama        = $this->input->post('nama');
           $username    = $this->input->post('username');
           $password    = $this->input->post('password_1');
           $alamat    = $this->input->post('alamat');
           $notelp    = $this->input->post('notelp');
           $email    = $this->input->post('email');
           $role_id     = '2';
           $gambar=$_FILES['gambar']['name'];
                if ($gambar=''){}else{
                    $config ['upload_path'] = './uploads';
                    $config ['allowed_types']='jpg|jpeg|png|gif';

                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('gambar')){
                        echo "Gambar Gagal Diupload! (Format Gambar:jpg/jpeg/png/gif)";
                    }else{
                        $gambar=$this->upload->data('file_name');
                    }
                }

           $data = array (
               'nama'       => $nama,
               'username'   => $username,
               'password'   => $password,
               'alamat'   => $alamat,
               'email'   => $email,
               'notelp'   => $notelp,
               'gambar'   => $gambar,
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
        $this->form_validation->set_rules('alamat','Alamat', 'required', ['required' => 'Alamat Wajib Diisi!']);
        $this->form_validation->set_rules('notelp','No Telpon', 'required', ['required' => 'No Telpon Wajib Diisi!']);
        $this->form_validation->set_rules('email','Email', 'required', ['required' => 'Email Wajib Diisi!']);
        $this->form_validation->set_rules('password_1','Password', 'required|matches[password_2]', ['required' => 'Password Wajib Diisi!', 'matches' => 'Password Tidak Cocok!']);
        $this->form_validation->set_rules('password_2','Password', 'required|matches[password_1]');
    }
}

/* End of file Register.php */

?>