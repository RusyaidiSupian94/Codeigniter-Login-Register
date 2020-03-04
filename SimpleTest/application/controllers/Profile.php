<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __contruct(){
		parent::__contruct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		if($this->session->userdata('logged_in') !== TRUE){
      		redirect('Login');
    	}
	}

	public function index()
	{
		
		if($this->session->userdata('logged_in') === TRUE){
      		$this->load->view('Header');
			$this->load->view('Profile');
			$this->load->view('Footer');
    	} else{
    		$this->load->view('error/html/error_404');
    	}
	}
}
