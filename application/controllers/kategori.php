<?php

class Kategori extends CI_Controller{
    public function paket_scuba()
    {
        $data['paket_scuba'] = $this->model_kategori->data_paket_scuba()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('paket_scuba',$data);
        $this->load->view('templates/footer');
    }

    public function paket_snorkeling_full_foot()
    {
        $data['paket_snorkeling_full_foot'] = $this->model_kategori->data_paket_snorkeling_full_foot()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('paket_snorkeling_full_foot',$data);
        $this->load->view('templates/footer');
    }

    public function paket_freediving()
    {
        $data['paket_freediving'] = $this->model_kategori->data_paket_freediving()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('paket_freediving',$data);
        $this->load->view('templates/footer');
    }

    public function vessel_finder()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('vessel_finder');
        $this->load->view('templates/footer');
    }
}