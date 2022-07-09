<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mmember');
        $this->load->model('Mfrontend');
    }

    public function index()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('Memberfe/act_login');
        }

        $data['produk'] = $this->Mfrontend->get_all_data('tbl_produk')->result_array();
        $this->template->load('layout_member', 'member/produk/index', $data);
    }

    public function add_produk()
    {
        $data['kategori'] = $this->Mfrontend->get_all_data('tbl_kategori')->result_array();

        $this->template->load('layout_member', 'member/produk/add', $data);
    }

    public function save()
    {
        $idKat         = $this->input->post('idKat');
        $idToko           = $this->input->post('idToko');
        $namaProduk               = $this->input->post('namaProduk');
        $harga        = $this->input->post('harga');
        $stok        = $this->input->post('stok');
        $berat        = $this->input->post('berat');
        $deskripsiProduk        = $this->input->post('deskripsiProduk');
        $foto          = $_FILES['foto'];

        if ($foto = '') {
        } else {
            $config['upload_path'] = './assets/fotoproduk';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "Upload Gagal";
                die();
            } else {
                $foto = $this->upload->data('file_name');
            }
        }

        $data = [
            'idKat'        => $idKat,
            'idToko'       => $idToko,
            'namaProduk'   => $namaProduk,
            'harga'        => $harga,
            'stok'         => $stok,
            'berat'        => $berat,
            'deskripsiProduk'       => $deskripsiProduk,
            'foto'         => $foto,

        ];
        $this->Mfrontend->input_data_produk($data, 'tbl_produk');
        redirect('produk');
    }

    public function detail($idProduk)
    {
        $detail = $this->Mfrontend->detailDataProduk($idProduk);
        $data['detail'] = $detail;

        $this->template->load('layout_member', 'member/detail_produk/index', $data);
    }
}
