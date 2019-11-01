<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('_partial/header');
		$this->load->view('_partial/sidebar');
		$this->load->view('dashboard/dashboard');
		$this->load->view('_partial/footer');
	}
}
