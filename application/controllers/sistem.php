<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistem extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library(array('template','form_validation'));
		$this->load->model(array('model'));
		$this->load->helper(array('form','download','url'));
		if((!$this->session->userdata('username')) && (!$this->session->userdata('admin'))){
            redirect('admin');
        }
	}
	public function pengaturan()
	{
		$data = array(
			'judul'=>'PENGATURAN',
			'sub_judul' => 'data data pengaturan',
			'row' => $this->db->query("select * from pengaturan")->row()
			);
        
		$this->template->admin('sistem/pengaturan',$data);	
	}
	public function no_produk()
	{
		$data = array(
			'judul'=>'NO PRODUK',
			'sub_judul' => 'data data no produk',
			'row' => $this->model->getData('no_produk'),
			'url_create' => 'sistem/show_no_produk'
			);
        
		$this->template->admin('sistem/no_produk',$data);	
	}
	public function show_no_produk()
	{
		$data = array(
			'judul'=>'PENGATURAN',
			'sub_judul' => 'data pengaturan menambah produk',
			);
        
		$this->template->admin('sistem/show_no_produk',$data);	
	}
}