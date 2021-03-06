<?php if(! defined('BASEPATH')) exit('Tidak di perbolehkan mengakses');

/**
* 
*/
class Model extends CI_Model
{
	
	var $bln_romawi = array (
		1 => "I", "II", "III", "IV", "V", "VI",
			"VII", "VIII", "IX", "X", "XI", "XII"
	) ;
	var $bulan_huruf = array(
						1 =>	"Januari",		2  =>"Februari",	3  =>"Maret",		4 	=>"April",
						5 =>	"Mei",			6  =>"Juni",		7  =>"Juli",		8 	=>"Agustus",
						9 =>	"September",	10 =>"Oktober",		11 =>"November",	12 	=>"Desember") ;	
	// penomoran
	public function getKop()
	{
		return $this->db->query("SELECT * FROM pengaturan")->row();
	}
	public function no_generate($jenis,$tahun)
	{
		$romawi = $this->bln_romawi;

		$sql = "SELECT * FROM NO_PRODUK WHERE UPPER(JENIS_LAPORAN) = UPPER('$jenis') AND TAHUN = '$tahun'";
		$data = $this->db->query($sql);
		$row = $data->row();
		if ($data->num_rows() > 0) {
			$no = $row->next;
			if ($no < 10) {
				$no = "00".$no;
			}else if ($no < 100) {
				$no = "0".$no;
			}
			$bulan = date('m');
			$bln_romawi = $romawi[floatval($bulan)];
			$format = strtoupper($row->format);
			$no_surat = $no."/".$format."/".$bln_romawi."/".$tahun;
		}else{
			$no = "001";
			$bulan = date('m');
			$bln_romawi = $romawi[floatval($bulan)];
			$format = strtoupper($jenis);
			$no_surat = $no."/".$format."/".$bln_romawi."/".$tahun;
		}

		return $no_surat;
	}
	public function save_no($jenis,$tahun,$no)
	{
		$sql = "SELECT * FROM NO_PRODUK WHERE UPPER(JENIS_LAPORAN) = UPPER('$jenis') AND TAHUN = '$tahun'";
		$data = $this->db->query($sql);
		$next = floatval($no) + 1;
		$row = $data->row();
		if ($data->num_rows() > 0) {
			$sql = "UPDATE no_produk SET no = '$no', next='$next', tahun = '$tahun'";
		}
		else{
			$format = strtoupper($jenis);
			$sql = "INSERT INTO no_produk (no,jenis_laporan,next,format,tahun) VALUES ('$no','$jenis','$next','$format','$tahun')";
		}
		$this->db->query($sql);
	}
	//query umum
	public function truncate_man($table)
	{
		$sql ="TRUNCATE TABLE $table";
		$query = $this->db->query($sql);

		return $query;
	}
	public function hapus($tabel, $kolom, $primary)
	{
		$sql ="DELETE FROM $tabel WHERE $kolom = '$primary'";
		$query = $this->db->query($sql);

		return $query;
	}
	public function simpan($tabel, $data)
	{
		$this->db->insert($tabel,$data);

	}

	public function ubah($tabel,$premary,$kode,$jenis){
        $this->db->where($premary,$kode);
        $this->db->update($tabel,$jenis);
    }

	
	public function cek($tabel,$primary,$kode)
	{
        $this->db->where($primary,$kode);
        $query=$this->db->get($tabel);

        return $query;
    }

	public function notifikasi($isi){
		?>
		<script>
			alert('<?php echo $isi; ?>');
		</script>
		<?php
	}

	public function menu($jenis=null)
	{
		$where = " 1=1 AND STATUS_MENU = 1";
		if ($jenis != null) {
			$where = $where." AND JENIS_MENU = '$jenis'";
		}
		return $this->db->query("SELECT * FROM MENU_LAPORAN WHERE ".$where." ORDER BY ID ASC")->result();
	}
	public function get_id_produk()
	{
		return $this->db->query("SELECT ID FROM PRODUK ORDER BY ID DESC")->row();
	}
	public function angka_to_bulan($bulan)
	{
		switch ($bulan) {
			case 01:
				$data = 'Januari';
				break;
			case 02:
				$data = 'Februari';
				break;
			case 03:
				$data = 'Maret';
				break;
			case 04:
				$data = 'April';
				break;
			case 05:
				$data = 'Mei';
				break;
			case 06:
				$data = 'Juni';
				break;
			case 07:
				$data = 'Juli';
				break;
			case 08:
				$data = 'Agustus';
				break;
			case 09:
				$data = 'September';
				break;
			case 10:
				$data = 'Oktober';
				break;
			case 11:
				$data = 'November';
				break;
			case 12:
				$data = 'Desember';
				break;
			default:
				$data = '';
				break;
		}
		return $data;
	}
	

	//membuat metode counter dengan mengirimkan parameter
	public function count($tabel,$id,$where,$cari)
	{
		if ($where == '' || $where == null) {
			$sql = "SELECT count('$id') as jumlah FROM $tabel";
		}else{
			$sql = "SELECT count('$id') as jumlah FROM $tabel WHERE $where like '%$cari%'";
		}

		$query = $this->db->query($sql);

		$data= $query->result();

		foreach ($data as $row) {
			$jumlah =number_format($row->jumlah,0,',','.');
		}

		return $jumlah;
	}
	

	
	public function getData($tabel, $kolum=null, $where=null)
	{
		if ($where != '' or $where != null) {
			$sql = "SELECT * FROM $tabel WHERE $kolum like '%$where%'";
		}else{
			$sql = "SELECT * FROM $tabel";
		}

		 $query = $this->db->query($sql);
		 
		return  $query->result();

	}
	public function getJenis_laporan()
	{
		return $this->db->query("SELECT * FROM MENU_LAPORAN WHERE STATUS_MENU = 1 AND JENIS_MENU NOT IN('MASTER','SISTEM') ORDER BY ID ASC")->result();
	}
	public function jenis_lap($jenis)
	{
		return $this->db->query("SELECT * FROM MENU_LAPORAN WHERE STATUS_MENU = 1 AND UPPER(menu) = UPPER('$jenis') ORDER BY ID ASC")->row();
	}

	public function rekapData($jenis,$bidang,$mulai,$akhir)
	{
		$where = " 1=1 AND jenis_laporan = '$jenis'";
		if ($bidang != '') {
			$where = $where." AND bidang = '$bidang'";
		}
		if ($mulai != '') {
			$where = $where." AND tgl_produk >= '$mulai'";
		}
		if ($akhir != '') {
			$where = $where." AND tgl_produk <= '$akhir'";
		}
		$sql = "SELECT * FROM PRODUK WHERE $where ORDER BY tgl_produk ASC, no_surat ASC";
		return $this->db->query($sql)->result();
	}

	//LOGIN
    public function login($username,$password,$level)
    {
    	$query = $this->db->query("SELECT * FROM users_akses WHERE username='$username'  AND password = '$password' AND level='$level'");

    	return $query;
    }

}