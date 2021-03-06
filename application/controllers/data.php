<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library(array('template','form_validation'));
		$this->load->model(array('model'));
		$this->load->helper(array('form','download','url'));
		if((!$this->session->userdata('username')) && (!$this->session->userdata('admin'))){
            redirect('admin');
        }
	
	}
	public function data_produk($jenis,$judul,$sub)
	{
		$pesan = '';
		$url_create =  "produk/create/".$jenis."/".$judul."/".$pesan;
		$data = array(
			'judul' => $judul, 
			'sub_judul' => $sub,
			'jenis_laporan' => $jenis,
			'url_create' => $url_create,
			'bidang' => $this->model->getData('bidang'),
			'row' => $this->model->getData('produk','jenis_laporan',$jenis)
			);
		$this->template->admin('produk/data',$data);	
	}
	public function data_produk_filter()
	{
		$mulai = $this->input->post('mulai');
		$akhir = $this->input->post('akhir');
		$bidang =  $this->input->post('bidang');
		$jenis =  $this->input->post('jenis_laporan');

		$judul = $this->input->post('judul');
		$sub = $this->input->post('sub');
		$pesan = '';
		$url_create =  "produk/create/".$jenis."/".$judul."/".$pesan;
		$data = array(
			'judul' => $judul, 
			'jenis_laporan' => $jenis,
			'sub_judul' => $sub,
			'url_create' => $url_create,
			'bidang' => $this->model->getData('bidang'),
			'row' => $this->model->rekapData($jenis,$bidang,$mulai,$akhir)
			);
		$this->template->admin('produk/data',$data);	
	}
	public function data_penjelasan($jenis,$judul,$sub)
	{
		$pesan = '';
		$data = array(
			'judul' => $judul, 
			'sub_judul' => $sub,
			'row' => $this->model->getData('penjelasan','jenis_laporan',$jenis)
			);
		$this->template->admin('produk/penjelasan',$data);	
	}
}