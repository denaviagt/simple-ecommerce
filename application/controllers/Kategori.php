<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcrud');
	}

	public function index()
	{
		$data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_admin', 'admin/kategori/index', $data);
	}

	public function add()
	{
		$this->template->load('layout_admin', 'admin/kategori/form_add');
	}

	public function save()
	{
		//$this->form_validation->set_rules('namaKategori', 'Nama Kategori', 'required');
		$this->form_validation->set_rules('namaKategori', 'Nama', 'required|trim', ['required' =>
		'Nama harus diisi']);
		//$this->form_validation->set_message('required', '%s Field Masih Kosong, Silakan isi');
		//$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		//$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

		if ($this->form_validation->run() == false) {
			$this->template->load('layout_admin', 'admin/kategori/form_add');
		} else {
			$namaKategori = $this->input->post('namaKategori');
			$dataInsert = array('namakat' => $namaKategori);
			$this->Mcrud->insert('tbl_kategori', $dataInsert);
			redirect('kategori');
		}
	}

	public function getid($id)
	{
		$dataWhere = array('idKat' => $id);
		$data['kategori'] = $this->Mcrud->get_by_id('tbl_kategori', $dataWhere)->row_object();
		$this->template->load('layout_admin', 'admin/kategori/form_edit', $data);
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$namaKategori = $this->input->post('namaKategori');
		$dataUpdate = array('namakat' => $namaKategori);
		$this->Mcrud->update('tbl_kategori', $dataUpdate, 'idKat', $id);
		redirect('kategori');
	}

	//  public function delete()
	// {
	// 	// $id = $this->delete('id');
	// 	$namaKategori = $this->delete('namaKategori');
	// 	$dataDelete = array('namakat' =>$namaKategori);
	// 	$this->Mcrud->delete('tbl_kategori',$dataDelete);
	// 	redirect('kategori');
	// } 

	public function delete($idKat)
	{
		$where = array('idKat' => $idKat);
		$this->Mcrud->delete('tbl_kategori', $where, 'idKat', $idKat);
		redirect('kategori');
	}
}
