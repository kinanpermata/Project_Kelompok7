<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_blog extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan' ,'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        
        redirect('Auth/login');
        
        }
    }
    public function index(){
        $data['blog'] = $this->Model_blog->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/Data_blog', $data);
        $this->load->view('templates_admin/footer');
    }
    

    public function tambah_aksi(){
        $nama_blog=$this->input->post('nama_blog');
        $keterangan_blog=$this->input->post('keterangan_blog');
        $kategori_blog=$this->input->post('kategori_blog');
        $gambar_blog=$_FILES['gambar_blog']['name'];
        if ($gambar_blog=''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types']='jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar_blog')){
                echo "Gambar Gagal Diupload! (Format Gambar:jpg/jpeg/png/gif)";
            }else{
                $gambar_blog=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_blog'=>$nama_blog,
            'keterangan_blog'=>$keterangan_blog,
            'kategori_blog'=>$kategori_blog,
            'gambar_blog'=>$gambar_blog

        );

        $this->Model_blog->tambah_blog($data, 'tb_blog');
        redirect('Admin/Data_blog/index');

    }

    public function edit($id){
        $where = array('id_blog' =>$id);
        $data['blog'] = $this->Model_blog->edit_blog($where, 'tb_blog')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/edit_blog', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id = $this->input->post('id_blog');
        $nama_blog = $this->input->post('nama_blog');
        $keterangan_blog = $this->input->post('keterangan_blog');
        $kategori_blog = $this->input->post('kategori_blog');
        
        $data = array(
            'nama_blog' => $nama_blog,
            'keterangan_blog' => $keterangan_blog,
            'kategori_blog' => $kategori_blog
            

        );
        $where = array(
            'id_blog' => $id
        );
        $this->Model_blog->update_data($where,$data, 'tb_blog');
        
        redirect('Admin/Data_blog/index');
        

    }

    public function hapus($id){
        $where = array('id_blog' => $id);
        $this->Model_blog->hapus_data($where, 'tb_blog');

        redirect('Admin/Data_blog/index');
    }
}

/* End of file Data_blog.php */

?>