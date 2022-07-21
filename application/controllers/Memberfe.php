<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Memberfe extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mmember');
        $this->load->model('Mfrontend');
    }

    public function act_login()
    {
        $u = $this->input->post('username');
        $p = $this->input->post('password');

        $cek = $this->Mmember->cek_login($u, $p)->num_rows();
        $result = $this->Mmember->cek_login($u, $p)->result();
        if ($cek == 1) {
            $data_session = array(
                'userName' => $u,
                'id' => $result[0]->idKonsumen,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            //redirect('memberfe');
            if ($cek == 1) {
                echo "<script>alert('Login berhasil!' );
                              window.location='" . site_url('memberfe') . "';
                              </script>";
            } else {
                echo "<script>alert('Login berhasil!' );
                              window.location='" . site_url('memberfe') . "';
                              </script>";
            }
        } else {
            echo "<script>alert('Login gagal!' );
                              window.location='" . site_url('home/login') . "';
                              </script>";
        }
    }

    public function index()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('Memberfe/act_login');
        }

        $this->template->load('layout_member', 'member/dashboard/member');
    }

    public function home()
    {
        //$data['member'] = $this->Mcrud->get_all_data('tbl_member')->result_array();
        $data['kategori'] = $this->Mfrontend->get_all_data_kategori()->result();
        $data['produk_terbaru'] = $this->Mfrontend->get_all_data_produk_terbaru()->result();
        $this->template->load('layout_member', 'member/home/index', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home/login');
    }

    public function keranjang()
    {
        $data['kategori'] = $this->Mfrontend->get_all_data_kategori()->result();
        $this->template->load('layout_frontend', 'frontend/keranjang', $data);
    }

    public function cart_tambah($idProduk)
    {
        $status = $this->session->userdata('status');
        if (empty($status)) {
            redirect('home/login');
        } else {
            $jml_keranjang = count($this->cart->contents());
            if (empty($jml_keranjang)) {
                $data_produk = $this->Mmember->get_produk_by_id($idProduk)->row_object();

                $insert_cart = array(
                    'id' => $idProduk,
                    'idToko' => $data_produk->idToko,
                    'name' => $data_produk->namaProduk,
                    'id' => $data_produk->harga,
                    'id' => $data_produk->foto,
                    'qty' => 1
                );

                $this->cart->insert($insert_cart);
                redirect('memberfe/keranjang');
            } else {
                $idToko = '';
                if ($cart = $this->cart->contents()) {
                    foreach ($cart as $item) {
                        $idToko = $item['idToko'];
                    }
                }
                $data_produk = $this->Member->get_produk_by_id($idProduk)->row_object();
                if ($idToko == $data_produk->idToko) {
                    $data_produk = $this->Member->get_produk_by_id($idProduk)->row_object();

                    $insert_cart = array(
                        'id' => $idProduk,
                        'idToko' => $data_produk->idToko,
                        'name' => $data_produk->namaProduk,
                        'id' => $data_produk->harga,
                        'id' => $data_produk->foto,
                        'qty' => 1
                    );
                    $this->cart->insert($insert_cart);
                    redirect('member/keranjang');
                } else {
                    echo "Barang Harus Dari Toko Yang Sama";
                }
            }
        }
    }

    public function detail_produk($idProduk)
    {
        $detail = $this->Mfrontend->detailDataProduk($idProduk);
        $data['detail'] = $detail;
        $this->template->load('layout_member', 'member/home/detail_produk', $data);
    }
}