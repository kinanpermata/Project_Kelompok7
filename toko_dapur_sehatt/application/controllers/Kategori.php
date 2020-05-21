<?php

class Kategori extends CI_Controller {

    public function Food()
    {
        $data['Food'] = $this->Model_kategori->data_food()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('food', $data);
        $this->load->view('templates/footer');
    }

    public function Snack()
    {
        $data['Snack'] = $this->Model_kategori->data_snack()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('snack', $data);
        $this->load->view('templates/footer');
    }

    public function Kitchen()
    {
        $data['Kitchen'] = $this->Model_kategori->data_kitchen()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kitchen', $data);
        $this->load->view('templates/footer');
    }

    public function Info()
    {
        $data['Info'] = $this->Model_kategori->data_info()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('info', $data);
        $this->load->view('templates/footer');
    }

    public function Resep()
    {
        $data['Resep'] = $this->Model_kategori->data_resep()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('resep', $data);
        $this->load->view('templates/footer');
    }
}

?>