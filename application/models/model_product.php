<?php

class Model_product extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_product');
    }

    public function tambah_product($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_product($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('id_prod', $id)
                           ->limit(1)
                           ->get('tb_product');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_prod($id_prod)
    {
        $result = $this->db->where('id_prod',$id_prod)->get('tb_product');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }

}