<?php

class Data_product extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('auth/login');
        }
    }
    public function index()
    {
        $data['product'] = $this->model_product->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_product', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_prod      =$this->input->post('nama_prod');
        $keterangan     =$this->input->post('keterangan');
        $kategori       =$this->input->post('kategori');
        $harga          =$this->input->post('harga');
        $stok           =$this->input->post('stok');
        $gambar         =$_FILES['gambar']['name'];
        if ($gambar     =''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';
            
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gagal diUpload!"; 
            }else {
                $gambar     =$this->upload->data('file_name');
            }
    }

        $data = array(
            'nama_prod'     => $nama_prod,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );

        $this->model_product->tambah_product($data, 'tb_product');
        redirect('admin/data_product/index');   
    }

    public function edit($id)
    {
        $where = array('id_prod' =>$id);
        $data['product'] = $this->model_product->edit_product($where, 'tb_product')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_product', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id             = $this->input->post('id_prod');
        $nama_prod      = $this->input->post('nama_prod');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');

        $data = array(

            'nama_prod'         => $nama_prod,
            'keterangan'        => $keterangan,
            'kategori'          => $kategori,
            'harga'             => $harga,
            'stok'              => $stok
        );

        $where = array(
            'id_prod' => $id
        );

        $this->model_product->update_data($where,$data,'tb_product');
        redirect('admin/data_product/index');
    }

    public function hapus ($id)
    {
        $where = array('id_prod' => $id);
        $this->model_product->hapus_data($where, 'tb_product');
        redirect('admin/data_product/index');
    }
}