<?php

class Mfrontend extends CI_Model
{
    public function get_all_data($tabel)
    {
        // $this->load->database();
        $q = $this->db->get($tabel);
        return $q;
    }

    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function input_data_toko($data)
    {
        $this->db->insert('tbl_toko', $data);
    }

    public function input_data_produk($data)
    {
        $this->db->insert('tbl_produk', $data);
    }

    public function get_by_id($tabel, $id)
    {
        return $this->db->get_where($tabel, $id);
    }

    public function get_all_data_kategori()
    {
        return $this->db->get('tbl_kategori');
    }

    public function get_all_data_produk()
    {
        return $this->db->get('tbl_produk');
    }

    public function get_all_data_produk_terbaru()
    {
        $this->db->order_by('idProduk', 'DESC');
        $this->db->limit(4);
        return $this->db->get('tbl_produk');
    }

    public function detailDataProduk($idProduk = NULL)
    {
        $query = $this->db->get_where('tbl_produk', array('idProduk' => $idProduk))->row();
        return $query;
    }
}
