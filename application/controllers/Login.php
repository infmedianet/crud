<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$this->load->view('index');
	}

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($password == '--' and $username == 'user') {
			$data = array(
				'username' => $username,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($data);
			redirect('index.php/surat');
		} else if ($password == 'admin123' and $username == 'admin') {
			$data = array(
				'username' => $username,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($data);
			redirect('admin/dashboardAdmin');
		} else {
			$this->session->set_flashdata('gagal', '<div style="color:red">Username atau Password Salah</div>');
			redirect(base_url('login'));
		}
	}

	public function logout()
	{
		$userdata = array('username');
		$this->session->unset_userdata($userdata);
		$this->session->set_userdata('logged_in', FALSE);
		redirect(base_url('login'));
	}
}
