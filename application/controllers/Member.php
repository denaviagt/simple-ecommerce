<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }


    public function index()
    {
        $data['member'] = $this->Mcrud->get_all_data('tbl_member')->result_array();
        $this->template->load('layout_admin', 'admin/member/index', $data);
    }

    

    public function add()
    {
        $data['idKota'] = $this->Mcrud->get_all_data('tbl_kota')->result_array();

        $this->template->load('layout_admin', 'admin/member/form_add', $data);
    }

    public function save()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namaKonsumen = $this->input->post('namaKonsumen');
        $alamat = $this->input->post('alamat');
        $idKota = $this->input->post('idKota');
        $email = $this->input->post('email');
        $tlpn = $this->input->post('tlpn');
        $statusAktif = $this->input->post('statusAktif');

        $dataInsert = array('username' => $username);
        $dataInsert = array('password' => $password);
        $dataInsert = array('namaKonsumen' => $namaKonsumen);
        $dataInsert = array('alamat' => $alamat);
        $dataInsert = array('idKota' => $idKota);
        $dataInsert = array('email' => $email);
        $dataInsert = array('tlpn' => $tlpn);
        $dataInsert = array('statusAktif' => 'Y');

        $this->Mcrud->insert('tbl_member', $dataInsert);
        redirect('member');
    }

    public function getid($id)
    {
        $dataWhere = array('idKota' => $id);
        $data['kota'] = $this->Mcrud->get_by_id('tbl_kota', $dataWhere)->row_object();
        $this->template->load('layout_admin', 'admin/kota/form_edit', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $namaKota = $this->input->post('namaKota');
        $dataUpdate = array('namakota' => $namaKota);
        $this->Mcrud->update('tbl_kota', $dataUpdate, 'idKota', $id);
        redirect('kota');
    }

    public function delete($idKota)
    {
        $where = array('idKota' => $idKota);
        $this->Mcrud->delete('tbl_kota', $where, 'idKota', $idKota);
        redirect('kota');
    }
}
