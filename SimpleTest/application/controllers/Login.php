<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Auth_model');
		//$this->load->model('users_model');      
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('email');
	}

	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Login');
		$this->load->view('Footer');
	}
	

	public function logout(){
		$this->session->sess_destroy();
		redirect('Menu');
	}

	public function login(){
		$email = $this->input->post('email',TRUE);
		$password = md5($this->input->post('password',TRUE));

		$validate = $this->Auth_model->validate($email,$password);
		if($validate->num_rows() > 0){
			$data = $validate->row_array();
			$user_id = $data['user_id'];
			$f_name = $data['f_name'];
			$l_name = $data['l_name'];
			$email = $data['email'];
			$password = $data['password'];

			$sessdata = array(
				'user_id' => $user_id,
				'f_name' => $f_name,
				'l_name' => $l_name,
				'email' => $email,
				'password' => $password,//////////this to call the data if any dont have it the data will no display
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sessdata);
			echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Success Login</div>');
			redirect('Profile');
		}else{
			echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Username and password error</div>');

			redirect('Login');
		}
	}
}
