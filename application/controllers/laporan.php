	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('template','pdfgenerator'));
		$this->load->model(array('model'));
		if((!$this->session->userdata('username')) && (!$this->session->userdata('admin'))){
            redirect('admin');
        }
	}

	public function lap_pembelian_barang()
	{
		$data = array(
			'judul' => 'LAPORAN',
			'sub_judul'=>'laporan pembelian barang'
			);
		$this->template->admin('laporan/l_pembelian_barang',$data);
	}
	public function lap_penjualan_barang()
	{
		$data = array(
			'judul' => 'LAPORAN',
			'sub_judul'=>'laporan penjualan barang'
			);
		$this->template->admin('laporan/l_penjualan_barang',$data);
	}
	public function lap_stok_barang()
	{
		$data = array(
			'judul' => 'LAPORAN',
			'sub_judul'=>'laporan stok barang'
			);
		$this->template->admin('laporan/l_stok_barang',$data);
	}
	public function lap_laba_rugi()
	{
		$data = array(
			'judul' => 'LAPORAN',
			'sub_judul'=>'laporan laba rugi'
			);
		$this->template->admin('laporan/l_laba_rugi',$data);
	}
	public function lap_penjualan_cast()
	{
		$data = array(
			'judul' => 'LAPORAN',
			'sub_judul'=>'laporan penjualan cast'
			);
		$this->template->admin('laporan/l_penjualan_cast',$data);
	}
	public function lap_piutang_divisi()
	{
		$data = array(
			'judul' => 'LAPORAN',
			'sub_judul'=>'laporan piutang divisi'
			);
		$this->template->admin('laporan/l_piutang_divisi',$data);
	}
	public function lap_piutang_anggota()
	{
		$data = array(
			'judul' => 'LAPORAN',
			'sub_judul'=>'laporan piutang anggota'
			);
		$this->template->admin('laporan/l_piutang_anggota',$data);
	}
	public function lap_rekomendasi()
	{
		$data = array(
			'judul' => 'LAPORAN',
			'sub_judul'=>'laporan rekomendasi barang'
			);
		$this->template->admin('laporan/l_rekomendasi',$data);
	}

	public function cetak_stok()
	{
		$tahun = $this->input->post('tahun');
		$bulan = $this->input->post('bb');
		$bulan_huruf=$this->model->angka_to_bulan($bulan);
		$data = array(
			'tahun' => $tahun,
			'bulan' => $bulan_huruf,
			'row' => $this->model->getstok($bulan,$tahun)->result()
			);
		
	    $html = $this->load->view('report/laporan_stok', $data, true);
	    
	    $this->pdfgenerator->generate($html,'laporan_stok'.$bulan.$tahun,'A4','landscape');
	}

	public function cetak_piutang_divisi()
	{
		$tahun = $this->input->post('tahun');
		$bulan = $this->input->post('bulann');
		$bulan_huruf=$this->model->angka_to_bulan($bulan);
		$data = array(
			'tahun' => $tahun,
			'bulan_angka'=>$bulan,
			'bulan' => $bulan_huruf,
			'row' => $this->model->getPiutangDivisi($bulan,$tahun)->result()
			);
		
	    $html = $this->load->view('report/laporan_piutang_divisi', $data, true);
	    
	    $this->pdfgenerator->generate($html,'laporan_divisi'.$bulan.$tahun,'A4','landscape'); 
	}
	
	public function cetak_piutang_anggota()
	{
		$tahun = $this->input->post('tahun');
		$bulan = $this->input->post('bulann');
		$bulan_huruf=$this->model->angka_to_bulan($bulan);
		$data = array(
			'tahun' => $tahun,
			'bulan' => $bulan_huruf,
			'row' => $this->model->getPiutangAnggota($bulan,$tahun)->result()
			);
		
	    $html = $this->load->view('report/laporan_piutang_anggota', $data, true);
	    
	    $this->pdfgenerator->generate($html,'laporan_piutang_anggota'.$bulan.$tahun,'A4','portrait');
	}

	public function cetak_laba_rugi()
	{
		$tahun = $this->input->post('tahun');
		$bulann = $this->input->post('bb');
		$bulan_huruf=$this->model->angka_to_bulan($bulann);
		$data = array(
			'tahun' => $tahun,
			'bulan' => $bulann,
			'bulan_huruf'=>$bulan_huruf,
			'laba' => $this->model->getLaba($bulann,$tahun)->row_array()
			);
		
	    $html = $this->load->view('report/laporan_laba_rugi', $data, true);
	    
	    $this->pdfgenerator->generate($html,'laporan_laba_rugi'.$bulann.$tahun,'A4','landscape');
	}

	public function cetak_rekomendasi()
	{
		$tahun = $this->input->post('tahun');
		$bulan = $this->input->post('bulan');
		$bulan_huruf=$this->model->angka_to_bulan($bulan);
		$data = array(
			'tahun' => $tahun,
			'bulan' => $bulan,
			'bulan_huruf'=>$bulan_huruf,
			'row' => $this->model->getPalingLaku($tahun,$bulan)->result()
			);
		
	    $html = $this->load->view('report/laporan_rekomendasi', $data, true);
	    
	    $this->pdfgenerator->generate($html,'laporan_rekomendasi'.$bulan.$tahun,'A4','portrait');
	}



	public function cetak_pembelian()
	{
		$mulai = $this->input->post('mulai');
		$akhir = $this->input->post('akhir');
		
		$data = array(
			'mulai' => $mulai,
			'akhir' => $akhir,
			'total'=>  $this->model->getTotalPembelian('',$mulai,$akhir)->row_array(),
			'row' => $this->model->getPembelian('',$mulai,$akhir)->result()
			);
		
	    $html = $this->load->view('report/laporan_pembelian', $data, true);
	    
	    $this->pdfgenerator->generate($html,'laporan_penjualan'.$mulai,'A4','landscape');
	}
	
	public function cetak_penjualan()
	{
		$mulai = $this->input->post('mulai');
		$akhir = $this->input->post('akhir');
		
		$data = array(
			'mulai' => $mulai,
			'akhir' => $akhir,
			'total'=>  $this->model->getTotalPenjualan('','','',$mulai,$akhir)->row_array(),
			'row' => $this->model->getPenjualan('','','',$mulai,$akhir)->result()
			);
		
	    $html = $this->load->view('report/laporan_penjualan', $data, true);
	    
	    $this->pdfgenerator->generate($html,'laporan_penjualan'.$mulai,'A4','landscape');
	}

	public function cetak_penjualan_cast()
	{
		$mulai = $this->input->post('mulai');
		$akhir = $this->input->post('akhir');
		
		$data = array(
			'mulai' => $mulai,
			'akhir' => $akhir,
			'row' => $this->model->getPenjualan('Cast','','',$mulai,$akhir)->result()
			);
		
	    $html = $this->load->view('report/laporan_penjualan_cast', $data, true);
	    
	    $this->pdfgenerator->generate($html,'laporan_penjualan_cast'.$mulai,'A4','landscape');
	}
	

}