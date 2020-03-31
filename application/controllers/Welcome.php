<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function halo(){
		$this->session->set_userdata('nama', 'Zen');
		$userdata = $this->session->userdata('nama');
		$this->view('beranda/index', compact('userdata'));
	}

	public function panggil($nama = 'Zen'){
		$this->view('beranda/panggil', compact('nama'));
	}

	public function data(){
		$data = [1, 2, 3, 4, 5];
		$this->view('beranda/data', compact('data'));
	}
}
