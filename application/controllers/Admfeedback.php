<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admfeedback extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }

	public function index()
    {
        $data['kesan'] = $this->Mcrud->get_all_data('kesan')->result();
        $this->template->load('layout_admin', 'admin/kesan/index', $data);
    }
}