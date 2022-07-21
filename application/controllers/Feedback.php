<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feedback extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mmember');
        $this->load->model('Mfrontend');
        $this->load->model('Kesan', 'kesan');    }

    public function index()
    {

        $this->template->load('layout_member', 'member/feedback/index');
    }

    public function kirim()
    {
        $nama    = $this->input->post('nama');
        $email  = $this->input->post('email');
        $subject = $this->input->post('subject');
        $kesan    = $this->input->post('kesan');

        $data = [
            'nama'      => $nama,
            'email'     => $email,
            'subject'   => $subject,
            'kesan'     => $kesan,
        ];

        $this->kesan->input_data($data, 'kesan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" alert-dismissible fade show" role="alert">Feedback berhasil dikirim! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('feedback/index');
    }


}