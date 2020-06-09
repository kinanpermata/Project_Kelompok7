<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan' ,'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        
        redirect('Auth/login');
        
        }
    }

    public function tambah_ke_keranjang($id){
        $barang = $this->Model_barang->find($id);
        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg);

    $this->cart->insert($data);

    redirect('Dashboard/detail_keranjang');

    }

    public function detail_keranjang(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('Dashboard_akhir');
    }

    public function pembayaran(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan(){
        $is_processed = $this->Model_invoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else{
            echo "Maaf, Pesanan Anda Gagal diproses!";
        }
    }

    public function transaksi()
    {
        $cus = $this->session->userdata('username');
        $data['transaksi'] = $this->db->query("select * from tb_invoice cs 
        where cs.nama='$cus' order by cs.id desc")->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('transaksi', $data);
        $this->load->view('templates/footer');

    }

    public function detail_transaksi($id)
    {
        $cus = $this->session->userdata('username');
        $data['transaksi']= $this->db->query("select * from tb_pesanan ps, tb_invoice cs 
        where ps.id_invoice = $id 
        and cs.nama='$cus'")->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_transaksi', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $cus = $this->session->userdata('username');
        $data['profile'] = $this->db->query("select * from tb_user us 
        where us.username='$cus'")->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('profile', $data);
        $this->load->view('templates/footer');
    }

    public function edit_profile($id)
    {
        $where = array('id' =>$id);
        $data['profile'] = $this->Model_profile->edit_user($where, 'tb_user')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_profile', $data);
        $this->load->view('templates/footer');
    }

    public function update_profile(){
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $notelp = $this->input->post('notelp');
            $email = $this->input->post('email');
            $gambar=$_FILES['gambar']['name'];
            if ($gambar){
                $config ['upload_path'] = './uploads';
            $config ['allowed_types']='jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar')){
                    echo "Gambar Gagal Diupload! (Format Gambar:jpg/jpeg/png/gif)";
                }else{
                    $gambar=$this->upload->data('file_name');
                }
            }
            
            $data = array(
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'notelp' => $notelp,
                'email' => $email,
                'gambar' => $gambar
            );
            $where = array(
                'id' => $id
            );
            $this->Model_profile->update_user($where,$data,'tb_user');
            
            redirect('Dashboard/profile');
    }   

    

}

/* End of file Controllername.php */

?>