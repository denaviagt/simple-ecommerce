<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ongkoskirim extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function index()
    {
        $data['biyaya_kirim'] = $this->Mcrud->get_all_data('v_tbl_biaya_kirim')->result();
        $this->template->load('layout_admin', 'admin/ongkoskirim/index', $data);
    }

    // public function getid($id)
    // {
    //     $dataWhere = array('idKurir' => $id);
    //     $data['kurir'] = $this->Mcrud->get_by_id('tbl_kurir', $dataWhere)->row_object();
    //     $this->template->load('layout_admin', 'admin/kurir/form_edit', $data);
    // }

    public function add()
    {
        $data['idKurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result_array();
        $data['idKotaAsal'] = $this->Mcrud->get_all_data('tbl_kota')->result_array();
        $data['idKotaTujuan'] = $this->Mcrud->get_all_data('tbl_kota')->result_array();

        $this->template->load('layout_admin', 'admin/ongkoskirim/form_add', $data);
    }

    public function getid($id)
    {
        $data['idKurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result_array();
        $data['idKotaAsal'] = $this->Mcrud->get_all_data('tbl_kota')->result_array();
        $data['idKotaTujuan'] = $this->Mcrud->get_all_data('tbl_kota')->result_array();

        $dataWhere = array('idBiayaKirim' => $id);
        $data['biyaya_kirim'] = $this->Mcrud->get_by_id('tbl_biaya_kirim', $dataWhere)->row_object();
        $this->template->load('layout_admin', 'admin/ongkoskirim/form_edit', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $idKurir        = $this->input->post('idKurir');
        $idKotaAsal     = $this->input->post('idKotaAsal');
        $idKotaTujuan   = $this->input->post('idKotaTujuan');
        $biaya          = $this->input->post('biaya');


        $dataUpdate = array('idKurir' => $idKurir);
        $dataUpdate = array('idKotaAsal' => $idKotaAsal);
        $dataUpdate = array('idKotaTujuan' => $idKotaTujuan);
        $dataUpdate = array('biaya' => $biaya);

        $this->Mcrud->update('tbl_biaya_kirim', $dataUpdate, 'idBiayaKirim', $id);
        redirect('ongkoskirim');
    }



    // public function edit()
    // {
    //     $data['idKurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result_array();
    //     $data['idKotaAsal'] = $this->Mcrud->get_all_data('tbl_kota')->result_array();
    //     $data['idKotaTujuan'] = $this->Mcrud->get_all_data('tbl_kota')->result_array();
    //     $data['biaya_kirim'] = $this->Mcrud->get_all_data('tbl_biaya_kirim')->result_array();


    //     $this->template->load('layout_admin', 'admin/ongkoskirim/form_edit', $data);
    // }

    // public function edit()
    // {
    //     $data['idKurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result_array();
    //     $data['idKotaAsal'] = $this->Mcrud->get_all_data('tbl_kota')->result_array();
    //     $data['idKotaTujuan'] = $this->Mcrud->get_all_data('tbl_kota')->result_array();
    //     $data['biaya_kirim'] = $this->Mcrud->get_all_data('tbl_biaya_kirim')->result_array();
    //     $this->template->load('layout_admin', 'admin/ongkoskirim/form_edit', $data);

    //     $idKurir        = $this->input->post('idKurir');
    //     $idKotaAsal     = $this->input->post('idKotaAsal');
    //     $idKotaTujuan   = $this->input->post('idKotaTujuan');
    //     $biaya          = $this->input->post('biaya');

    //     $data = [
    //         'idKurir'        => $idKurir,
    //         'idKotaAsal'     => $idKotaAsal,
    //         'idKotaTujuan'   => $idKotaTujuan,
    //         'biaya'          => $biaya,
    //     ];

    //     $this->Mcrud->update_data_biyayakirim($data, 'tbl_biaya_kirim');
    //     redirect('ongkoskirim');
    // }

    public function save()
    {
        $idKurir        = $this->input->post('idKurir');
        $idKotaAsal     = $this->input->post('idKotaAsal');
        $idKotaTujuan   = $this->input->post('idKotaTujuan');
        $biaya          = $this->input->post('biaya');

        $data = [
            'idKurir'        => $idKurir,
            'idKotaAsal'     => $idKotaAsal,
            'idKotaTujuan'   => $idKotaTujuan,
            'biaya'          => $biaya,
        ];
        $this->Mcrud->input_data_biyayakirim($data, 'tbl_biaya_kirim');
        redirect('ongkoskirim');
    }

    public function delete($idBiayaKirim)
    {
        $where = array('idBiayaKirim' => $idBiayaKirim);
        $this->Mcrud->delete('tbl_biaya_kirim', $where, 'idBiayaKirim', $idBiayaKirim);
        redirect('ongkoskirim');
    }
}
