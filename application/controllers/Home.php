<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud', 'Mfrontend');
    }



    // public function dashboard()
    // {
    //     if (empty($this->session->userdata('userName'))) {
    //         redirect('Adminpanel');
    //     }
    //     $this->template->load('layout_admin', 'admin/dashboard');
    // }

    // public function index()
    // {
    //     $this->load->view('admin/form_login');
    // }

    public function register()
    {
        $data['idKota'] = $this->Mcrud->get_all_data('tbl_kota')->result_array();

        $this->template->load('layout_member', 'member/register/form', $data);
    }

    public function act_reg()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namaKonsumen = $this->input->post('namaKonsumen');
        $alamat = $this->input->post('alamat');
        $idKota = $this->input->post('idKota');
        $email = $this->input->post('email');
        $tlpn = $this->input->post('tlpn');
        $statusAktif = $this->input->post('statusAktif');

        $data = [
            'username' => $username,
            'password' => $password,
            'namaKonsumen' => $namaKonsumen,
            'alamat' => $alamat,
            'idKota' => $idKota,
            'email' => $email,
            'tlpn' => $tlpn,
            'statusAktif' => 'Y',
        ];
        $this->Mcrud->input_member($data, 'tbl_member');
        redirect('Home/login');
    }

    public function login()
    {
        //$data['idKota'] = $this->Mcrud->get_all_data('tbl_kota')->result_array();

        $this->template->load('layout_member', 'member/login/form');
    }

    public function cart()
    {
        $this->load->library('cart');
        $this->template->load('layout_member', 'member/cart/index');
    }

    public function add_cart_item($id)
    {
        $this->load->library('cart');
        $data['produk'] = $this->Mfrontend->get_by_id('tbl_produk', ['idProduk' => $id])->row();
        $dataTroli = [
            'id' => $id,
            'qty' => 1,
            'price' => $data['produk']->harga,
            'name' => $data['produk']->namaProduk,
            'options' => ['image' => $data['produk']->foto]
        ];
        $this->cart->insert($dataTroli);
        redirect('home/cart');
    }
}
