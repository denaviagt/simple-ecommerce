<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function aksi_login()
	{
		//$this->load->library('session');
		$this->load->model('Mlogin');
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek = $this->Mlogin->cek_login($u, $p)->num_rows();

		if ($cek == 1) {
			$data_session = array(
				'userName' => $u,
				'status' => 'Login'
			);
			$this->session->set_userdata($data_session);
			if ($cek == 1) {
				echo "<script>alert('Login berhasil!' );
                              window.location='" . site_url('Adminpanel/dashboard') . "';
                              </script>";
			} else {
				echo "<script>alert('Login berhasil!' );
                              window.location='" . site_url('Adminpanel/dashboard') . "';
                              </script>";
			}
		} else {
			echo "<script>alert('Login gagal!' );
                              window.location='" . site_url('Adminpanel') . "';
                              </script>";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Adminpanel');
	}
}
