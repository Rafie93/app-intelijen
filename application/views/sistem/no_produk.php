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
         <br></br>
           <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                 <thead>
                  <tr>
              <th>NO</th>
              <th>JENIS LAPORAN</th>
              <th>NO AKHIR</th>
              <th>NO SELANJUTNYA</th>
              <th>FORMAT</th>
              <th>TAHUN</th>
               <th>AKSI</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach ($row as $dt) {?>
              <tr>
             <td><?= $no++?></td>
             <td><?= $dt->jenis_laporan ?></td>
             <td><?= $dt->no ?></td>
             <td><?= $dt->next ?></td>
             <td><?= $dt->format ?></td>
             <td><?= $dt->tahun ?></td>
              <td colspan="2">
              <a  href="<?php echo base_url('sistem/editnomot/'.$dt->id) ;?>" class="btn btn-info"><i class="glyphicon glyphicon-edit">edit</i></a>
                             <a href="<?php echo base_url('sistem/hapus_nomor/'.$dt->id) ;?>"
                              onclick="javascript: return confirm('Anda yakin hapus ?')"
                              class="btn btn-danger"><i class="glyphicon glyphicon-trash">delete</i></a>
              </td>
             </tr>
            <?}
            ?>
          </tbody>
                </table>
            </div>
         
         </div>
       	</div>
    </div>
</div>
