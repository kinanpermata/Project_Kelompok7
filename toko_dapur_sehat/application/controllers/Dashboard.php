<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $data['barang'] = $this->Model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('Dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id){
        $barang = $this->Model_barang->find($id);
        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg

    );

    $this->cart->insert($data);

    redirect('Dashboard');

    }

    public function detail_keranjang(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('Dashboard/index');
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

    public function detail($id_brg)
    {
        $data['barang'] = $this->Model_barang->detail_barang($id_brg);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }

}

/* End of file Controllername.php */

?>