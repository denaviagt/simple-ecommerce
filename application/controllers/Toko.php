<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
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

        $data['toko'] = $this->Mfrontend->get_all_data('tbl_toko')->result_array();
        $this->template->load('layout_member', 'member/toko/index', $data);
    }

    public function add_toko()
    {

        $this->template->load('layout_member', 'member/toko/add');
    }

    public function save()
    {
        $idKonsumen         = $this->input->post('idKonsumen');
        $namaToko           = $this->input->post('namaToko');
        $logo               = $this->input->post('logo');
        $deskripsi          = $this->input->post('deskripsi');
        $statusAktif        = $this->input->post('statusAktif');

        $data = [
            'idKonsumen'        => $idKonsumen,
            'namaToko'          => $namaToko,
            'logo'              => $logo,
            'deskripsi'         => $deskripsi,
            'statusAktif'       => $statusAktif,
        ];

        $upload_image = $_FILES['logo']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size']      = '2048';
            $config['upload_path'] = '.assets/frontend/images/logo/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('logo', $new_image);
            } else {
                echo $this->upload->dispay_errors();
            }
        }

        $this->Mfrontend->input_data_toko($data, 'tbl_biaya_kirim');
        redirect('toko');
    }

    public function main($id)
    {
        $data['datatoko'] = $this->Mfrontend->get_all_data('tbl_toko')->result_array();


        $dataWhere = array('idToko' => $id);
        $data['toko'] = $this->Mfrontend->get_by_id('tbl_toko', $dataWhere)->row_object();
        $this->template->load('layout_member', 'toko/dashboard/home', $data);
    }

    // public function getid($id)
    // {
    //     $data['idKurir'] = $this->Mcrud->get_all_data('tbl_kurir')->result_array();
    //     $data['idKotaAsal'] = $this->Mcrud->get_all_data('tbl_kota')->result_array();
    //     $data['idKotaTujuan'] = $this->Mcrud->get_all_data('tbl_kota')->result_array();

    //     $dataWhere = array('idBiayaKirim' => $id);
    //     $data['biyaya_kirim'] = $this->Mcrud->get_by_id('tbl_biaya_kirim', $dataWhere)->row_object();
    //     $this->template->load('layout_admin', 'admin/ongkoskirim/form_edit', $data);
    // }
}
