<link rel="stylesheet" href="<?=base_url()?>assets/global/css/style.css" />
<style type="text/css">
  .hidden{display:none;}
</style>
 <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" async defer>
  $().ready(function(){   
    //
    $("#file_upload").change(function() {
      var info =  $('#file_upload')[0].files[0];
      $("#file_info").val(info.name);
    });
  });
  function select_data($id,$nama,$file){
        $("#jenis_laporan").val($nama);
        $('#edit').val($id);
        $('#file_upload').val($file);
    }
  function batal () {
     $("#penanggung").val('');
     $("#penjelasan").val('');
     $("#materi").val('');
     $("#format").val('');
     $("#distribusi").val('');
     $("#edit").val('');
  }
  function simpan_data(){
    var jenis = $("#jenis_laporan").val();
    var penanggung = $("#penanggung").val();
    var penjelasan = $("#penjelasan").val();
    var materi = $("#materi").val();
    var format = $("#format").val();
    var distribusi = $("#distribusi").val();
    var edit = $("#edit").val();

    if (jenis == '') {
      alert("Pilih dulu jenis laporan") ;
    }else
    if (penanggung == '') {
      alert("Penanggung Jawab tidak boleh kosong");
    }
    else {
      tinyMCE.triggerSave();
      $.ajax({
        data    : {jenis_laporan:jenis,edit:edit,penjelasan:penjelasan,materi:materi,
                    format:format,distribusi:distribusi,penanggung:penanggung},
        secureuri: false,
        dataType  : "json",
        type    : "post",
        url     : "<?php echo base_url('master/save_penjelasan'); ?>",
        async     : false,
        success : function(result){
          alert(result);
          
           $("#penanggung").val('');
           $("#penjelasan").text('');
           $("#materi").text('');
           $("#format").text('');
           $("#distribusi").text('');
           $("#edit").val('');

           $('#form').reset();
           }
      });
          
        
    }
  }         
</script>
<body>
<div id="container">
  <h1>MEMBUAT <?= $judul ?></h1>
  <div id="body">
        <!-- FORM INPUT -->
       <div class="portlet-body">
                <form id="form" role="form" method="post" action="<?php echo base_url('master/save_berkas'); ?>" class="form-horizontal"  enctype="multipart/form-data" >
                <input type="hidden" name="edit" id="edit"> 
             <div class="form-body">
             <div class="form-md-line-input">
                      <div class="col-md-2 ">
                         <label  for="">JENIS LAPORAN</label>
                      </div>
                        <div class="col-md-10">
                        <select id="jenis_laporan" name="jenis_laporan" class="form-control">
                        <option value="">Pilih Jenis Laporan</option>
                          <?php 
                          foreach ($jenis as $jn) { ?>
                            <option value="<?= strtolower($jn->menu) ?>"><?= $jn->alias ?></option>
                          <?}
                          ?>
                        </select>
                        </div>
                    </div>
                       <div class="form-md-line-input" class="d_upload">
                      <div class="col-md-2 d_upload">
                        <label>UPLOAD CONTOH BERKAS</label>
                      </div>
                      <div class="col-md-10 d_upload">
              <input class="form-control" type="file" id="file_upload" name="file_upload">
                      </div>
                     
            <input type="hidden" class="fileUpload" id="file_info" name="file_info">
            <br>
                    </div>

                  </div>
                 
                    <br><br><br>
                    <div class="input-group">
                        <input type="submit" name="btn-simpan" class="btn btn-info" value="SIMPAN">
                        <input type="reset" name="btn-reset" class="btn btn-default" value="RESET">
                    </div>
                   
                </form>
                </br>
      </div>
      <div>
          <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                 <thead>
                  <tr>
              <th>NO</th>
              <th>JENIS LAPORAN</th>
              <th>BERKAS CONTOH</th>
              <th>AKSI</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            foreach ($dt as $row) {?>
              <tr>
                <td><?= $no++?></td>
                <td><?= $row->jenis_laporan ?></td>
                <td><a href="<?php echo base_url('assets/document/contoh/'.$row->contoh_enk);?>"><?= $row->berkas_contoh ?></a></td>
                 <td colspan="2">
              <button  onclick="select_data('<?= $row->id;?>','<?= $row->jenis_laporan?>','<?= $row->berkas_contoh?>')"
                            class="btn btn-info"><i class="glyphicon glyphicon-edit">edit</i></button>
                             <a href="<?php echo base_url('master/hapusbidang/'.$row->id) ;?>"
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

</body>
