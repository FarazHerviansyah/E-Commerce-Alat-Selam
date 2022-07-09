<?php

class Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('auth/login');
        }
    }

    public function add_to_cart($id)
    {
        $product = $this->model_product->find($id);

        $data = array(
            'id'      => $product->id_prod,
            'qty'     => 1,
            'price'   => $product->harga,
            'name'    => $product->nama_prod,
            
    );
    
    $this->cart->insert($data);
    redirect('welcome');

    }

    public function detail_cart()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('cart');
        $this->load->view('templates/footer');
    }

    public function hapus_cart()
    {
        $this->cart->destroy();
        redirect('welcome');  
    }

    public function checkout()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('checkout');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf Pesanan Anda Gagal diproses";
        }
         
    }

    public function detail($id_prod)
    {
        $data['product'] = $this->model_product->detail_prod($id_prod);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_product',$data);
        $this->load->view('templates/footer');
    }

}