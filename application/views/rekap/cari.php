<script type="text/javascript" charset="utf-8" async defer>
$().ready(function(){
   // $("#pilih_go").hide();
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
                 $("#pilih_go").show();
                 $("#per_tanggal").show();
                 $("#per_bidang").show();
            }
        });
        //
});
 </script>

 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
             <h1><?= str_replace('%20', ' ', $judul)  ?> </h1>
       </div>
</div>


 <div class="row">		
    <div class="box col-md-12">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    	<div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> *PILIH KATEGORI CETAK DAN KEMUDIAN CETAK</span>
                </div>

            </div>
            
        
			<!-- FORM INPUT -->
			
			 <div class="portlet-body">
                <form role="form" method="post"  action="<?php echo base_url('rekap/cetak'); ?>"  class="form-horizontal">
                <input type="hidden" id="jenis_laporan" name="jenis_laporan" value="<?= $jenis_laporan ?>">
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
                    <input type="text" placeholder="mulai dari" name="mulai" class="form-control datepickerku">
                    </div>
                  </div> 
                  <div class="col-md-3">
                 <div class="form-md-line-input">  
               <input type="text" placeholder="sampai dengan"  name="akhir" class="form-control datepickerku">
                    </div>
                   </div>
                </div>
                
                     <div class="col-md-3">
                     <input type="submit" name="btn-simpan" class="btn btn-info form-control" value="CETAK REKAP">
                   </div>
                  
                   
                </div>
               
                </form>
                </br>
			</div>
		
    	     <p><i>**CATATAN : "pilih kategori cetak"</i></p>


         </div>
       	</div>
    </div>
</div>
