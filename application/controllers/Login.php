<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');		
	}

	function index() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$total = $this->m_login->cek_user_password($username, $password);
		
		if ($total == 1) {			
			$data_user = $this->m_login->ambil_data_user($username, $password);
			
			$array_data_user = array(
			'id'  => $data_user['id'],
			'nama'  => $data_user['nama'],
			'username'  => $data_user['username'],
			'level'  => $data_user['level'],
			'login'  => true
			);

			$this->session->set_userdata($array_data_user);
			
			redirect(base_url());
		} else {
			redirect(base_url('?valid=0'));
		}
		
	}

}
