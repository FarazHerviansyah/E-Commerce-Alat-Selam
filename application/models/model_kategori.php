<?php

class Model_kategori extends CI_Model{

    public function data_paket_scuba(){
       return $this->db->get_where("tb_product",array('kategori' => 'Paket Scuba'));
    }

    public function data_paket_snorkeling_full_foot(){
        return $this->db->get_where("tb_product",array('kategori' => 'Paket Snorkeling Full Foot'));
     }

    public function data_paket_freediving(){
        return $this->db->get_where("tb_product",array('kategori' => 'Paket Freediving'));
     }
}