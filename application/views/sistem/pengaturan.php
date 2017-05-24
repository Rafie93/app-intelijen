<link rel="stylesheet" href="<?=base_url()?>assets/global/css/style.css" />
<style type="text/css">
  .hidden{display:none;}
</style>
<body>
<div id="container">
  <h1>MEMBUAT <?= $judul ?></h1>
  <div id="body">
        <!-- FORM INPUT -->
       <div class="portlet-body">
                <form id="form" role="form" action="<?php echo base_url('sistem/save_pengaturan'); ?>" class="form-horizontal"  enctype="multipart/form-data" method="post" >
             <div class="form-body">
             <div class="form-md-line-input">
                      <div class="col-md-2 ">
                         <label  for="">Kop Kanan</label>
                      </div>
                        <div class="col-md-10">
                        <input type="file" class="form-control" name="kop_kanan">
                        </div>
                    </div>
                     <div class="form-md-line-input">
                      <div class="col-md-2 ">
                         <label  for="">Judul Aplikasi</label>
                      </div>
                        <div class="col-md-10">
                      <textarea name="judul_aplikasi" class="form-control" id="judul_aplikasi"><?= $row->judul?></textarea>
                        </div>
                    </div>
                    <div class="form-md-line-input">
                        <div class="col-md-2 ">
                         <label  for="">Deskripsi Aplikasi</label>
                      </div>
                    <div class="col-md-10">
                    <textarea name="deskripsi_aplikasi" id="deskripsi_aplikasi" class="form-control"><?= $row->diskripsi?></textarea>
                       </div>
                    
                    </div>
                     <div class="form-md-line-input">
                      <div class="col-md-2 ">
                         <label  for="">Ico</label>
                      </div>
                        <div class="col-md-10">
                        <input type="file" class="form-control" id="ico" name="ico">
                          </div>
                    </div>
                     <div class="form-md-line-input">
                      <div class="col-md-2 ">
                         <label  for="">Logo Rekap</label>
                      </div>
                        <div class="col-md-10">
                      <input type="file" name="logo" class="form-control">
                        </div>
                    </div>
                      <div class="form-md-line-input">
                      <div class="col-md-2 ">
                        <label for="">Header Rekap</label>
                        </div>
                           <div class="col-md-10">
                        <input type="text" id="header" class="form-control" name="header" required value="<?= $row->judul_kop?>"placeholder="Masukkan Header" required>
                      </div>
                   </div>
                   <div class="form-md-line-input">
                      <div class="col-md-2 ">
                        <label for="">Deskripsi Rekap</label>
                        </div>
                           <div class="col-md-10">
                           <textarea name="deskripsi_rekap" class="form-control"><?= $row->desc_kop?></textarea>
                      </div>
                   </div>
                   <div class="form-md-line-input">
                      <div class="col-md-2 ">
                        <label for="">Alamat</label>
                        </div>
                           <div class="col-md-10">
                           <textarea name="alamat" class="form-control"><?= $row->alamat?></textarea>
                        </div>
                   </div>
                 
                    <br><br>
                    <div class="input-group">
                        <input type="button" onclick="simpan_data()" name="btn-simpan" class="btn btn-info" value="SIMPAN">
                        <input type="reset" name="btn-reset" class="btn btn-default" value="RESET">
                    </div>
                   
                </form>
                </br>
      </div>
      
  </div>

</div>

</body>
