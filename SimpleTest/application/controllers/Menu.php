<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Menu');
		$this->load->view('Footer');
	}
}
