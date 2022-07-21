<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesan extends CI_Model
{
    private $table = 'kesan';

    public function getKesan()
    {
        return $this->db->get($this->table);
    }

    public function input_data($data)
    {
        $this->db->insert($this->table, $data);
    }
}