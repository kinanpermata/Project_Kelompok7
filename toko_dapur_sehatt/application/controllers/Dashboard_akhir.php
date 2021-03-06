<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_akhir extends CI_Controller {

    public function index()
    {
        $data['barang'] = $this->Model_barang->tampil_data()->result();
        $data['blog'] = $this->Model_blog->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
    public function Produk()
    {
        $data['barang'] = $this->Model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('produk', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_brg)
    {
        $data['barang'] = $this->Model_barang->detail_barang($id_brg);
       
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }

    public function Blog(){
        $data['blog'] = $this->Model_blog->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('data_blog', $data);
        $this->load->view('templates/footer');
    }
    public function detail_blog($id_blog)
    {
        $data['blog'] = $this->Model_blog->detail_blog($id_blog);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_blog', $data);
        $this->load->view('templates/footer');
    }

    public function contact()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('contact');
        $this->load->view('templates/footer');
    }
}

/* End of file Dashboard_akhir.php */

?>