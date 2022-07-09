<?php

class Mcrud extends CI_Model
{
	public 	function get_all_data($tabel)
	{
		// $this->load->database();
		$q = $this->db->get($tabel);
		return $q;
	}

	public function insert($tabel, $data)
	{
		$this->db->insert($tabel, $data);
	}

	public function input_data_biyayakirim($data)
	{
		$this->db->insert('tbl_biaya_kirim', $data);
	}

	public function input_member($data)
	{
		$this->db->insert('tbl_member', $data);
	}

	public function update_data_biyayakirim($id, $data)
	{
		$this->db->where('idBiayaKirim', $id);
		$this->db->update('tbl_biaya_kirim', $data);
	}

	public function get_by_id($tabel, $id)
	{
		return $this->db->get_where($tabel, $id);
	}

	public function update($tabel, $data, $pk, $id)
	{
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function delete($tabel, $data, $pk, $id)
	{
		$this->db->where($pk, $id);
		$this->db->delete($tabel, $data);
	}

	// public function delete($tabel, $data, $pk, $id)
	// {
	// 	$this->db->where($pk, $id);
	// 	$this->db->delete()($tabel, $id);
	// }

	// public function delete($table,  $data)
	// {
	// 	$this->db->delete($table,  $data);
	// }

}
