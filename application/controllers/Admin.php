<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
	{
        parent::__construct();
        if($this->session->userdata('status')!= "login"){
            redirect(base_url().'welcome');
        }
	}

	public function index()
	{
        // $this->load->view('pages');
        $data['buku'] = 35;
        $data['mahasiswa'] = 147;
		$this->load->view('home', $data);
	}
}