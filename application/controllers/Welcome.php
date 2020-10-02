<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$this->load->model('M_perpus');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() != false) {
			$where = array('email' => $username, 'password' => md5($password));

			$data = $this->M_perpus->edit_data($where, 'user');
			$d = $this->M_perpus->edit_data($where, 'user')->row();
			$cek = $data->num_rows();

			if ($cek > 0) {
				$session = array('id' => $d->id, 'nama' => $d->nama, 'role' => $d->role_id, 'status' => 'login');
				$this->session->set_userdata($session);
				if ($d->role_id == 1) {
					redirect(base_url() . 'admin');
				} else {
					redirect(base_url() . 'member');
				}
			} else {
				header("location:".base_url()."?pesan=error");
			}
		} else {
			$this->session->set_flashdata('alert', 'Anda Belum mengisi username atau password');
			$this->load->view('login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'welcome');
	}
}
