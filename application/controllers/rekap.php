<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller {
	var $bulan_huruf = array(
						1 =>	"Januari",		2  =>"Februari",	3  =>"Maret",		4 	=>"April",
						5 =>	"Mei",			6  =>"Juni",		7  =>"Juli",		8 	=>"Agustus",
						9 =>	"September",	10 =>"Oktober",		11 =>"November",	12 	=>"Desember") ;	

	public function __construct(){
		parent::__construct();
		$this->load->library(array('template','form_validation','pdfgenerator'));
		$this->load->model(array('model'));
		$this->load->helper(array('form','download','url'));
		if((!$this->session->userdata('username')) && (!$this->session->userdata('admin'))){
            redirect('admin');
        }
	
	}
	public function form($jenis,$judul)
	{
		$url_cetak=  "produk/create/".$jenis."/".$judul;
		$data = array(
			'judul' => $judul, 
			'url_cetak' => $url_cetak,
			'jenis_laporan'=>$jenis,
			'bidang' => $this->model->getData('bidang')
			);
		$this->template->admin('rekap/cari',$data);	
	}
	public function cetak()
	{
		$bulan = $this->bulan_huruf;
		$mulai = $this->input->post('mulai');
		$akhir = $this->input->post('akhir');
		$bidang =  $this->input->post('bidang');
		$jenis =  $this->input->post('jenis_laporan');

		$data = array(
			'mulai' => $mulai,
			'akhir' => $akhir,
			'bln_hrf'=>$bulan,
			'jenis_laporan' => $this->model->jenis_lap($jenis)->alias,
			'row' => $this->model->rekapData($jenis,$bidang,$mulai,$akhir)
			);
	//	$this->load->view('rekap/rekap', $data);
	    $html = $this->load->view('rekap/rekap', $data, true);
	    
	    $this->pdfgenerator->generate($html,'rekap'.$jenis,'A4','landscape');
	}
}