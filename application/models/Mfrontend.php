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

    public function getUser($id)
    {
        $this->db->where('idKonsumen', $id);
        return $this->db->get('tbl_member');
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

    public function get_all_produk_by_toko($id)
    {
        $this->db->where('idToko', $id);
        return $this->db->get('tbl_produk');
    }

    public function detailDataProduk($idProduk = NULL)
    {
        $query = $this->db->get_where('tbl_produk', array('idProduk' => $idProduk))->row();
        return $query;
    }

    public function insertOrder($data)
    {        
        $insert = $this->db->insert('tbl_order', $data);

        return $insert?$this->db->insert_id():false;
    }

    public function insertOrderItems($data)
    {
          $insert = $this->db->insert_batch('tbl_detail_order', $data);

          return $insert?true:false;
    }

    public function getOrder($id)
    {
        $this->db->select('o.*, k.username, k.namaKonsumen, k.alamat, k.tlpn, k.email');
        $this->db->from('tbl_order as o');
        $this->db->join('tbl_member as k', 'k.idKonsumen = o.idKonsumen', 'left');
        $this->db->where('o.idOrder', $id);
        $query = $this->db->get();
        $result = $query->row_array();
        
        $this->db->select('do.*, p.namaProduk, p.foto, p.harga, p.stok, p.berat');
        $this->db->from('tbl_detail_order as do');
        $this->db->join('tbl_produk as p', 'p.idProduk = do.idProduk', 'left');
        $this->db->where('do.idOrder', $id);
        $query2 = $this->db->get();
        $result['items'] = ($query2->num_rows() > 0)?$query2->result_array():array();
        
        return !empty($result)?$result:false;
    }

    public function inputPayment($data)
    {
        $insert = $this->db->insert('tbl_konfirmasi', $data);

        return $insert?$this->db->insert_id():false;
    }

    public function updateStatusBayar($id, $data)
    {
        $this->db->where('idOrder', $id);

        $this->db->update('tbl_order', $data);
    }

    public function getOrderByToko($id)
    {
        $this->db->select('o.*, k.username, k.namaKonsumen, k.alamat, k.tlpn, k.email, do.jumlah, do.harga, p.namaProduk, p.foto');
        $this->db->from('tbl_order as o');
        $this->db->join('tbl_detail_order as do', 'do.idOrder = o.idOrder');
        $this->db->join('tbl_produk as p', 'p.idProduk = do.idProduk');
        $this->db->join('tbl_member as k', 'k.idKonsumen = o.idKonsumen', 'left');
        $this->db->where('p.idToko', $id);
        $query = $this->db->get();
        $result = $query->row_array();
        return !empty($result)?$result:false;
    }
}