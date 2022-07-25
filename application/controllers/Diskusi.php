<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diskusi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mmember');
        $this->load->model('Mfrontend');
        $this->load->model('DiskusiProduk');
        $this->load->library('session');
     }

    public function store($idProduk)
    {
        if (empty($this->session->userdata('userName'))){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" alert-dismissible fade show" role="alert">Login terlebih Dahulu! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('memberfe/detail_produk/'.$idProduk);
        }else{
            $comment        = $this->input->post('comment');
            $date           = date('Y-m-d H:i:s');
            $idKonsumen     = $this->session->userdata('id');
        
    
            $data = [
                'idKonsumen'      => $idKonsumen,
                'idProduk'     => $idProduk,
                'comment'   => $comment,
                'date'     => $date,
            ];
    
            $this->DiskusiProduk->input_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" alert-dismissible fade show" role="alert">Berhasil menambah diskusi! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('memberfe/detail_produk/'.$idProduk);
        }
       
    }


}