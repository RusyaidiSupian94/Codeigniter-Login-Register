<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Auth_model');   
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('email');
	}

	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Register');
		$this->load->view('Footer');
	}

	///////////////////this for sign up ///////////////
	public function signupf(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('f_name', 'fname','required');
		$this->form_validation->set_rules('l_name', 'lname','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');//|callback_email_check
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('passconf','confirm password', 'required|matches[password]');

		$userData = array(
			'f_name' => strip_tags($this->input->post('f_name')),
			'l_name' => strip_tags($this->input->post('l_name')),
			'email' => strip_tags($this->input->post('email')),
			'password' => md5($this->input->post('password')),
		);

		if($this->form_validation->run() == FALSE){
			echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Please fill all the mandatory data</div>');
			redirect('Register');
		}
		else{
			$this->Auth_model->insert($userData);
			echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Register had success. you may login</div>');
			redirect('Login');	
		}
	}
}
