<script type="text/javascript" charset="utf-8" async defer>
$().ready(function(){
    $("#pilih_go").hide();
    $("input:radio[name=filter]").change(function() {
            if (this.checked && this.value == 'per_tanggal') {
                $("#pilih_go").show();
                $("#per_tanggal").show();
                $("#per_bidang").hide();
            }else
            if (this.checked && this.value == 'per_bidang'){
                $("#pilih_go").show();
                $("#per_tanggal").hide();
                $("#per_bidang").show();
            }
            else{
                 $("#pilih_go").hide();
            }
        });
        //
});
 </script>
 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
             <h1><?= str_replace('%20', ' ', $judul) ?>
                 <small><?= str_replace('%20', ' ', $sub_judul) ?></small>
             </h1>
       </div>
</div>

 <div class="row">		
    <div class="box col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    	<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> <?= str_replace('%20', ' ', $judul) ?></span>
                </div>

            </div>
         <a href="<?= base_url($url_create); ?>" class="btn btn-succes"><i class="glyphicon glyphicon-plus">TAMBAH DATA</i></a>
         <br><br>
         <div class="portlet-body">
                <form role="form" method="post"  action="<?php echo base_url('data/data_produk_filter'); ?>"  class="form-horizontal">
                    <div class="form-body">
                <div class="col-md-12">
                    <div class="col-md-3">
                      <div class="form-md-line-input">       
                      <label for="">Filter Berdasarkan</label>
                    </div>
                  </div> 
                   <div class="col-md-9">
                      <div class="form-md-line-input">       
                      <input type="radio" checked name="filter" value="all">All
                      <input type="radio" name="filter" value="per_bidang">Bidang
                      <input type="radio" name="filter" value="per_tanggal">Per Tanggal
                    </div>
                  </div> 
                </div><br>

                <div class="col-md-12" id="pilih_go">
                <div id="per_bidang">
                     <div class="col-md-3">
                      <div class="form-md-line-input">       
                        <select id="bidang" name="bidang" class="form-control" id="">
                          <option value="">Semua Bidang</option>
                          <?php foreach ($bidang as $bd) { ?>
                              <option value="<?= $bd->bidang?>"><?= $bd->bidang?></option>
                          <?}?>
                        </select>
                    </div>
                  </div> 
                </div>
                  
                <div id="per_tanggal">
                      <div class="col-md-3">
                      <div class="form-md-line-input">  
                    <input type="date" placeholder="mulai dari" name="mulai" class="form-control datepickerku">
                    </div>
                  </div> 
                  <div class="col-md-3">
                 <div class="form-md-line-input">  
               <input type="date" placeholder="sampai dengan"  name="akhir" class="form-control datepickerku">
                    </div>
                   </div>
                </div>
                
                     <div class="col-md-3">
                     <input type="submit" name="btn-simpan" class="btn btn-info form-control" value="FILTER">
                   </div>
                  
                   
                </div>
               
                </form>
                </br>
                </div>
            </div></br><br>
         	<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                 <thead>
                  <tr>
		        	<th>NO</th>
		        	<th>NO SURAT</th>
		        	<th>JUDUL</th>
                    <th>PRIHAL</th>
                    <th>TANGGAL</th>
                    <th>BIDANG</th>
                    <th>DOWNLOAD</th>
					<th>AKSI</th>
				    </tr>
				    </thead>
				    <tbody>
					<?php 
					$no = 1;
						foreach ($row as $data) {
						?>
						<tr>
						<th><?= $no++ ?></th>
                        <th><?= $data->no_surat?></th>
                        <th><?= $data->judul?></th>
                        <th><?= $data->prihal?></th>
                        <th><?= $data->tgl_produk?></th>
						<th><?= $data->bidang?></th>
						<th>
                        <?php 
                        $i = 1;
                        $berkas = $this->model->getData('berkas_produk','id_produk',$data->id);
                        foreach ($berkas as $bk) { ?>
                          <a href="<?= $bk->berkas_enk?>"><?= $i++ . ") " .$bk->berkas?></a>
                        <?}
                        ?>    
                        </th>
						<th colspan="2">
                          
                        </th>
						</tr>
							<?
						}
					 ?>
					</tbody>
    	        	</table>
         </div>
       	</div>
    </div>
</div>
