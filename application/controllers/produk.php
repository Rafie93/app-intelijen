<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library(array('template','form_validation'));
		$this->load->model(array('model'));
		$this->load->helper(array('form','download','url'));
		if((!$this->session->userdata('username')) && (!$this->session->userdata('admin'))){
            redirect('admin');
        }
	
	}
	public function create($jenis=null,$lap=null,$pesan=null)
	{
		$tahun = date('Y');
		$lap = str_replace('%20', ' ', $lap);
		$surat = $this->model->no_generate($jenis,$tahun);
		$pesan = str_replace('%20', ' ', $pesan);
		$pesan = str_replace("-", "/", $pesan);
		$berkas_contoh = $this->model->cek('berkas_contoh','jenis_laporan',$jenis);
		$file = "";
		if ($berkas_contoh->num_rows() > 0) {
			$berkas_contoh = $berkas_contoh->row();
			$file = $berkas_contoh->contoh_enk;
		}
		
		$data = array(
			'pesan' => $pesan,
			'judul'=> $lap,
			'bidang' => $this->model->getData('bidang'),
			'jenis'=>$jenis,
			'lap' =>$lap,
			'no_surat'=> $surat,
			'berkas_contoh' => $file,
			'post_url' => 'produk/do_upload'
			);
        
		$this->template->admin('produk/create',$data);	
	}
	
	public function lapharintel($pesan=null)
	{		
		$judul = "LAPHAR INTELIJEN";
		$url_create = "produk/create/lapharintel/".$judul."/".$pesan;
		$data = array(
			'judul'=>$judul,
			'url_create' => $url_create,
			'url_data' => "data/data_produk/lapharintel/".$judul."/"."Data Laphar Intelijen",
			'url_penjelasan' =>"data/data_penjelasan/lapharintel/".$judul."/"."Penjelasan Laphar Intelijen",
			'url_rekap' => "rekap/form/lapharintel/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}

	public function lapharsus($pesan=null)
	{
		$judul = "LAPHARSUS";
		$url_create = "produk/create/lapharsus/".$judul."/".$pesan;
		$data = array(
			'judul'=>$judul,
			'url_create' => $url_create,
			'url_data' => "data/data_produk/lapharsus/".$judul."/"."Data",
			'url_penjelasan' =>"data/data_penjelasan/lapharsus/".$judul."/"."Penjelasan lapharsus",
			'url_rekap' => "rekap/form/lapharsus/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}

	public function lapinformasi($pesan=null)
	{
		$judul = "LAPORAN INFORMASI";
		$url_create = "produk/create/lapinformasi/".$judul."/".$pesan;
		$data = array(
			'judul'=>$judul,
			'url_create' => $url_create,
			'url_data' => "data/data_produk/lapinformasi/".$judul."/"."Data",
			'url_penjelasan' =>"data/data_penjelasan/lapinformasi/".$judul."/"."Penjelasan lapinformasi",
			'url_rekap' => "rekap/form/lapinformasi/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}

	public function infokhusus($pesan=null)
	{
		$judul = 'INFO KHUSUS';
		$url_create = "produk/create/infokhusus/".$judul."/".$pesan;
		$data = array(
			'judul'=> $judul,
			'url_create' => $url_create,
			'url_data' => "data/data_produk/infokhusus/".$judul."/"."Data",
			'url_penjelasan' =>"data/data_penjelasan/infokhusus/".$judul."/"."Penjelasan infokhusus",
			'url_rekap' => "rekap/form/infokhusus/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}

	public function lapkhusus($pesan=null)
	{
		$judul = 'LAPORAN KHUSUS';
		$url_create =  "produk/create/lapkhusus/".$judul."/".$pesan;
		$data = array(
			'judul'=> $judul,
			'url_create' => $url_create,
			'url_data' => "data/data_produk/lapkhusus/".$judul."/"."Data",
			'url_penjelasan' =>"data/data_penjelasan/lapkhusus/".$judul."/"."Penjelasan lapkhusus",
			'url_rekap' => "rekap/form/lapkhusus/".$judul,
			);
		$this->template->admin('produk',$data);	
	}
	public function lapatensia($pesan=null)
	{
		$judul = 'LAPORAN ATENSIA';
		$url_create =  "produk/create/lapatensia/".$judul."/".$pesan;
		$data = array(
			'judul'=> $judul,
			'url_create' => $url_create,
			'url_data' => "data/data_produk/lapatensia/".$judul."/"."Data",
			'url_penjelasan' =>"data/data_penjelasan/lapatensia/".$judul."/"."Penjelasan lapatensia",
			'url_rekap' => "rekap/form/lapatensia/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}
	public function telaahintelijen($pesan=null)
	{
		$judul = 'TELAAH INTELIJEN';
		$url_create =  "produk/create/telaahintelijen/".$judul."/".$pesan;
		$data = array(
			'judul'=> $judul,
			'url_create' => $url_create,
			'url_data' => "data/data_produk/telaahintelijen/".$judul."/"."Data",
			'url_penjelasan' =>"data/data_penjelasan/telaahintelijen/".$judul."/"."Penjelasan telaahintelijen",
			'url_rekap' => "rekap/form/telaahintelijen/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}
	public function perkiraankhusus($pesan=null)
	{
		$judul = 'PERKIRAAN KHUSUS';
		$url_create =  "produk/create/perkiraankhusus/".$judul."/".$pesan;
		$data = array(
			'judul'=> $judul,
			'url_create' => $url_create,
			'url_data' => "data/data_produk/perkiraankhusus/".$judul."/"."Data",
			'url_penjelasan' =>"data/data_penjelasan/perkiraankhusus/".$judul."/"."Penjelasan perkiraankhusus",
			'url_rekap' => "rekap/form/perkiraankhusus/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}

	public function perkiraancepat($pesan=null)
	{
		$judul = 'PERKIRAAN CEPAT';
		$url_create =  "produk/create/perkiraancepat/".$judul."/".$pesan;
		$data = array(
			'judul'=> $judul,
			'url_create' => $url_create,
			'url_data' => "data/data_produk/perkiraancepat/".$judul."/"."Data",
			'url_penjelasan' =>"data/data_penjelasan/perkiraancepat/".$judul."/"."Penjelasan perkiraancepat",
			'url_rekap' => "rekap/form/perkiraancepat/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}

	public function perkiraankontinjensi($pesan=null)
	{
		$judul = 'PERKIRAAN KONTINJENSI';
		$url_create =  "produk/create/perkiraankontinjensi/".$judul."/".$pesan;
		$data = array(
			'judul'=> $judul,
			'url_create' => $url_create,
			'url_data' => "data/data_produk/perkiraankontinjensi/".$judul."/"."Data",
			'url_penjelasan' =>"data/data_penjelasan/perkiraankontinjensi/".$judul."/"."Penjelasan perkiraankontinjensi",
			'url_rekap' => "rekap/form/perkiraankontinjensi/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}

	public function lapintelijen($pesan=null)
	{
		$judul = 'LAPORAN INTELIJEN';
		$url_create =  "produk/create/lapintelijen/".$judul."/".$pesan;
		$data = array(
			'judul'=> $judul,
			'url_create' => $url_create,
			'url_data' => "data/data_produk/lapintelijen/".$judul."/"."Data",
			'url_penjelasan' =>"data/data_penjelasan/lapintelijen/".$judul."/"."Penjelasan lapintelijen",
			'url_rekap' => "rekap/form/lapintelijen/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}
	public function memointelijen($pesan=null)
	{
		$judul = 'MEMO INTELIJEN';
		$url_create =  "produk/create/memointelijen/".$judul."/".$pesan;
		$data = array(
			'judul'=> $judul,
			'url_create' => $url_create,
			'url_data' => "data/data_produk/memointelijen/".$judul."/"."Data",
			'url_rekap' => "rekap/form/memointelijen/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}

	public function notaintelijen($pesan=null)
	{
		$judul = 'NOTA INTELIJEN';
		$url_create =  "produk/create/notaintelijen/".$judul."/".$pesan;
		$data = array(
			'judul'=> $judul,
			'url_create' => $url_create,
			'url_data' => "data/data_produk/notaintelijen/".$judul."/"."Data",
			'url_rekap' => "rekap/form/notaintelijen/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}
	public function inteldasar($pesan=null)
	{
		$judul = 'INTELIJEN DASAR';
		$data = array(
			'judul'=> $judul,
			'url_create' => "produk/create/inteldasar/".$judul."/".$pesan,
			'url_data' => "data/data_produk/inteldasar/".$judul."/"."Data",
			'url_penjelasan' =>"data/data_penjelasan/inteldasar/".$judul."/"."Penjelasan inteldasar",
			'url_rekap' => "rekap/form/inteldasar/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}
	public function perkiraanintelkeamanan($pesan=null)
	{
		$judul = 'PERKIRAAN INTELIJEN KEAMANAN';
		$data = array(
			'judul'=> $judul,
			'url_create' => "produk/create/perkiraanintelkeamanan/".$judul."/".$pesan,
			'url_data' => "data/data_produk/perkiraanintelkeamanan/".$judul."/"."Data",
			'url_penjelasan' =>"data/data_penjelasan/perkiraanintelkeamanan/".$judul."/"."Penjelasan perkiraanintelkeamanan",
			'url_rekap' => "rekap/form/perkiraanintelkeamanan/".$judul,
			);
        
		$this->template->admin('produk',$data);	
	}
	
	//END HAPUS

	public function do_upload()
	{
		$edit = $this->input->post('edit');
		
		$no_surat =$this->input->post('no_surat');
		$pisah_surat = explode('/', $no_surat);
		$no = $pisah_surat[0];
		$bidang =$this->input->post('bidang');
		$jenis_laporan =$this->input->post('jenis_laporan');
		$status = $this->input->post('status');
		$tgl_pembuatan = $this->input->post('tgl_pembuatan');
		$pisah_tgl = explode('-', $tgl_pembuatan);
		$tahun = $pisah_tgl[0];
		$prihal = $this->input->post('prihal');
		$pembuatan = $this->input->post('pembuatan');
		$isi = $this->input->post('isi');
		$judul = $this->input->post('judul');
		if ($pembuatan == 'upload'){
			$isi = '';
		}
		$data = array(
			'no_surat' => $no_surat,
			'bidang' =>  $bidang,
			'judul' =>  $judul,
			'prihal' =>  $prihal,
			'tgl_produk' =>  $tgl_pembuatan,
			'status' =>  $status,
			'isi' =>  $isi,
			'jenis_laporan' =>  $jenis_laporan,
			'pembuat' =>  '', 
			);


		$this->model->simpan('produk',$data);
		$this->model->save_no($jenis_laporan,$tahun,$no);

		$jum_berkas = $this->input->post('jum_berkas');
		$id_produk = $this->model->get_id_produk()->ID;
		
    	$config['upload_path'] = './assets/document/';
		$config['allowed_types'] = 'jpg|png|pdf|docx|xls|doc';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		$this->upload->initialize($config);
		for ($i=1; $i <= $jum_berkas; $i++) { 
			$nama_berkas = $this->input->post('file_info-'.$i);

		  	$this->upload->do_upload('file_upload-'.$i);
		  	$file_upload = $this->upload->data(); 
		  	$berkas=$this->upload->file_name;

			
		  	$data_berkas = array (
		  		'id_produk' => $id_produk,
		  		'berkas' => $nama_berkas,
		  		'berkas_enk' => $berkas
		  		);

	     	$this->model->simpan('berkas_produk',$data_berkas);
		}
		$pesan = str_replace("/", "-", $no_surat);
		redirect('produk/create/'.$jenis_laporan."/".strtoupper($jenis_laporan)."/"."Data Sudah Tersimpan Ke No Surat ".$pesan);
  }    
}