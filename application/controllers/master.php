<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('template','form_validation'));
		$this->load->model(array('model'));
		$this->load->helper(array('form','download','url'));
		if((!$this->session->userdata('username')) && (!$this->session->userdata('admin'))){
            redirect('admin');
        }
	
	}
	
	//MULAI MENAMPILKAN HALAMAN
	public function penjelasan()
	{
		$data = array(
			'judul'=>'PENJELASAN',
			'sub_judul' => 'data data penjelasan',
			'row' => $this->model->getData('penjelasan'),
			'jenis' => $this->model->getJenis_laporan(),
			);
        
		$this->template->admin('master/penjelasan',$data);	
	}
	public function bidang()
	{
		$data = array(
			'judul'=>'BIDANG',
			'sub_judul' => 'data data bidang',
			'row' => $this->model->getData('bidang'),
			);
        
		$this->template->admin('master/bidang',$data);	
	}
	public function berkas_contoh()
	{
		$data = array(
			'judul'=>'BERKAS CONTOH',
			'sub_judul' => 'data data berkas contoh',
			'jenis' => $this->model->getJenis_laporan(),
			);
        
		$this->template->admin('master/berkas_contoh',$data);	
	}

	public function save_berkas()
	{
		$jenis_laporan = $this->input->post('jenis_laporan');

		$config['upload_path'] = './assets/document/contoh';
		$config['allowed_types'] = 'jpg|png|pdf|docx|xls|doc';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		$this->upload->initialize($config);
		$nama_berkas = $this->input->post('file_info');

	  	$this->upload->do_upload('file_upload');
	  	$file_upload = $this->upload->data(); 
	  	$berkas=$this->upload->file_name;

		
	  	$data_berkas = array (
	  		'jenis_laporan' => $jenis_laporan,
	  		'berkas_contoh' => $nama_berkas,
	  		'contoh_enk' => $berkas
	  		);

     	$this->model->simpan('berkas_contoh',$data_berkas);

     	redirect('master/berkas_contoh');
	}

	public function save_penjelasan()
	{
		$edit = $this->input->post('edit');

		$penjelasan = $this->input->post('penjelasan');
		$jenis_laporan = $this->input->post('jenis_laporan');
		$materi  = $this->input->post('materi');
		$format = $this->input->post('format');
		$penanggung = $this->input->post('penanggung');
		$distribusi =$this->input->post('distribusi');
		$tanggal = date('Y-m-d');
		
		$data = array(
			'pengertian' => $penjelasan,
			'materi' => $materi,
			'format' => $format,
			'penanggung_jawab' => $penanggung,
			'distribusi'=> $distribusi,
			'tgl_update'=> $tanggal,
			'jenis_laporan'=> $jenis_laporan
			);

		if ($edit != '') {
			$this->model->ubah('penjelasan','id',$edit,$data);
			echo json_encode('Data Penjelasan Sudah Tersimpan');
		}else{
			$this->model->simpan('penjelasan',$data);
			echo json_encode('Data Penjelasan Sudah Tersimpan');
		}
	}
	//END TAMPIL
	//MULAI HAPUS
	public function hapus_pernjelasan($id)
	{
		$this->model->hapus('penjelasan','id',$id);
		echo json_encode('Data Penjelasan Terhapus');
	}
	
}