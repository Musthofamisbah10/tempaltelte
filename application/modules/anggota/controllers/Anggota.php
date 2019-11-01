<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function index()
	{
		$this->load->view('_partial/header');
		$this->load->view('anggota/anggota');
		$this->load->view('_partial/footer');
	}

}

/* End of file Anggota.php */
/* Location: ./application/modules/anggota/controllers/Anggota.php */