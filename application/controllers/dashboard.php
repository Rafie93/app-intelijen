<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('template'));
		$this->load->model(array('model'));
		
		if((!$this->session->userdata('username')) && (!$this->session->userdata('admin'))){
            redirect('admin');
        }

	}
	public function index()
	{
		
		$data = array('title' => 'PRODUK INTELIJEN');
		$this->template->admin('welcome',$data);
	}
}