<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('template'));
		$this->load->model(array('model'));
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$ceklogin = $this->model->login($username,$password,$level);
		if ($ceklogin->num_rows() > 0) {
			 $this->session->set_userdata('username',$username);
			 $this->session->set_userdata('admin',$level);
			
			 redirect('dashboard');
		}else{
			$this->model->notifikasi("Anda Gagal Login"); //ini jika gagal
			redirect('admin');

		}

		
	}
}