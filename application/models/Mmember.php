<?php

class Mmember extends CI_Model
{
    public function cek_login($u, $p)
    {
        //$this->load->database();
        $q = $this->db->get_where('tbl_member', array('userName' => $u, 'password' => $p));
        return $q;
    }
}
