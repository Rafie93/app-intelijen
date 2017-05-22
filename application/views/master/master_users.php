<script>
    function select_data($id,$username,$level){
        $("#username").val($username);
        $("#nama").val($alamat);
        $("#level").val($level);

        $('#edit').val($id);
    }
    
</script>

 <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
             <h1><?= $judul ?>
                 <small><?= $sub_judul ?></small>
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
                    <span class="caption-subject bold uppercase"> DATA USERS</span>
                </div>

            </div>
        
			<!-- FORM INPUT -->
			
			 <div class="portlet-body">
                <form role="form" method="post" action="<?php echo base_url('master/simpan_users'); ?>"  class="form-horizontal">
                    <div class="form-body">
                    <div class="form-md-line-input">
                        <label for="">Username</label>
                        <input type="hidden" name="edit" id="edit"> 
                        <input type="text" id="username" class="form-control" name="username" value=""placeholder="Masukkan Username" required>
                    </div>
                      <div class="form-md-line-input">
                        <label for="">Atas Nama</label>
                        <input type="text" id="nama" class="form-control" name="nama" value=""placeholder="Masukkan atas nama" required>
                    </div>
                      <div class="form-md-line-input">
                        <label for="">Password</label>
                      
                        <input type="password" id="password" class="form-control" name="telp" value=""placeholder="Masukkan Password" required>
                    </div>
                    <div class="form-md-line-input">
                        <label for="">Level</label>
                        <select name="level" id="level" class="form-control">
                          <option value="Admin">Admin</option>
                          <option value="Petugas Cetak">Petugas Cetak</option>
                        </select>
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="submit" name="btn-simpan" class="btn btn-info" value="SIMPAN">
                        <input type="reset" name="btn-reset" class="btn btn-default" value="RESET">
                    </div>
                   
                </form>
                </br>
			</div>
			

         	<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                 <thead>
                  <tr>
                <!--    <th><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /> </th>-->
		        	<th>NO</th>
               <th>USERNAME</th>
		        	<th>NAMA </th>
               <th>LEVEL</th>
           
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
						<th >
            <?= $data->username?></th>
            <th><?= $data->atas_nama?></th>
            <th><?= $data->level?></th>
						<th colspan="2">
							<button  onclick="select_data('<?= $data->username;?>','<?=  $data->atas_nama;?>','<?=  $data->level;?>')"
                            class="btn btn-info"><i class="glyphicon glyphicon-edit">edit</i></button>
                             <a href="<?php echo base_url('master/hapususers/'.$data->username) ;?>"
                              onclick="javascript: return confirm('Anda yakin hapus ?')"
                              class="btn btn-danger"><i class="glyphicon glyphicon-trash">delete</i></a></th>
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
