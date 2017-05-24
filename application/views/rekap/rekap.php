<? $this->load->view('rekap/header'); ?>

  <h2> REKAP <?= strtoupper($jenis_laporan)?> </h2>

	<div id="outtable">
	  <table class="zebra-table" border="1">
	   <thead>
          <tr>
            <!--    <th><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /> </th>-->
          <th  style="text-align:center">NO</th>
          <th  style="text-align:center">NO SURAT</th>
          <th  style="text-align:center">BIDANG</th>
          <th  style="text-align:center">JUDUL</th>
          <th  style="text-align:center">PRIHAL</th>
          <th  style="text-align:center">TANGGAL PEMBUATAN</th>
    
          </tr>
          </thead>
            <tbody>
          <?php 
          $no = 1;
            foreach ($row as $data) {
            ?>
            <tr>
            <th  style="text-align:center"><?= $no++ ?></th>
            <th><?= $data->no_surat?></th>
            <th><?= $data->bidang?></th>
            <th><?= $data->judul?></th>
            <th><?= $data->prihal?></th>
            <th  style="text-align:center"><?php
             $tgl = $data->tgl_produk;
             $pisah = explode('-', $tgl);
             $tahun = $pisah[0];
             $bulan = $pisah[1];
             $dat = $pisah[2];

             $tgl_new = $dat." ".$bln_hrf[floatval($bulan)]." ".$tahun;

             echo $tgl_new;
             ?></th>
         
            </tr>
              <?
            }
           ?>
          </tbody>
	  </table>
	 </div>
</body>
</html>