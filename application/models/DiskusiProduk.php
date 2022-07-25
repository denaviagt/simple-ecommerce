<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DiskusiProduk extends CI_Model
{
    private $table = 'tbl_produk_diskusi';

    public function getData($id)
    {
        $this->db->select('pd.*, m.username');
        $this->db->where('pd.idProduk', $id);
        $this->db->from('tbl_produk_diskusi as pd');
        $this->db->join('tbl_member as m', 'm.idKonsumen = pd.idKonsumen');
        $query = $this->db->get();
        return $query;
    }
    
    public function input_data($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function countData($idProduk)
    {
        $this->db->where('idProduk', $idProduk);
        $this->db->from($this->table);
        return $this->db->count_all_results(); 
    }
}