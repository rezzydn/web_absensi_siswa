<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('headers');
		$this->load->view('dashboard_view');
		$this->load->view('footers');
	}
}
