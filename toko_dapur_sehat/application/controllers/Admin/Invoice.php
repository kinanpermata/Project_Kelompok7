<?php

Class Invoice extends CI_Controller{
    public function index(){
        $data['invoice'] = $this->Model_invoice->tampil_data();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/invoice', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail($id_invoice){
        $data['invoice'] = $this->Model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->Model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('Admin/detail_invoice', $data);
        $this->load->view('templates_admin/footer');
    }
}

?>