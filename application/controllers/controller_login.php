<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_login extends CI_Controller {

	public function index(){
		/*Fungsi Login*/
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$valid->set_rules('username', 'Username', 'required');
		$valid->set_rules('Password', 'Password', 'required');

		if($valid->run()){
			$this->simple_login->login($username,$password, base_url('dashboard'), base_url('controller_login'));
		}

		/*end fungsi login*/
		$this->load->view('v_login');
	}

}